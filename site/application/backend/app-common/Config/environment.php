<?php

// determine environment, default vagrant
Configure::write('ENVIRONMENT', isset($_SERVER['ENVIRONMENT']) ? $_SERVER['ENVIRONMENT'] : 'VAGRANT');

switch (Configure::read('ENVIRONMENT')) {
	case 'PRODUCTION':
		Configure::write('BASE_URL', 'https://friendorfraud.argos.co.uk');
		break;
	case 'STAGING':
		Configure::write('BASE_URL', 'https://giftfinderstaging.argos.co.uk');
		break;
	
	default:

		// we're on vagrant or vagrant share, set to whatever we're on
		
		if (!isset($_SERVER['SERVER_NAME'])) {
			$_SERVER['SERVER_NAME'] = 'local.xmas.argos.co.uk';
		}

		Configure::write('BASE_URL', 'http://' . $_SERVER['SERVER_NAME']);
		break;
}