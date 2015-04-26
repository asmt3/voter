<?php 

	$flag_filename = $this->ImageComposer->flag(
		$user, $friendshipVoteSummary, $my_vote, $parties
	);

	$flag_url = Configure::read('BASE_URL') . '/img/flags/' . $flag_filename;


	$title = 'If ' . $user['Fbuser']['first_name'] . ' and their friends were in charge, this would be the colour of the new UK parliament.';

	

	// description
	$total = 0;
	foreach ($friendshipVoteSummary as $party) {
		$total += $party['votes'];
	}

	if ($my_vote) $total++;

	foreach ($parties as $party) {

		$party_id = $party['Party']['id'];
		$count = $friendshipVoteSummary[$party_id]['votes'];

		if ($my_vote && $my_vote['Vote']['party_id'] == $party_id) {
			$count++;
		}

		if ($count) {
			$percentage = round(100 * $count / $total, 1);

			$partiesWithVotes[] = compact('party', 'percentage');	
		}
		
	}

	// var_dump($partiesWithVotes);

	$description = 'If ' . $user['Fbuser']['first_name'] . ' and their friends were in charge, the new UK parliament would be ';


	foreach ($partiesWithVotes as $k => $partyWithVotes) {
		$description .= $partyWithVotes['percentage'] . '% ' .  $partyWithVotes['party']['Party']['name'];

		if ($k < count($partiesWithVotes) - 2) {
			$description .= ', ';
		} elseif ($k == count($partiesWithVotes) - 2) {
			$description .= ' and ';
		} elseif ($k == count($partiesWithVotes) - 1) {
			$description .= '.';
		}

	}

	$description .= ' Click here to change their government.';


?>
<html>
<head>
	<title></title>

	    <meta 
    	property="og:site_name" 
    	content="If We Were In Charge">
	<meta 
		property="og:url" 
		content="<?php echo Configure::read('BASE_URL') . $this->here; ?>">
    <meta 
    	property="og:title" 
    	content="<?php echo $title; ?>">

    <meta 
        property="og:description" 
        content="<?php echo $description; ?>">

    <meta 
    	property="og:type" 
    	content="website">


    <meta 
    	property="og:image" 
    	content="<?php echo $flag_url; ?>">

    <meta 
        property="og:image:width" 
        content="1200">
    <meta 
        property="og:image:height" 
        content="630">

    <meta 
    	property="fb:app_id" 
    	content="<?php echo Configure::read('FACEBOOK_APP_ID'); ?>">


</head>
<body>

</body>
</html>