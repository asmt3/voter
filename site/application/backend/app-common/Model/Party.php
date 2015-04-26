<?php
App::uses('AppModel', 'Model');
/**
 * Party Model
 *
 */
class Party extends AppModel {


	function getAllRandom() {
		return $this->find('all', 
			array(
				'contain' => false,
				'order' => array("sort_order ASC, RAND()"),
				)
		);
	}
}
