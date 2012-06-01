<nav class="col subnav">
	<ul>
		<li><a href="location.php" <?php if (strpos($_SERVER['PHP_SELF'], 'location.php')) echo 'class="current"';?>>The Neighborhood</a></li>
		<li>
			<a href="ingress-egress.php" <?php if (strpos($_SERVER['PHP_SELF'], 'area.php')) echo 'class="current"';?>>Area Map</a>
			<ul>
				<li><a href="ingress-egress.php" <?php if (strpos($_SERVER['PHP_SELF'], 'ingress-egress.php')) echo 'class="current"';?>>Ingress/Egress</a></li>
				<li><a href="transit.php" <?php if (strpos($_SERVER['PHP_SELF'], 'transit.php')) echo 'class="current"';?>>Transit</a></li>
				<li><a href="attractions.php" <?php if (strpos($_SERVER['PHP_SELF'], 'attractions.php')) echo 'class="current"';?>>Area Attractions</a></li>								
				<li><a href="regional-map.php" <?php if (strpos($_SERVER['PHP_SELF'], 'regional-map.php')) echo 'class="current"';?>>Regional Map</a></li>								
			</ul>
		
		</li>
	</ul>
</nav>