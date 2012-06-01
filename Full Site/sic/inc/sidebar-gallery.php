<nav class="col subnav">
	<ul>
		<li><a href="exterior.php" <?php if (strpos($_SERVER['PHP_SELF'], 'exterior.php')) echo 'class="current"';?>>Exterior Images</a></li>
		<li><a href="interior.php" <?php if (strpos($_SERVER['PHP_SELF'], 'interior.php')) echo 'class="current"';?>>Interior Images</a></li>
		<li><a href="construction.php" <?php if (strpos($_SERVER['PHP_SELF'], 'construction.php')) echo 'class="current"';?>>Construction</a></li>
		<li><a href="renderings.php" <?php if (strpos($_SERVER['PHP_SELF'], 'renderings.php')) echo 'class="current"';?>>Renderings</a></li>
		<li><a href="video.php" <?php if (strpos($_SERVER['PHP_SELF'], 'video.php')) echo 'class="current"';?>>Video</a></li>
	</ul>
</nav>