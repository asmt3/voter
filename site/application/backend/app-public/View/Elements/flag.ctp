<ul id="flag">
	<? foreach($parties as $party):?>


	<li
		class="<?php echo $party['Party']['short_name']?>"
		title="<?php echo $party['Party']['name']?>"
	>
	</li>

	<? endforeach; //($parties as $party):?>

</ul>