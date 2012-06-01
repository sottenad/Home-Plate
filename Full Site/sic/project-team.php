<?php
	$page_title = "Project Team :: Home Plate Seattle";
	$page_description = "";
	$fb_title = "";
	$fb_description = "";
	$section = "news";
	include('inc/header.php');
?>

<div role="main" id="content" class="clearfix">
	<img src="img/banners/press_release.jpg" alt="Home Plate Seattle Media and Press Releases" />
	<div class="mainrow">
	

	<?php include('inc/sidebar-news.php'); ?>
	
	<section class="extended col clearfix">
		<h2>Project Team</h2>
		
		<table class="borderrow">
			<tr>
				<td width="160">Developer/Owner</td>
				<td><a href="http://www.amlife.us">American Life</a></td>
			</tr>	
			<tr>
				<td>General Contractor</td>
				<td>SODO Builders</td>
			</tr>
			<tr>
				<td>Architect</td>
				<td><a href="http://www.fhoarch.com/">Freiheit &amp; Ho Architects, Inc.</a></td>
			</tr>
			<tr class="last">
				<td>Engineers</td>
				<td>
					Civil: D.R. Strong<br />
					Structural: DCI Engineers	<br />	
					Mechanical/Plumbing: MacDonald-Miller<br />
					Data Center: Hunt Engineering<br />
					Leasing Team: <a href="http://www.cbre.com/">CBRE</a>	
				</td>
			</tr>
		</table>
	</section>
	<div class="clear"></div>
	</div><!--End Mainrow-->
	
</div><!--End #content-->
</div><!--End #wrap-->
  
 <?php include('inc/footer.php'); ?>