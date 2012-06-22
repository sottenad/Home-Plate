<nav class="col subnav">
	<ul>
		<li><a href="exterior.php" <?php if (strpos($_SERVER['PHP_SELF'], 'exterior.php')) echo 'class="current"';?>>Exterior Images</a></li>
		<li><a href="interior.php" <?php if (strpos($_SERVER['PHP_SELF'], 'interior.php')) echo 'class="current"';?>>Interior Images</a></li>
		<li><a href="view.php" <?php if (strpos($_SERVER['PHP_SELF'], 'view.php')) echo 'class="current"';?>>View</a></li>
	</ul>
</nav>