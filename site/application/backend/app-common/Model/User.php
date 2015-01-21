<?php
App::uses('AppModel', 'Model');

class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed


	/**
	 * hasOne associations
	 *
	 * @var array
	 */
	public $hasOne = array(
		'Fbuser' => array(
			'className' => 'Fbuser',
			'foreignKey' => 'user_id',
		)
	);

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		
		'Friendship' => array(
			'className' => 'Friendship',
			'foreignKey' => 'friend1_user_id',
		),
		
		'Notification' => array(
			'className' => 'Notification',
			'foreignKey' => 'user_id',
			'conditions' => array(
				'Notification.seen' => false,
				'Notification.type' => array(
					'nudge',
					'guessgame_challenge',
					'friend_profile_setup',
					'guessgame_complete',
					'bookmark_it',
				),
			)
		)
	);


	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array(
		'Friend' => array(
			'className' => 'User',
			'joinTable' => 'friendships',
			'foreignKey' => 'friend1_user_id',
			'associationForeignKey' => 'friend2_user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => array('id'),
		),

	);

	public function createEmptyUser() {

		// create an empty user
		$this->create();
		$this->save();
		return $this->id;
	}

	public function markAsMigrated($user_id) {
		$this->id = $user_id;
		return $this->saveField('migrated', true);
	}

	public function areFriends($friend1_user_id, $friend2_user_id) {

		$count = $this->Friendship->find('count', array(
			'conditions' => compact('friend1_user_id', 'friend2_user_id')
		));

		return !! $count;
	}

}
