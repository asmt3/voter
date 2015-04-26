<?php echo $this->Html->script('/js/users/view', array('inline' => false)); ?>
<script type="text/javascript">
var data = <?php echo json_encode(compact('my_vote', 'friendshipVoteSummary'), JSON_PRETTY_PRINT); ?>;
</script>

<div class="intro">
  <div class="row">
	<div class="col-md-12">
		<h1>If <?php echo $user['Fbuser']['first_name'];?> and their friends were in charge&hellip;</h1>
		<p>&hellip;this would be the colour of their government:</p>
		<?php echo $this->element('flag'); ?>

<?php if ( $auth_user_id  && $areFriends ): ?>
		<p class="share-cta">
			<a 
				data-share-href="<?php echo Configure::read('BASE_URL'); ?>/f/<?php echo $user['User']['id']?>"
				class="btn btn-default fb-share" 
				href="#"
			>
				Share <?php echo $user['Fbuser']['first_name'];?>'s flag
			</a> 
			<br>
			(you'll see a preview before the image actually gets shared)
		</p>
<?php endif; ?>

	</div>
  </div>
</div>




<div class="row">
	<div class="col-md-12">
		<h2>
			Change <?php echo $user['Fbuser']['first_name'];?>'s flag
		</h2>
		
	</div>
</div>

<?php if ( !$auth_user_id ): ?>

<div class="row">
	<div class="col-md-12">
		<p>You need to be logged in to change <?php echo $user['Fbuser']['first_name'];?>'s flag.</p>
		<p>
			<a class="fb-login btn btn-default" href="#">Login with Facebook</a>
		</p>
	</div>
</div>

<?php elseif ( !$areFriends ): ?>

	<div class="row">
	<div class="col-md-12">
		<p>You are not friends with <?php echo $user['Fbuser']['first_name'];?> so you can't change their flag. But you can... </p>
		<p>
			<a class="btn btn-default" href="/me">Create your own flag here</a>
		</p>
	</div>
</div>

<?php else: ?>
<?php echo $this->element('parties'); ?>
<?php echo $this->element('faq'); ?>
<?php endif; ?>






<?php echo $this->element('party_colours'); ?>