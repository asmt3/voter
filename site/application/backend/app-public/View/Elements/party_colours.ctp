<style>

<? foreach($parties as $party):?>
#flag li.<?php echo $party['Party']['short_name']?>,
.<?php echo $party['Party']['short_name']?> .party-colour {
	background:#<?php echo $party['Party']['colour_hex']?>;
}
<? endforeach; //($parties as $party):?>
.indy .party-colour {border:2px solid #000;}

</style>
