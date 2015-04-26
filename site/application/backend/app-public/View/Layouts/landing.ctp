<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MyStory By JustGiving</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" type="text/css"
href="//fonts.googleapis.com/css?family=Roboto:400,300">
<link rel="stylesheet" type="text/css"
href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <!-- <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        

        <link href="/video-js/stylesheets/video-js.css" rel="stylesheet">
        <link href="/video-js/plugins/socialOverlay/socialOverlay.css" rel="stylesheet" />

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/large.css"> -->

        <link rel="stylesheet" href="/css/combined.css">

        <script src="/video-js/video.dev.js"></script>
        <script src="/video-js/plugins/socialOverlay/socialOverlay.js"></script>

        <?php echo $this->element('opengraph');?>

        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>

        
<?php 
        echo $this->fetch('css');
        echo $this->fetch('script');
?>


    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
        
        <!-- Header -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">
                <span>MyStory by</span>
                <img class="logo" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNTY2cHgiIGhlaWdodD0iOThweCIgdmlld0JveD0iMCAwIDU2NiA5OCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+ICAgICAgICA8dGl0bGU+bG9nbzwvdGl0bGU+ICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPiAgICA8ZGVmcz48L2RlZnM+ICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPiAgICAgICAgPGcgaWQ9ImxvZ28iIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIGZpbGw9IiNBQjI5QjQiPiAgICAgICAgICAgIDxnIGlkPSJHcm91cCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xOTguNSwyLjEgTDE3OC45LDIuMSBMMTc4LjksMTkuMSBMMTcyLjMsMTkuMSBMMTcyLjMsMzYuNSBMMTc4LjksMzYuNSBMMTc4LjksNjAuOSBDMTc4LjksNzMuNCAxODQuOCw3OS42IDE5Nyw3OS42IEMyMDIuMiw3OS42IDIwNi40LDc4LjUgMjEwLjQsNzYuMSBMMjExLjQsNzUuNSBMMjExLjQsNTguNSBMMjA4LjUsNjAuMSBDMjA2LjQsNjEuMyAyMDQuMSw2MS44IDIwMS43LDYxLjggQzE5OS4zLDYxLjggMTk4LjYsNjEgMTk4LjYsNTguNCBMMTk4LjYsMzYuNiBMMjExLjcsMzYuNiBMMjExLjcsMTkuMiBMMTk4LjYsMTkuMiBMMTk4LjYsMi4xIEwxOTguNSwyLjEgWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik05Niw1MiBDOTYsNTYuMyA5NC42LDYxLjQgODguMSw2MS40IEM4My4xLDYxLjQgODAuNSw1OC4yIDgwLjUsNTIgTDgwLjUsMTkuMSBMNjAuOSwxOS4xIEw2MC45LDU3IEM2MC45LDcwLjkgNjguOSw3OS42IDgxLjcsNzkuNiBDODcuNSw3OS42IDkyLjQsNzcuNSA5Ni43LDczLjIgTDEwMi4xLDc4LjYgTDExNS43LDc4LjYgTDExNS43LDE5LjEgTDk2LDE5LjEgTDk2LDUyIEw5Niw1MiBaIiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHJlY3QgaWQ9IlJlY3RhbmdsZS1wYXRoIiB4PSIzMDEuOSIgeT0iMTkuMSIgd2lkdGg9IjE5LjciIGhlaWdodD0iNTkuNSI+PC9yZWN0PiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMjY3LjksMzEuOCBMMjUxLjcsNDggTDI3NCw0OCBDMjcxLjEsNTQuNSAyNjQuNiw1OSAyNTcsNTkgQzI0Ni43LDU5IDIzOC4zLDUwLjYgMjM4LjMsNDAuMyBDMjM4LjMsMzAgMjQ2LjYsMjEuNiAyNTcsMjEuNiBDMjYwLjcsMjEuNiAyNjQuMiwyMi43IDI2Ny4xLDI0LjYgTDI4Mi4xLDkuNiBDMjc1LjIsNCAyNjYuNSwwLjYgMjU2LjksMC42IEMyMzUsMC42IDIxNy4yLDE4LjQgMjE3LjIsNDAuMyBDMjE3LjIsNjIuMiAyMzUsODAgMjU2LjksODAgQzI3OC44LDgwIDI5Ni42LDYyLjIgMjk2LjYsNDAuMyBDMjk2LjYsMzcuMyAyOTYuMywzNC41IDI5NS43LDMxLjcgTDI2Ny45LDMxLjcgTDI2Ny45LDMxLjggWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxyZWN0IGlkPSJSZWN0YW5nbGUtcGF0aCIgeD0iMzAxLjkiIHk9IjIuMSIgd2lkdGg9IjE5LjciIGhlaWdodD0iMTIiPjwvcmVjdD4gICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1MS4xLDQyIEwxNDkuMyw0MS40IEMxNDQuNywzOS45IDE0MC40LDM4LjQgMTQwLjQsMzYuNSBMMTQwLjQsMzYuMyBDMTQwLjQsMzQuNCAxNDIuOCwzMy43IDE0NSwzMy43IEMxNDguMiwzMy43IDE1Mi40LDM1IDE1NywzNy4zIEwxNjguMywyNiBMMTY3LjQsMjUuNCBDMTYxLDIxLjEgMTUyLjgsMTguNSAxNDUuMywxOC41IEMxMzIsMTguNSAxMjMuMSwyNi4zIDEyMy4xLDM4IEwxMjMuMSwzOC4yIEMxMjMuMSw0OS44IDEzMi4yLDU0LjEgMTQxLjEsNTYuNyBDMTQxLjgsNTYuOSAxNDIuNiw1Ny4xIDE0My4zLDU3LjQgQzE0OCw1OC44IDE1Miw2MCAxNTIsNjIuMSBMMTUyLDYyLjMgQzE1Miw2NC43IDE0OSw2NS4yIDE0Ni41LDY1LjIgQzE0MS43LDY1LjIgMTM2LjEsNjMuMiAxMzAuNyw1OS42IEwxMTkuOSw3MC40IEwxMTkuNyw3MC42IEwxMjAuNyw3MS40IEMxMjgsNzcuMiAxMzcsODAuMyAxNDYuMSw4MC4zIEMxNjAuNiw4MC4zIDE2OS4zLDcyLjkgMTY5LjMsNjAuNSBMMTY5LjMsNjAuMyBDMTY5LjMsNDggMTU3LjQsNDQuMSAxNTEuMSw0MiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0zNCw1MC44IEMzNCw1Ny43IDMxLjUsNjAuOSAyNi4yLDYwLjkgQzIyLjEsNjAuOSAxOC42LDU4LjkgMTQuNCw1NC4zIEwxMy42LDUzLjUgTDAuMyw2Ni44IEwxLjQsNjguMSBDNy45LDc1LjggMTYuNCw3OS43IDI2LjYsNzkuNyBDNDQuMiw3OS43IDU0LjMsNjkuNSA1NC4zLDUxLjYgTDU0LjMsMi4yIEwzNCwyLjIgTDM0LDUwLjggTDM0LDUwLjggWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik01MjEuOSwyNC4xIEM1MTcuMiwyMCA1MTEuOSwxOCA1MDUuMywxOCBDNDkyLDE4IDQ3OC41LDI3LjYgNDc4LjUsNDYuMSBMNDc4LjUsNDYuMyBDNDc4LjUsNjQuOCA0OTIsNzQuNCA1MDUuMyw3NC40IEM1MTEuNiw3NC40IDUxNi42LDcyLjYgNTIxLjEsNjguNyBDNTIwLjMsNzUuNyA1MTYsODAuNCA1MDcuNiw4MC40IEM1MDIuNSw4MC40IDQ5OC4xLDc5LjUgNDkzLjUsNzcuNCBMNDgwLjcsOTAuMiBMNDgyLjUsOTEuMiBDNDkwLDk1LjIgNDk4LjgsOTcuMyA1MDguMSw5Ny4zIEM1MzAuNyw5Ny4zIDU0MS4zLDg1LjggNTQxLjMsNjQuMyBMNTQxLjMsMTkuMSBMNTI3LDE5LjEgTDUyMS45LDI0LjEgTDUyMS45LDI0LjEgWiBNNTIyLjUsNDYuNCBDNTIyLjUsNTMuMyA1MTcuMiw1OC4yIDUwOS45LDU4LjIgQzUwMi41LDU4LjIgNDk3LjQsNTMuMyA0OTcuNCw0Ni40IEw0OTcuNCw0Ni4yIEM0OTcuNCwzOS4zIDUwMi43LDM0LjQgNTA5LjksMzQuNCBDNTE3LjIsMzQuNCA1MjIuNSwzOS40IDUyMi41LDQ2LjIgTDUyMi41LDQ2LjQgTDUyMi41LDQ2LjQgWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik01NDUuMiwyMS44IEw1NDgsMjEuOCBMNTQ4LDI4LjYgTDU1MS4yLDI4LjYgTDU1MS4yLDIxLjggTDU1NCwyMS44IEw1NTQsMTkuMSBMNTQ1LjIsMTkuMSBMNTQ1LjIsMjEuOCBaIiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHBhdGggZD0iTTU2Mi4zLDE5LjEgTDU2MC4zLDIyLjQgTDU1OC4zLDE5LjEgTDU1NSwxOS4xIEw1NTUsMjguNiBMNTU4LjEsMjguNiBMNTU4LjEsMjMuOSBMNTU5LjUsMjYuMSBMNTYxLjEsMjYuMSBMNTYyLjUsMjMuOSBMNTYyLjUsMjguNiBMNTY1LjcsMjguNiBMNTY1LjcsMTkuMSBMNTYyLjMsMTkuMSBaIiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHJlY3QgaWQ9IlJlY3RhbmdsZS1wYXRoIiB4PSIzOTIuOSIgeT0iMTkuMSIgd2lkdGg9IjE5LjYiIGhlaWdodD0iNTkuNSI+PC9yZWN0PiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMzU3LjUsNTIuMiBMMzQ2LjQsMTkuMSBMMzI1LjUsMTkuMSBMMzQ4LjcsNzguNiBMMzQ4LjksNzkgTDM2NS44LDc5IEwzODkuMiwxOS4xIEwzNjguNiwxOS4xIEwzNTcuNSw1Mi4yIFoiIGlkPSJTaGFwZSI+PC9wYXRoPiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNDUyLjcsMTggQzQ0Ni45LDE4IDQ0MiwyMC4xIDQzNy43LDI0LjQgTDQzMi4zLDE5IEw0MTguNywxOSBMNDE4LjcsNzguNSBMNDM4LjMsNzguNSBMNDM4LjMsNDUuNSBDNDM4LjMsNDEuMiA0MzkuNywzNi4xIDQ0Ni4yLDM2LjEgQzQ1MS4yLDM2LjEgNDUzLjgsMzkuMiA0NTMuOCw0NS41IEw0NTMuOCw3OC41IEw0NzMuNSw3OC41IEw0NzMuNSw0MC42IEM0NzMuNSwyNi43IDQ2NS41LDE4IDQ1Mi43LDE4IiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHJlY3QgaWQ9IlJlY3RhbmdsZS1wYXRoIiB4PSIzOTIuOSIgeT0iMi4xIiB3aWR0aD0iMTkuNiIgaGVpZ2h0PSIxMiI+PC9yZWN0PiAgICAgICAgICAgIDwvZz4gICAgICAgIDwvZz4gICAgPC9nPjwvc3ZnPg==">
            </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">My Story</a></li> -->
                
                <li><a target="_blank" href="https://www.justgiving.com/en/about-us">About JustGiving</a></li>
                <li><a target="_blank" href="https://www.justgiving.com/info/privacy/">Privacy</a></li>
                <li><a target="_blank" href="https://www.justgiving.com/info/terms-of-service/">Terms of Service</a></li>
                <li><a target="_blank" href="https://help.justgiving.com/hc/en-us">Help</a></li>
              </ul>
            </div><!--/.nav-collapse -->


          </div>
        </nav>


        <?php echo $this->fetch('content'); ?>

        <!-- Footer -->

        <nav class="navbar navbar-default navbar-fixed-bottom">
          <div class="container">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">
                        <img class="logo" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNTY2cHgiIGhlaWdodD0iOThweCIgdmlld0JveD0iMCAwIDU2NiA5OCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+ICAgICAgICA8dGl0bGU+bG9nbzwvdGl0bGU+ICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPiAgICA8ZGVmcz48L2RlZnM+ICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPiAgICAgICAgPGcgaWQ9ImxvZ28iIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIGZpbGw9IiNBQjI5QjQiPiAgICAgICAgICAgIDxnIGlkPSJHcm91cCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xOTguNSwyLjEgTDE3OC45LDIuMSBMMTc4LjksMTkuMSBMMTcyLjMsMTkuMSBMMTcyLjMsMzYuNSBMMTc4LjksMzYuNSBMMTc4LjksNjAuOSBDMTc4LjksNzMuNCAxODQuOCw3OS42IDE5Nyw3OS42IEMyMDIuMiw3OS42IDIwNi40LDc4LjUgMjEwLjQsNzYuMSBMMjExLjQsNzUuNSBMMjExLjQsNTguNSBMMjA4LjUsNjAuMSBDMjA2LjQsNjEuMyAyMDQuMSw2MS44IDIwMS43LDYxLjggQzE5OS4zLDYxLjggMTk4LjYsNjEgMTk4LjYsNTguNCBMMTk4LjYsMzYuNiBMMjExLjcsMzYuNiBMMjExLjcsMTkuMiBMMTk4LjYsMTkuMiBMMTk4LjYsMi4xIEwxOTguNSwyLjEgWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik05Niw1MiBDOTYsNTYuMyA5NC42LDYxLjQgODguMSw2MS40IEM4My4xLDYxLjQgODAuNSw1OC4yIDgwLjUsNTIgTDgwLjUsMTkuMSBMNjAuOSwxOS4xIEw2MC45LDU3IEM2MC45LDcwLjkgNjguOSw3OS42IDgxLjcsNzkuNiBDODcuNSw3OS42IDkyLjQsNzcuNSA5Ni43LDczLjIgTDEwMi4xLDc4LjYgTDExNS43LDc4LjYgTDExNS43LDE5LjEgTDk2LDE5LjEgTDk2LDUyIEw5Niw1MiBaIiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHJlY3QgaWQ9IlJlY3RhbmdsZS1wYXRoIiB4PSIzMDEuOSIgeT0iMTkuMSIgd2lkdGg9IjE5LjciIGhlaWdodD0iNTkuNSI+PC9yZWN0PiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMjY3LjksMzEuOCBMMjUxLjcsNDggTDI3NCw0OCBDMjcxLjEsNTQuNSAyNjQuNiw1OSAyNTcsNTkgQzI0Ni43LDU5IDIzOC4zLDUwLjYgMjM4LjMsNDAuMyBDMjM4LjMsMzAgMjQ2LjYsMjEuNiAyNTcsMjEuNiBDMjYwLjcsMjEuNiAyNjQuMiwyMi43IDI2Ny4xLDI0LjYgTDI4Mi4xLDkuNiBDMjc1LjIsNCAyNjYuNSwwLjYgMjU2LjksMC42IEMyMzUsMC42IDIxNy4yLDE4LjQgMjE3LjIsNDAuMyBDMjE3LjIsNjIuMiAyMzUsODAgMjU2LjksODAgQzI3OC44LDgwIDI5Ni42LDYyLjIgMjk2LjYsNDAuMyBDMjk2LjYsMzcuMyAyOTYuMywzNC41IDI5NS43LDMxLjcgTDI2Ny45LDMxLjcgTDI2Ny45LDMxLjggWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxyZWN0IGlkPSJSZWN0YW5nbGUtcGF0aCIgeD0iMzAxLjkiIHk9IjIuMSIgd2lkdGg9IjE5LjciIGhlaWdodD0iMTIiPjwvcmVjdD4gICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1MS4xLDQyIEwxNDkuMyw0MS40IEMxNDQuNywzOS45IDE0MC40LDM4LjQgMTQwLjQsMzYuNSBMMTQwLjQsMzYuMyBDMTQwLjQsMzQuNCAxNDIuOCwzMy43IDE0NSwzMy43IEMxNDguMiwzMy43IDE1Mi40LDM1IDE1NywzNy4zIEwxNjguMywyNiBMMTY3LjQsMjUuNCBDMTYxLDIxLjEgMTUyLjgsMTguNSAxNDUuMywxOC41IEMxMzIsMTguNSAxMjMuMSwyNi4zIDEyMy4xLDM4IEwxMjMuMSwzOC4yIEMxMjMuMSw0OS44IDEzMi4yLDU0LjEgMTQxLjEsNTYuNyBDMTQxLjgsNTYuOSAxNDIuNiw1Ny4xIDE0My4zLDU3LjQgQzE0OCw1OC44IDE1Miw2MCAxNTIsNjIuMSBMMTUyLDYyLjMgQzE1Miw2NC43IDE0OSw2NS4yIDE0Ni41LDY1LjIgQzE0MS43LDY1LjIgMTM2LjEsNjMuMiAxMzAuNyw1OS42IEwxMTkuOSw3MC40IEwxMTkuNyw3MC42IEwxMjAuNyw3MS40IEMxMjgsNzcuMiAxMzcsODAuMyAxNDYuMSw4MC4zIEMxNjAuNiw4MC4zIDE2OS4zLDcyLjkgMTY5LjMsNjAuNSBMMTY5LjMsNjAuMyBDMTY5LjMsNDggMTU3LjQsNDQuMSAxNTEuMSw0MiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0zNCw1MC44IEMzNCw1Ny43IDMxLjUsNjAuOSAyNi4yLDYwLjkgQzIyLjEsNjAuOSAxOC42LDU4LjkgMTQuNCw1NC4zIEwxMy42LDUzLjUgTDAuMyw2Ni44IEwxLjQsNjguMSBDNy45LDc1LjggMTYuNCw3OS43IDI2LjYsNzkuNyBDNDQuMiw3OS43IDU0LjMsNjkuNSA1NC4zLDUxLjYgTDU0LjMsMi4yIEwzNCwyLjIgTDM0LDUwLjggTDM0LDUwLjggWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik01MjEuOSwyNC4xIEM1MTcuMiwyMCA1MTEuOSwxOCA1MDUuMywxOCBDNDkyLDE4IDQ3OC41LDI3LjYgNDc4LjUsNDYuMSBMNDc4LjUsNDYuMyBDNDc4LjUsNjQuOCA0OTIsNzQuNCA1MDUuMyw3NC40IEM1MTEuNiw3NC40IDUxNi42LDcyLjYgNTIxLjEsNjguNyBDNTIwLjMsNzUuNyA1MTYsODAuNCA1MDcuNiw4MC40IEM1MDIuNSw4MC40IDQ5OC4xLDc5LjUgNDkzLjUsNzcuNCBMNDgwLjcsOTAuMiBMNDgyLjUsOTEuMiBDNDkwLDk1LjIgNDk4LjgsOTcuMyA1MDguMSw5Ny4zIEM1MzAuNyw5Ny4zIDU0MS4zLDg1LjggNTQxLjMsNjQuMyBMNTQxLjMsMTkuMSBMNTI3LDE5LjEgTDUyMS45LDI0LjEgTDUyMS45LDI0LjEgWiBNNTIyLjUsNDYuNCBDNTIyLjUsNTMuMyA1MTcuMiw1OC4yIDUwOS45LDU4LjIgQzUwMi41LDU4LjIgNDk3LjQsNTMuMyA0OTcuNCw0Ni40IEw0OTcuNCw0Ni4yIEM0OTcuNCwzOS4zIDUwMi43LDM0LjQgNTA5LjksMzQuNCBDNTE3LjIsMzQuNCA1MjIuNSwzOS40IDUyMi41LDQ2LjIgTDUyMi41LDQ2LjQgTDUyMi41LDQ2LjQgWiIgaWQ9IlNoYXBlIj48L3BhdGg+ICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik01NDUuMiwyMS44IEw1NDgsMjEuOCBMNTQ4LDI4LjYgTDU1MS4yLDI4LjYgTDU1MS4yLDIxLjggTDU1NCwyMS44IEw1NTQsMTkuMSBMNTQ1LjIsMTkuMSBMNTQ1LjIsMjEuOCBaIiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHBhdGggZD0iTTU2Mi4zLDE5LjEgTDU2MC4zLDIyLjQgTDU1OC4zLDE5LjEgTDU1NSwxOS4xIEw1NTUsMjguNiBMNTU4LjEsMjguNiBMNTU4LjEsMjMuOSBMNTU5LjUsMjYuMSBMNTYxLjEsMjYuMSBMNTYyLjUsMjMuOSBMNTYyLjUsMjguNiBMNTY1LjcsMjguNiBMNTY1LjcsMTkuMSBMNTYyLjMsMTkuMSBaIiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHJlY3QgaWQ9IlJlY3RhbmdsZS1wYXRoIiB4PSIzOTIuOSIgeT0iMTkuMSIgd2lkdGg9IjE5LjYiIGhlaWdodD0iNTkuNSI+PC9yZWN0PiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMzU3LjUsNTIuMiBMMzQ2LjQsMTkuMSBMMzI1LjUsMTkuMSBMMzQ4LjcsNzguNiBMMzQ4LjksNzkgTDM2NS44LDc5IEwzODkuMiwxOS4xIEwzNjguNiwxOS4xIEwzNTcuNSw1Mi4yIFoiIGlkPSJTaGFwZSI+PC9wYXRoPiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNDUyLjcsMTggQzQ0Ni45LDE4IDQ0MiwyMC4xIDQzNy43LDI0LjQgTDQzMi4zLDE5IEw0MTguNywxOSBMNDE4LjcsNzguNSBMNDM4LjMsNzguNSBMNDM4LjMsNDUuNSBDNDM4LjMsNDEuMiA0MzkuNywzNi4xIDQ0Ni4yLDM2LjEgQzQ1MS4yLDM2LjEgNDUzLjgsMzkuMiA0NTMuOCw0NS41IEw0NTMuOCw3OC41IEw0NzMuNSw3OC41IEw0NzMuNSw0MC42IEM0NzMuNSwyNi43IDQ2NS41LDE4IDQ1Mi43LDE4IiBpZD0iU2hhcGUiPjwvcGF0aD4gICAgICAgICAgICAgICAgPHJlY3QgaWQ9IlJlY3RhbmdsZS1wYXRoIiB4PSIzOTIuOSIgeT0iMi4xIiB3aWR0aD0iMTkuNiIgaGVpZ2h0PSIxMiI+PC9yZWN0PiAgICAgICAgICAgIDwvZz4gICAgICAgIDwvZz4gICAgPC9nPjwvc3ZnPg==">
                    </a>
                </li>

                
                <li><a target="_blank" href="https://www.justgiving.com/en/about-us">About JustGiving</a></li>
                <li><a target="_blank" href="https://www.justgiving.com/info/privacy/">Privacy</a></li>
                <li><a target="_blank" href="https://www.justgiving.com/info/terms-of-service/">Terms of Service</a></li>
                <li><a target="_blank" href="https://help.justgiving.com/hc/en-us">Help</a></li>
              
            </ul>
          </div>
        </nav>



<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-11682530-30', 'auto');
ga('send', 'pageview');
</script>
    </body>
    <!-- Generated at <?php echo time(); ?>-->
</html>