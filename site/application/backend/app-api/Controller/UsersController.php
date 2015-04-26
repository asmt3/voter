<?php
App::uses('AppController', 'Controller');



class UsersController extends AppController {

	public $uses = array('User');

	public function beforeFilter() {

		$this->Auth->allow('initialise');

		parent::beforeFilter();
	}

	public function initialise() {

		// insist POST
		$this->_insistPost();

		// validate request
		$fb_token = $this->request->data('fb_token');

		// validate request
		if ( !$fb_token ) {
			throw new ValidationException("missing fb_token");
		}

		// get or create user by fb_token
		$user_id = $this->User->Fbuser->createOrUpdateFromFbToken($fb_token);

		// if this user is different from the one we have logged in
		// AND the logged in user isn't authed (super important)
		$this->Auth->login(array(
			'User' => array(
				'id' => $user_id
			)
		));


		// GET GAME DATA

    	// get the user
		$user = $this->User->Friendship->find('all', array(
			'fields' => array(
				'User.id',
				'Vote.id',
				'Vote.party_id',
			),
			'contain' => array(
				'Vote',
			),
			'conditions' => array(
				'User.id' => $user_id
			)
		));

		$vote = $this->User->Vote->getMyVote($user_id);

		$friendshipVoteSummary = $this->User->Vote->getFriendshipVoteSummary($user_id);
		


		$this->set(compact(
			'vote',
			'friendshipVoteSummary'
		));

	}

	public function logout() {

		// insist POST
		$this->_insistPost();

		$this->Auth->logout();
		
	}

}
