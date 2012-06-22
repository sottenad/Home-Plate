<?php
	$page_title = "Exterior Gallery :: Home Plate Seattle";
	$page_description = "";
	$fb_title = "";
	$fb_description = "";
	$section = "gallery";
	include('inc/header.php');
?>

<div role="main" id="content" class="clearfix">
	<div class="mainrow">
	<?php include('inc/sidebar-gallery.php'); ?>
	
	<section class="extended col clearfix">
		<h2>Exterior Images</h2>
		<p>Click on any image to enlarge</p>
		
		<div class="gal">
			<a href="img/SIC_Gallery_486_Lrg.jpg" class="fancybox" data-fancybox-group="gallery"><img src="img/SIC_Gallery_486_Thmb.jpg" alt="" /></a>
		</div>
		
		<div class="gal">
			<a href="img/SIC_Gallery_476_Lrg.jpg" class="fancybox" data-fancybox-group="gallery"><img src="img/SIC_Gallery_476_Thmb.jpg" alt="" /></a>
		</div>
		<div class="gal last">
			<a href="img/SIC_Gallery_482_Lrg.jpg" class="fancybox" data-fancybox-group="gallery"><img src="img/SIC_Gallery_482_Thmb.jpg" alt="" /></a>
		</div>		
	</section>
	<div class="clear"></div>
	</div><!--End Mainrow-->
	
</div><!--End #content-->
</div><!--End #wrap-->
  
 <?php include('inc/footer.php'); ?>