<?php
App::uses('AppModel', 'Model');
/**
 * Vote Model
 *
 * @property User $User
 * @property Party $Party
 */
class Vote extends AppModel {


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
		'Party' => array(
			'className' => 'Party',
			'foreignKey' => 'party_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	

	function getMyVote($user_id) {

		$vote = $this->find('first', array(
			'fields' => array('Vote.id', 'Vote.party_id'),
			'conditions' => array('Vote.user_id' => $user_id),
		));

		return $vote ? $vote : false;
	}


	function cast($user_id, $party_id) {

		$data = compact('user_id', 'party_id');

		// does record exist for this user?
		if ($vote = $this->getMyVote($user_id)) {
			$this->id = $vote['Vote']['id'];
		} else {
			$this->create();
		}

		
		return $this->save($data);
	}

	function getFriendshipVoteSummary($user_id, $exclude_user_id = null) {

		// get parties
		$parties = $this->Party->find('list', array(
			'fields' => array('id','short_name'),
		));

		// get vote sums

		$conditions = array(
          'Friendship.friend1_user_id' => $user_id,
          'Friendship.friend2_user_id = Vote.user_id',
        );


		if ($exclude_user_id) {
			$conditions[] = array(
				'Friendship.friend2_user_id <>' => $exclude_user_id,
			);
		}

		$this->virtualFields = array(
		    'vote_count' => 'COUNT(Vote.id)'
		);

		$friendVoteCounts = $this->find('list', array(
			'joins' => array(
		      array(
		        'alias' => 'Friendship',
		        'table' => 'friendships',
		        'type' => 'INNER',
		        'conditions' => $conditions,
		    )),
			'fields' => array('party_id', 'vote_count'),
			
			'conditions' => array(
				
				'Vote.disabled' => false,
			),
			'group' => array('party_id'),
		));

		$this->virtualFields = false;

		

		// build result
		$result = array();
		foreach ($parties as $party_id => $party_short_name) {

			$votes = isset($friendVoteCounts[$party_id]) ? $friendVoteCounts[$party_id] : 0;
			$result[$party_id] = compact('party_id', 'votes', 'party_short_name');
				
		}


		return $result;
	}

	function getAllVoteSummary() {

		// get parties
		$parties = $this->Party->find('list', array(
			'fields' => array('id','short_name'),
		));

		// get vote sums
		$this->virtualFields = array(
		    'vote_count' => 'COUNT(Vote.id)'
		);

		$allVoteCounts = $this->find('list', array(
			'fields' => array('party_id', 'vote_count'),
			
			'conditions' => array(
				
				'Vote.disabled' => false,
			),
			'group' => array('party_id'),
		));

		$this->virtualFields = false;

		

		// build result
		$result = array();
		foreach ($parties as $party_id => $party_short_name) {

			$votes = isset($allVoteCounts[$party_id]) ? $allVoteCounts[$party_id] : 0;
			$result[$party_id] = compact('party_id', 'votes', 'party_short_name');
				
		}


		return $result;
	}
}
