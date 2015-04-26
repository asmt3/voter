
		<div class="parties">



<?php foreach ($parties as $k => $party): 

$selected = $my_vote && $my_vote['Vote']['party_id'] == $party['Party']['id'];
$selected_html = $selected ? ' selected ' : '';

?>




<?php if ($k%4 == 0): ?>
		  <div class="row">
<?php endif; //($k%2 == 0): ?>

			<div class="col-xs-6 col-sm-3 party">
				<a 
				href="#" 
				data-party-id="<?php echo $party['Party']['id']?>"
				class="clearfix <?php echo $party['Party']['short_name']?> <?php echo $selected_html; ?>">
					<span class="party-colour"></span>
					<span class="party-name"><?php echo $party['Party']['name'];?></span>
				</a>
			</div>
<?php if ($k%4 == 1): ?>
<div class="clearfix visible-xs-block"></div>
<?php endif; ?>

<?php if ($k%4 == 3): ?>
		  </div> <!-- End row -->
<?php endif; //($k%2 == 0): ?>


<?php endforeach; // ($parties as $party): ?>


		</div>