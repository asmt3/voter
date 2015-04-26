$(function(){
	$('a.fb-login').click(function(){

		FB.login(function(response) {
			console.log(response);
		  if (response.status === 'connected') {
		    // Logged into your app and Facebook.

		    $.post('/api/users/initialise', {
		    	fb_token: response.authResponse.accessToken
		    }, function(voter_login_response){
		    	

		    	// assume it worked!
		    	if (voter_login_response.vote) {
		    		window.location.href = '/friends';
		    	} else {
		    		window.location.href = '/me';
		    	}


		    });
		    
		  } else if (response.status === 'not_authorized') {
		    // The person is logged into Facebook, but not your app.
		  } else {
		    // The person is not logged into Facebook, so we're not sure if
		    // they are logged into this app or not.
		  }

		}, {
			scope: 'user_friends', 
			return_scopes: true
		});

		return false;
	})
})


