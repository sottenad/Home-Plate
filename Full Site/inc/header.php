<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php if(isset($page_title)){echo $page_title; } ?></title>
  <meta name="description" content="<?php if(isset($page_description)){echo $page_description; } ?>">
  <link rel="dns-prefetch" href="//ajax.googleapis.com" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
  <meta http-equiv="imagetoolbar" content="false" />
  <meta name="application-name" content="Home Plate Center" />
  <meta name="msapplication-tooltip" content="Home Plate Center Seattle" />

  <!--Facebook OG tags -->
  <meta property="og:title" content="<?php if(isset($fb_title)){echo $fb_title; } ?>" />
  <meta property="og:description" content="<?php if(isset($fb_description)){echo $fb_description; } ?>" />
  <meta property="og:image" content="" />  


  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div id="wrap">
  	<div id="main">
	  <header>
	  	<div id="h_top" class="clearfix">
		  	<a href="#" class="t">Stadium Innovation Center</a>
	  		<a href="#" class="t red">Home Plate Center</a>
	  	</div>
		<div id="h_main" class="clearfix">
			<div id="h_callout">Grand Opening April 12 2012</div>
			<h1><a href="/homeplate">Home Plate Center</a></h1>
		</div>
		<div class="clear"></div>
		<nav class="clearfix main">
			<ul>
				<li><a href="location.php" <?php if($section == "location"){echo 'class="current"';} ?>>The Location</a></li>
				<li><a href="design.php" <?php if($section == "building") echo 'class="current"' ?>>The Building</a></li>
				<li><a href="north-floorplate35-multi.php" <?php if($section == "spaces") echo 'class="current"' ?>>The Spaces</a></li>
				<li><a href="exterior.php" <?php if($section == "gallery") echo 'class="current"' ?>>Gallery</a></li>
				<li><a href="#" <?php if($section == "news")echo 'class="current"' ?>>News</a></li>
			</ul>
		</nav>
	  </header>