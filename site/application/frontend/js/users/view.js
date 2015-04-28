$(function(){

	updateFlag();

	updateShareCTA();

	$('.party a').click(function(){


		var $a = $(this);

		var party_id = $a.data('party-id');

		// update my_vote
		data.my_vote = {
			Vote: {
				party_id: party_id
			}
		};

		$('.party a').removeClass('selected');
		$a.addClass('selected');

		// scroll to the top
		$("html, body").animate({ scrollTop: 0 }, null, updateFlag);

		// post vote to API
		$.post('/api/votes/cast', {party_id: party_id}, function(response){
			console.log(response);
		})
		

		return false;

	});

	// handle log in
	$('a.fb-login').click(function(){

		FB.login(function(response) {
			console.log(response);
		  if (response.status === 'connected') {
		    // Logged into your app and Facebook.

		    $.post('/api/users/initialise', {
		    	fb_token: response.authResponse.accessToken
		    }, function(voter_login_response){
		    	

		    	// assume it worked!
		    	window.location.reload();


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

	$(".fb-share").click(function(){

		var share_href = $(this).data('share-href');

		// append another timestamp to make sure share is fresh
		share_href += '/' + new Date().getTime();


		FB.ui({
		  method: 'share',
		  href: share_href,
		}, function(response){});

		return false;
	})

})


function updateShareCTA() {
	if (data.my_vote) {
		$('.share-cta').slideDown();
	}
}

function updateFlag() {

	var friendshipVoteSummary = data.friendshipVoteSummary;
	var my_vote = data.my_vote;

	// get total votes
	var total = 0;
	for(party_id in friendshipVoteSummary) {
		var party_summary = friendshipVoteSummary[party_id];
		total += Number(party_summary.votes);
	}

	if (my_vote) {
		total++;
	}

	$('#flag li').css('width', 0);

	for(party_id in friendshipVoteSummary) {
		var party_summary = friendshipVoteSummary[party_id];
		var votes = party_summary.votes;

		if (my_vote && my_vote.Vote.party_id == party_id) {
			votes++;
		}

		var percentage = 100 * votes / total + '%';
		var flag_li = $('#flag li.' + party_summary.party_short_name);
		
		flag_li.css('width', percentage);


	}

	updateShareCTA();
}
