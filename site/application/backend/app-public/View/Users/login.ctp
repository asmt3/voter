<?php echo $this->Html->script('/js/users/login', array('inline' => false)); ?>

<div class="login">

<div class="row">


	<div class="col-md-6 col-md-offset-3">
		<p>If Facebook users and their friends were in charge, what would be the composition of the new UK government?</p>

		<?php //echo $this->ImageComposer->allVotesFlag($allVoteSummary, $parties,1200,630,600, 315); ?>
		<img src="/img/flags/all-parties-small.png">

		<p class="cta">
			To add your vote...
			<a class="fb-login btn btn-default" href="#">Login with Facebook</a>
			<!-- (The very limited data you hand over in the login process will not be shared with any 3rd parties) -->
		</p>
	</div>

	<?php 
	// echo var_dump($allVoteSummary); 
	?>


	

</div>

</div>