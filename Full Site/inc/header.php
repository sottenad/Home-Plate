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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <meta http-equiv="imagetoolbar" content="false" />
  <meta name="application-name" content="Home Plate Center" />
  <meta name="msapplication-tooltip" content="Home Plate Center Seattle" />
  <meta property="og:title" content="<?php if(isset($fb_title)){echo $fb_title; } ?>" />
  <meta property="og:description" content="<?php if(isset($fb_description)){echo $fb_description; } ?>" />
  <meta property="og:image" content="" />  
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <div id="wrap">
  	<div id="main">
	  <header>
	  	<div id="h_top" class="clearfix">

		  	<a href="/sic/index.php" class="t">Stadium Innovation Center</a>
	  		<a href="http://homeplateseattle.com/" class="t red">Home Plate Center</a>

	  	</div>
		<div id="h_main" class="clearfix">
			<?php if( isset($section) && $section == 'home') echo'<div id="h_callout">Grand Opening April 12 2012</div>'; ?>
			<h1><a href="/">Home Plate Center</a></h1>
		</div>
		<div class="clear"></div>
		<nav class="clearfix main">
			<ul>
				<li><a href="location.php" <?php if($section == "location"){echo 'class="current"';} ?>>The Location</a></li>
				<li><a href="design.php" <?php if($section == "building") echo 'class="current"' ?>>The Building</a></li>
				<li><a href="north-floorplate-1.php" <?php if($section == "spaces") echo 'class="current"' ?>>The Spaces</a></li>
				<li><a href="exterior.php" <?php if($section == "gallery") echo 'class="current"' ?> >Gallery</a></li> 
				<li><a href="media.php" <?php if($section == "news")echo 'class="current"' ?>>News</a></li>
			</ul>
		</nav>
	  </header>