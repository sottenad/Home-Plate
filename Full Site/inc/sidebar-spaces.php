<nav class="col subnav">
	<h4>North Building</h4>
	<ul>
		<li><a href="design.php" <?php if (strpos($_SERVER['PHP_SELF'], 'design.php')) echo 'class="current"';?>>Floorplate 2</a></li>
		<li>
			<a href="north-floorplate35-multi.php" <?php if ($subsection == 'floorplate35') echo 'class="current"';?>>Floorplate 3-5</a>
			<ul>
				<li><a href="north-floorplate35-multi.php" <?php if (strpos($_SERVER['PHP_SELF'], 'north-floorplate35-multi.php')) echo 'class="current"';?>>Test Fit - Multi</a></li>
				<li><a href="north-floorplate35-single.php" <?php if (strpos($_SERVER['PHP_SELF'], 'north-floorplate35-single.php')) echo 'class="current"';?>>Test Fit - Single</a></li>
			</ul>
		</li>
		<li><a href="#" <?php if (strpos($_SERVER['PHP_SELF'], 'features.php')) echo 'class="current"';?>>Floorplate 6</a></li>
	</ul>
	<hr />
	<h4>South Building</h4>
	<ul>
		<li><a href="#">Floorplate 4</a></li>
		<li>
			<a href="south-floorplate56-multi.php" <?php if ($subsection == 'floorplate56') echo 'class="current"';?>>Floorplate 5-6</a>
			<ul>
				<li><a href="south-floorplate56-multi.php" <?php if (strpos($_SERVER['PHP_SELF'], 'south-floorplate56-multi.php')) echo 'class="current"';?>>Test Fit - Multi</a></li>
				<li><a href="south-floorplate56-single.php" <?php if (strpos($_SERVER['PHP_SELF'], 'south-floorplate56-single.php')) echo 'class="current"';?>>Test Fit - Single</a></li>
			</ul>
		</li>
		<li><a href="#">Floorplate 7</a></li>				
	</ul>
</nav>