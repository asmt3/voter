<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class UsersController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('User', 'Party');

	public function beforeFilter() {

		// $this->Auth->allow('login');

		// if ($this->Auth->user('User.id')) {
		// 	$this->Auth->allow();
		// }

		parent::beforeFilter();
	}

	public function view($user_id = null) {


		if (!$this->User->exists($user_id)) {
			throw new NotFoundException(__('Invalid User'));
		}

		// TODO: check they are friends
		$me_user_id = $this->Auth->user('User.id');

		if ($me_user_id == $user_id) {
			return $this->redirect('/me');
		}

		$areFriends = $this->User->Friendship->areFriends($me_user_id, $user_id);
		
		$user = $this->User->find('first', array(
			'contain' => array('Fbuser'),
			'conditions' => array(
				'User.id' => $user_id
			)
		));

		$parties = $this->Party->getAllRandom();

		
		// their vote doesn't come into if not friends
		$my_vote = $areFriends ? $this->User->Vote->getMyVote($me_user_id) : false;

		$friendshipVoteSummary = $this->User->Vote->getFriendshipVoteSummary($user_id, $me_user_id);

		// get this users vote, and append
		$their_vote = $this->User->Vote->getMyVote($user_id);

		
		if ($their_vote) {

			

			$friendshipVoteSummary[$their_vote['Vote']['party_id']]['votes']
			 = $friendshipVoteSummary[$their_vote['Vote']['party_id']]['votes'] + 1;
		}
		


		$this->set(compact('user', 'parties', 'my_vote', 'friendshipVoteSummary', 'areFriends'));
	}

	public function me() {


		$user_id = $this->Auth->user('User.id');

		if (!$user_id) {
			return $this->redirect('/');
		}

		$user = $this->User->find('first', array(
			'contain' => array('Fbuser'),
			'conditions' => array(
				'User.id' => $user_id
			)
		));

		$parties = $this->Party->getAllRandom();

		$my_vote = $this->User->Vote->getMyVote($user_id);
		$friendshipVoteSummary = $this->User->Vote->getFriendshipVoteSummary($user_id);

		$this->set(compact('user', 'parties', 'my_vote', 'friendshipVoteSummary'));
	}

	// public function friends() {

	// 	$user_id = $this->Auth->user("User.id");

	// 	$friends = $this->User->Friendship->find('all', array(

	// 		'contain' => array(
	// 			'User.Fbuser'
	// 		),
	// 		'conditions' => array("Friendship.friend1_user_id" => $user_id)
	// 	));

	// 	$this->set(compact('friends'));
	// }

	public function login() {

		$allVoteSummary = $this->User->Vote->getAllVoteSummary();
		$parties = $this->User->Vote->Party->find('all');

		$this->set(compact('allVoteSummary', 'parties'));
	}

	public function logout() {
		$this->Auth->logout();
		$this->redirect('/');

	}
}