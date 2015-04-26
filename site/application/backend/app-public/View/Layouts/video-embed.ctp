<!DOCTYPE html>
<html>
<head lang='en-us'>
	<meta charset="utf-8" />
	<title>JustGiving MyStory Video Embed</title>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

	<link href="/video-js/stylesheets/video-js.css" rel="stylesheet">
	<script src="/video-js/video.dev.js"></script>
	
	<link href="/video-js/plugins/socialOverlay/socialOverlay.css" rel="stylesheet" />
	<script src="/video-js/plugins/socialOverlay/socialOverlay.js"></script>
	
	<style>

	    /* Responsive */
		html, body {padding:0; margin:0;}
		.video-js {padding-top: 56.25%; background:#fff;}
		.vjs-fullscreen {padding-top: 0px}


		.jg-share-header {font-size:3em; color:#ad29b6; font-family: arial}



	</style>
	
</head>


<body>

	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo Configure::read('FACEBOOK_APP_ID'); ?>',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


	<div class="video-container">


		<?php echo $this->fetch('content'); ?>
		
		
	</div>
	<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-11682530-30', 'auto');
ga('send', 'pageview');
</script>

	<!-- Generated at <?php echo time(); ?>-->
</body>
</html>