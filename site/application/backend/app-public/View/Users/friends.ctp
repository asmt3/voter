

<ul class="friends">

<?php foreach ($friends as $friend): ?>



<li>


<div class="profile-pic">
	<a href="/u/<?php echo $friend['User']['id']; ?>">
		<img src="https://graph.facebook.com/<?php echo $friend['User']['Fbuser']['fb_uid']; ?>/picture?width=48&height=48">
	</a>
</div>


<div class="name">
	<a href="/u/<?php echo $friend['User']['id']; ?>">
		<?php echo $friend['User']['Fbuser']['first_name']; ?>
	</a>
</div>


</li>


<?php endforeach;// ($user['Friend'] as $key => $value): ?>
	
</ul>