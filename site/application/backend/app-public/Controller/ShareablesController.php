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
class ShareablesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('User', 'Party');
	public $layout = false;

	public function beforeFilter() {

		$this->Auth->allow('flag');

		parent::beforeFilter();
	}

	public function flag($user_id = null) {


		if (!$this->User->exists($user_id)) {
			throw new NotFoundException(__('Invalid User'));
		}

		$is_facebook = strpos($_SERVER['HTTP_USER_AGENT'],'facebook') !== false;
		$is_debug = (Configure::read('debug') > 0) && $this->request->query('debug');

		if (!$is_facebook and !$is_debug) {
			//Anyone else, just redirect to the main page
			$redirect_url = Configure::read('BASE_URL')."/u/".$user_id;

			$this->redirect($redirect_url);
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
}