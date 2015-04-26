<?php

// Set API keys

// determine API keys based on environment
switch (Configure::read('ENVIRONMENT')) {
	case 'VAGRANT':
		
		Configure::write('FACEBOOK_APP_ID', '1602360956677138');
		Configure::write('FACEBOOK_APP_SECRET', '7f6f1c8eac7606d8f6abbc73a07f7c78');
		
		break;

	// case 'STAGING':

	// 	Configure::write('FACEBOOK_APP_ID', '828020850565761');
	// 	Configure::write('FACEBOOK_APP_SECRET', 'bf8b6f1253749fe0943a415e7124bbcc');
	// 	Configure::write('FACEBOOK_APP_NAMESPACE', 'f-or-f-test');
		
	// 	break;

	// case 'PRODUCTION':

	// 	Configure::write('FACEBOOK_APP_ID', '826583690709477');
	// 	Configure::write('FACEBOOK_APP_SECRET', '3ae27236618eaa3444af82ecc49030fe');
	// 	Configure::write('FACEBOOK_APP_NAMESPACE', 'friend-or-fraud');
		
	// 	break;
	
	default:
		throw new Exception("Unknown environment");
		
		break;
}


