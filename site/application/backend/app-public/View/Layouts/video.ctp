<?php



$emailSubject = 'Check out my JustGiving Video';

$emailMessage = <<<ENDTEXT

Check out my video.

ENDTEXT;


$title = "MyStory By JustGiving - " . $jgpage['Jgpage']['short_name'];
$description = 'Description';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">



    <!-- Open graph -->
    <meta 
    	property="og:site_name" 
    	content="MyStory by JustGiving">
	<meta 
		property="og:url" 
		content="<?php echo Router::url( $this->here, true ); ?>">
    <meta 
    	property="og:title" 
    	content="<?php echo $title; ?>">
    <meta 
    	property="og:image" 
    	content="<?php 

    	echo Router::url( '/shareables/img/animation/jg-logo.png', true );

    	// echo $jgpage['Video']['poster_png']; 


    	?>">

    <meta 
    	property="og:image:url" 
    	content="<?php 

    	echo Router::url( '/shareables/img/animation/jg-logo.png', true );

    	// echo $jgpage['Video']['poster_png']; 


    	?>">

    <meta 
    	property="fb:app_id" 
    	content="<?php echo Configure::read('FACEBOOK_APP_ID'); ?>">
    <meta 
    	property="og:type" 
    	content="video">

    <meta 
    	property="og:video:url" 
    	content="<?php echo $jgpage['Video']['vimeo_mp4']; ?>">
    <meta 
    	property="og:video:secure_url" 
    	content="<?php echo $jgpage['Video']['vimeo_mp4']; ?>">
    <meta 
    	property="og:video:type" 
    	content="video/mp4">
    <meta 
    	property="og:video:width" 
    	content="<?php echo Configure::read('settings.video.width'); ?>">
    <meta 
    	property="og:video:height" 
    	content="<?php echo Configure::read('settings.video.height'); ?>">


    <!-- Twitter -->
    <meta 
    	name="twitter:card" 
    	content="player">
	<meta 
		name="twitter:site" 
		content="@justgiving">
	<meta 
		name="twitter:title" 
		content="<?php echo $title; ?>">
	<meta 
		name="twitter:description" 
		content="<?php echo $description; ?>">
	<meta 
		name="twitter:image" 
		content="<?php echo $jgpage['Video']['url_poster']; ?>">
	<meta 
		name="twitter:player" 
		content="<?php echo Router::url( '/e/' . $jgpage['Jgpage']['short_name'], true ); ?>">
	<meta 
		name="twitter:player:width" 
		content="<?php echo Configure::read('settings.video.width'); ?>">
	<meta 
		name="twitter:player:height" 
		content="<?php echo Configure::read('settings.video.height'); ?>">
	<meta 
		name="twitter:player:stream" 
		content="<?php echo $jgpage['Video']['vimeo_mp4']; ?>">
	<meta 
		name="twitter:player:stream:content_type" 
		content="video/mp4">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="video">


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

	  	<div class="container-fluid">

			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			  	<!-- <p class="navbar-text navbar-left logo">
			  		<a href="/">
				  		
				  	</a>
			  	</p> -->
			  	<p class="navbar-text navbar-center strap">
			  		MyStory By JustGiving
			  	</p>
			  	
			  </div>
			</nav>



			<div class="container">

				<div class="col-md-6">


					<div class="charity-logo">
						
							<img src="//images.justgiving.com/image/<?php echo $jgpage['Jgpage']['charity_logo_url']?>">
						
					</div>


					<!-- Social -->

					<ul class="ctas">
						<li class="donate">
							<a href="https://www.justgiving.com/<?php echo $jgpage['Jgpage']['short_name']?>/" class="btn btn-alpha">
								Donate
							</a>
						</li>

						<li class="facebook">
							<a href="#" class="btn btn-alpha share-fb">
								Share on Facebook
							</a>
						</li>

						<li class="email">
							<a href="mailto:%20?subject=<?php echo urlencode($emailSubject)?>&amp;body=<?php echo urlencode($emailMessage)?>" class="btn btn-alpha">
								Email
							</a>
						</li>

						<li class="twitter">


							<a href="https://twitter.com/intent/tweet?button_hashtag=JustGivingStories&text=Check%20out%20my%20fundraising%20story%20on%20JustGiving" class="twitter-hashtag-button" data-size="large" data-related="justgiving" data-url="http://local.mystory.justgiving.com/asdfasdfa">
								Share on Twitter
							</a>
						</li>

						
					</ul>


				</div>


				<div class="col-md-6">

					<!-- Video -->

					<iframe 
						frameborder=0
						src="/e/<?php echo $jgpage['Jgpage']['short_name']; ?>" 
						width="100%" 
						height="360"
					></iframe>

					<div class="ctas-2">
						<!-- Second share button -->
						<a href="#" class="btn btn-alpha share-fb">
							Share on Facebook
						</a>
					</div>



				</div>



			</div>
		</div>

		<footer>
		<nav class="navbar navbar-default navbar-fixed-bottom footer">
		  <div class="container">
		    <ul class="clearfix">
		  		<li class="copyright">
		  			&copy; JustGiving
		  		</li>

		  		<li class="terms">
		  			<a href="/terms.html">
		  				Terms &amp; Conditions
		  			</a>
		  		</li>
		  	</ul>
		  </div>
		</nav>
		</footer>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="/js/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="/js/bootstrap.min.js"></script>
		<script src="//cdn.sublimevideo.net/js/nb6mhazb.js"></script>
	    <script src="/js/script.js"></script>
    
    	<!-- Twitter -->
	    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>





  </body>
</html>