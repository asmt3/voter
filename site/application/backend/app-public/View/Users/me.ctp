<?php echo $this->Html->script('/js/users/view', array('inline' => false)); ?>
<script type="text/javascript">
var data = <?php echo json_encode(compact('my_vote', 'friendshipVoteSummary'), JSON_PRETTY_PRINT); ?>;
</script>

<div class="intro">
  <div class="row">
	<div class="col-md-12">
		<h1>If you and your friends were in charge&hellip;</h1>
		<p>&hellip;this would be the colour of your government:</p>
		<?php echo $this->element('flag'); ?>


		<p class="share-cta">
			See how your friends' votes would change this banner and...
			<a 
				data-share-href="<?php echo Configure::read('BASE_URL'); ?>/f/<?php echo $user['User']['id']?>"
				class="btn btn-default fb-share" 
				href="#"
			>
				Share your banner on Facebook
			</a> 
			<br>
			(you'll see a preview before the image actually gets shared)
		</p>

	</div>
  </div>
</div>



<div class="row">
	<div class="col-md-12">
		<h2>
			Choose your colour
		</h2>
		
	</div>
</div>





<?php echo $this->element('parties'); ?>
<?php echo $this->element('faq'); ?>


<?php echo $this->element('party_colours'); ?>