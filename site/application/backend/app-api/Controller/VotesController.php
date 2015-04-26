<?php
App::uses('AppController', 'Controller');
/**
 * Votes Controller
 *
 * @property Vote $Vote
 * @property PaginatorComponent $Paginator
 */
class VotesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	

	function cast() {

		$user_id = $this->Auth->user('User.id');
		$party_id = $this->request->data('party_id');

		$vote = $this->Vote->cast($user_id, $party_id);

		$friendshipVoteSummary = $this->Vote->getFriendshipVoteSummary($user_id);

		$this->set(compact('vote', 'friendshipVoteSummary'));

	}


}
