<?php


class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'login' => 'root',
		'password' => 'rootpass',
		'database' => 'voter',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	// public $shared = array(
	// 	'datasource' => 'Database/Mysql',
	// 	'persistent' => false,
	// 	'host' => 'localhost',
	// 	'login' => 'user',
	// 	'password' => 'password',
	// 	'database' => 'test_database_name',
	// 	'prefix' => '',
	// 	//'encoding' => 'utf8',
	// );
}
