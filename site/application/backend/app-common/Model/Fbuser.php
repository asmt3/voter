<?php
App::uses('AppModel', 'Model');

// Use Facebook SDK
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

/**
 * Fbuser Model
 *
 * @property User $User
 */
class Fbuser extends AppModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'first_name';


    //The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );


    // Facebook 
    private function initFacebook() {
        $app_id = Configure::read('FACEBOOK_APP_ID');
        $app_secret = Configure::read('FACEBOOK_APP_SECRET');
        FacebookSession::setDefaultApplication($app_id, $app_secret);
    }

    public function createOrUpdateFromFbToken($fb_token) {

        // init FB Application Session
        $this->initFacebook();

        try {

            // this will throw an exception if the token isn't valid
            $session = new FacebookSession($fb_token);
            
            $request = new FacebookRequest($session, 'GET', '/me');
            $response = $request->execute();
            $graphUser = $response->getGraphObject(GraphUser::className());

        } catch (Exception $e) {
            
            throw new ForbiddenException("Facebook token invalid");
        }

        // have we seen them before
        $fbuser = $this->find('first', array(
            'conditions' => array(
                'Fbuser.fb_uid' => $graphUser->getId()
            ),
            'contain' => 'User',
        ));



        // if not, 
        if ( !$fbuser ) {
            // new user, create them
            $this->User->create();
            $this->User->save();
            $user_id = $this->User->id;

            // create fbuser record
            $fbuser = $this->createOrUpdateFromFbGraphUser($user_id, $graphUser, $fb_token);

        } else {

            // update fbuser record
            $fbuser = $this->createOrUpdateFromFbGraphUser(
                $fbuser['User']['id'], 
                $graphUser, 
                $fb_token,
                $fbuser['Fbuser']['id']
            );

            // no point in getting the data from the database again
            $user_id = $fbuser['Fbuser']['user_id'];

        }

        // Process Friends
        $this->saveFacebookFriendships($session, $user_id);

        return $user_id;
    }



    private function createOrUpdateFromFbGraphUser($user_id, $FbGraphUser, $fb_token, $fbuser_id = null) {

        // work out age, if they have a birthday
        
        if ($birthday = $FbGraphUser->getProperty('birthday')) {

            $dt = DateTime::createFromFormat('m/d/Y', $birthday);

            $birthday_mysql = $dt->format('Y-m-d');

            // calculate age
            $age = $dt->diff(new DateTime('now'))->y;

        } else {

            // default is null
            $birthday_mysql = null;
            $age = null;
        }

        // extract data from FbGraphUser
        $fbuser = array(
            'user_id' => $user_id,
            'fb_uid' => $FbGraphUser->getId(),
            'email' => $FbGraphUser->getProperty('email'),
            'first_name' => $FbGraphUser->getFirstName(),
            'last_name' => $FbGraphUser->getLastName(),
            'gender' => $FbGraphUser->getProperty('gender'),
            'birthday' => $birthday_mysql,
            'age' => $age,
            'locale' => $FbGraphUser->getProperty('locale'),
            'token' => $fb_token,
        );

        // is this an update?
        if ($fbuser_id) {
            // yes
            $fbuser['id'] = $fbuser_id;
        } else {
            // create a new record
            $this->create();    
        }

        // save the FB user
        $fbuser = $this->save($fbuser);

        return $fbuser;
        
    }

    private function saveFacebookFriendships($session, $user_id) {

        // check for any other friends who use this app
        // only take in their first 5000 friends!
        $request = new FacebookRequest(
          $session,
          'GET',
          '/me/friends?limit=5000'
        );
        $response = $request->execute();
        $friendsListObject = $response->getGraphObject();

        $friendsListArray = $friendsListObject->asArray();

        $this->log($friendsListArray);

        if (!empty($friendsListArray) && isset($friendsListArray['data'])) {
            // they have friends, whoop!
    
            foreach ($friendsListArray['data'] as $friendObject):


                $friend_fb_uid = $friendObject->id;

                // some friends will already be known
                // we need to find out which friendships are not in our friendship table

                // look the friend up by fb_uid and get their User.id
                $friendUser = $this->find('first', array(
                    'fields' => array('Fbuser.user_id'),
                    'conditions' => array('Fbuser.fb_uid' => $friend_fb_uid),
                ));
                
                // only useful for development, no need to remove
                // as we are all working on different databases.. friendships
                // will get out of sync
                if (!$friendUser) continue;

                $friend_user_id = $friendUser['Fbuser']['user_id'];


                // look the friendship up
                $friendshipExists = $this->User->Friendship->find('count', array(
                    'conditions' => array(
                        'friend1_user_id' => $user_id,
                        'friend2_user_id' => $friend_user_id,
                    )
                ));
            
                // if the friendship doesn't exist, create it
                if (!$friendshipExists) {

                    // create two records for each friendship

                    $friendshipDoubleRecord = array(
                        array(
                            'friend1_user_id' => $user_id,
                            'friend2_user_id' => $friend_user_id,
                        ),
                        array(
                            'friend1_user_id' => $friend_user_id,
                            'friend2_user_id' => $user_id,
                        )
                    );

                    $createNotification = true;

                    foreach ($friendshipDoubleRecord as $record) {
                        try {
                            $this->User->Friendship->create($record);
                            $this->User->Friendship->save();

                            
                        } catch (Exception $e) {
                            // friendship already existed
                            // just avoiding a race condition
                            // mysql will throw an error if friendship already

                            // $createNotification = false;
                        }
                    }

                    // Notify the friend
                    // if ($createNotification) {
                    //     $this->User->Notification->notify(array(
                    //         'user_id' => $friend_user_id, // the person being challenged
                    //         'type' => 'friend_joined',
                    //         'foreign_id' => $user_id,
                    //     ));
                    // }
                    

                }

            endforeach; // ($friendsListObject as $friendObject):
        }
        
    }
}
