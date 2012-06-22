<nav class="col subnav">
	<h4>North Building</h4>
	<ul>
		<li><a href="north-floorplate-1.php" <?php if (strpos($_SERVER['PHP_SELF'], 'north-floorplate-1.php')) echo 'class="current"';?>>Floorplate 1</a></li>
		<li><a href="north-floorplate-2.php" <?php if (strpos($_SERVER['PHP_SELF'], 'north-floorplate-2.php')) echo 'class="current"';?>>Floorplate 2</a></li>
		<li>
			<a href="north-floorplate-35.php" <?php if ($subsection == 'floorplate35') echo 'class="current"';?>>Floorplate 3-5</a>
			<ul>
				<li><a href="north-floorplate-35-multi.php" <?php if (strpos($_SERVER['PHP_SELF'], 'north-floorplate-35-multi.php')) echo 'class="current"';?>>Test Fit - Multi</a></li>
				<li><a href="north-floorplate-35-single.php" <?php if (strpos($_SERVER['PHP_SELF'], 'north-floorplate-35-single.php')) echo 'class="current"';?>>Test Fit - Single</a></li>
			</ul>
		</li>
		<li><a href="north-floorplate-6.php" <?php if (strpos($_SERVER['PHP_SELF'], 'north-floorplate-6.php')) echo 'class="current"';?>>Floorplate 6</a></li>
	</ul>
	<hr />
	<h4>South Building</h4>
	<ul>
		<li><a href="south-floorplate-4.php" <?php if (strpos($_SERVER['PHP_SELF'], 'south-floorplate-4.php')) echo 'class="current"';?>>Floorplate 4</a></li>
		<li>
			<a href="south-floorplate-56.php" <?php if ($subsection == 'floorplate56') echo 'class="current"';?>>Floorplate 5-6</a>
			<ul>
				<li><a href="south-floorplate-56-multi.php" <?php if (strpos($_SERVER['PHP_SELF'], 'south-floorplate-56-multi.php')) echo 'class="current"';?>>Test Fit - Multi</a></li>
				<li><a href="south-floorplate-56-single.php" <?php if (strpos($_SERVER['PHP_SELF'], 'south-floorplate-56-single.php')) echo 'class="current"';?>>Test Fit - Single</a></li>
			</ul>
		</li>
		<li><a href="south-floorplate-7.php" <?php if (strpos($_SERVER['PHP_SELF'], 'south-floorplate-7.php')) echo 'class="current"';?>>Floorplate 7</a></li>
	</ul>
</nav>