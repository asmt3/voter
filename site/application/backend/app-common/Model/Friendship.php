<?php
App::uses('AppModel', 'Model');
/**
 * Friendship Model
 *
 * @property Friend1User $Friend1User
 * @property Friend2User $Friend2User
 */
class Friendship extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'friend2_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);


	public function areFriends($friend1_user_id, $friend2_user_id) {
		return !! $this->find('count', array(
			'conditions' => array(
				'friend1_user_id' => $friend1_user_id,
				'friend2_user_id' => $friend2_user_id,
			)
		));
	}
}
