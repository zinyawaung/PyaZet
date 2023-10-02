<!-- <?php 
	// require_once 'php/component.php';
	// require_once 'php/operation.php';
?> -->

<!DOCTYPE html>  
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title class="">Pya Zet</title>
	<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair+Display&family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shotcut icon" href="images/logo.png">
</head>
<body>
	<!-- header section  start-->
	<header class="section cmsoonhead">
	<!-- navbar section start -->
	<?php 	require_once 'navbar.php'; ?>
	<!-- navbar section end -->

	<!-- back to top section -->
		<button onclick="topFunction()" id="myBtn" title="Go to top" class="text-white">
			<span class="fa-stack fa-lg">
            		<i class="fa fa-square-o fa-stack-2x"></i>
            		<i class="fa fa-arrow-up fa-stack-1x" style="color: red;"></i>
            </span>
		</button>
	<!-- back to top end -->

	</header>
	<!-- header section end-->

	<!-- body section start -->
	<body class="section_body">
		<!-- about section start -->
		<div class="container about my-4">
			<div class="row">
				<div class="col-lg-8">
					<div class="card border-0 p-3">
						<div>
							<!-- <h3 class="font-playfair">A B O U T</h3> -->
							<h3 class="font-playfair"><span class="text-red">A B O</span> <span class="text-blue">U T</span></h3>
						</div>						
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
			            	<img src="images/theatre.png" class="img-fluid  my-2" alt="">
							<p>
								<b><span class="text-red">Pya</span><span class="text-blue">Zet</span></b> is one of Myanmar's leading multiplex cinema exihibitors. <b><span class="text-red">Pya</span><span class="text-blue">Zet</span></b> brand started offering services since 2009 at the capital city of Myanmar, Naypyitaw. Its expansion to Yangon has brought success in the entertainment industry fulfilling its goal to provide unique cinema experience. There 4 locations with 13 screens in Yangon, 1 location with 3 screens in Mandalay, 1 location with 1 screen in Nay Pyi Taw and 1 location with 2 screens in Mawlamyine.<br>
							</p>
							<!-- <div id="googleMap" style="width:100%;height:400px;" class="my-3"></div> -->
							<div style="overflow:hidden;width: 700px;position: relative;">
								<iframe width="650" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Sule%20Shangri-La%20%20Kyauktada+()&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.stat-counter.org/'>Counter Widget</a> <script type='text/javascript' src='https://maps-generator.com/google-maps-authorization/script.js?id=2163415daffd3e414eb688f4bf2615012f4efb35'></script>
							</div>
							<div class="my-3">
								<!-- <video width="100%" height="100%" controls>
									<source src="DemonSlayer/DemonSlayer Season1/demonslayer episode 1.mp4" type="vedio/mp4">
								</video> -->
								<iframe width="650" height="400" src="trailer/LK.mp4">
								</iframe>

							</div>
						</div>
						

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
							<div class="row ">
								<div class="col-lg-4 flex-item-stretch text-center">
									<img src="images/deadpool.jpg" width="200px" style="display: none;">
								</div>
								<div class="col-lg-4 flex-item-stretch text-center">
									<img src="images/logoo.png" width="200px">
								</div>
								<div class="col-lg-4 flex-item-stretch text-center">
									<img src="images/arigato.jpg" width="200px" style="display: none;">
								</div>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 tede">
					<div class="tenet border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster1.png" class="img-fluid tcimg"></a>
							</span>
						</aside>
					</div>
					<div class="deadpool border-0 my-3">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/deadpool.jpg" class="img-fluid tcimg"></a>
							</span>
						</aside>
					</div>
					<div class="sign-up border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster2.png" class="img-fluid tcimg"></a>
							</span>
						</aside>
					</div>
				</div>
			</div>
			<!-- <div class="container mt-5">
				<div class="row">
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster3.png" class="card-img-top tcimg">
						</div>
					</div>
					<div class="col-lg- mt-34">
						<div class="card border-0">
							<img src="images/poster5.png" class="card-img-top tcimg">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster4.png" class="card-img-top tcimg">		
						</div>
					</div>
				</div>
			</div> -->
		</div>	
		<!-- about section end -->
	</body>
	<!-- body section end -->
	
	<!-- footer section start -->
		<?php 	require_once 'footer.php'; ?>
	<!-- footer section end -->

	<!-- DRY => Don't Repeat Yourself -->

	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>