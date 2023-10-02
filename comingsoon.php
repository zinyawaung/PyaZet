<?php 
	// require_once 'php/component.php';
	// require_once 'php/operation.php';
	
?>

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
	<link rel="shotcut icon" href="images/logoo.png">
</head>
<body>
	
	<!-- header section  start-->
	<header class="section nsbg">

	<!-- navbar -->
	<?php require_once 'navbar.php'; ?>
		
	<!-- carousel section start -->
		<div class="container .bg-lightblue">
			<div class="carousel slide carousel-fade" data-ride="carousel" id="carousel">
				<!-- indicators -->
				
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/007.jpg" alt="" class="d block w-100 img-fluid" style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">NO TIME TO DIE</h5>
											<p class="font-quicksand">Opening At <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> January 15 . . .</p>	
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="#"><div class="btn btn-outline-danger font-quicksand font-size-16">WATCH THE TRAILER</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/Aquietplace.jpg" alt="" class="d block w-100 img-fluid"  style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">A QUIET PLACE PART II</h5>
											<p class="font-quicksand">Opening At <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> April 23 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="#"><div class="btn btn-outline-danger font-quicksand">WATCH THE TRAILER</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/sponge.jpg" alt="" class="d block w-100 img-fluid" style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">SPONGEBOB THE MOVIE:<br>SPONGE ON THE RUN</h5>
											<p class="font-quicksand">Opening At <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> January 1 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="#"><div class="btn btn-outline-danger font-quicksand">WATCH THE TRAILER</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/GODZILLAVKong.png" alt="" class="d block w-100 img-fluid" style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">GODZILLA VS KONG</h5>
											<p class="font-quicksand">Coming Up <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> May 21 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="#"><div class="btn btn-outline-danger font-quicksand">WATCH THE TRAILER</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/freeguymovie.jpg" alt="" class="d block w-100 img-fluid" style="height:560px;">
							<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">FREE GUY</h5>
											<p class="font-quicksand">Coming Up <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> January 21 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="#"><div class="btn btn-outline-danger font-quicksand">WATCH THE TRAILER</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- control -->
				<a href="#carousel" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#carousel" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
	<!-- carousel section end -->
	</header>
	<!-- header section end-->

	<!-- body section start -->
	<body class="section_body">
		<!-- about section start -->
		<div class="container about my-4">
			<div class="row">
				<div class="col-lg-8">
					<div class="card border-0 p-3">
						<div class="font-playfair">
							<h3 class="text-red">C O M I N G <span class="text-blue">S O O N . . .</span> </h3>
							<!-- <h3>C O M I N G S O O N . . .</h3> -->
						</div>						
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap">
							<div class="row ">
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/thespongebob.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>SPONGE ON THE RUN</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">1 January 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/bill&tedfacethemusic.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6> 
									BILL & TED FACE THE MUSIC</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">5 January 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/ww1984.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>WONDER WOMAN 1987</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">21 December 2020</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/blackwidow.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>BLACK WIDOW</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">7 January 2021</p>
									</p>
								</div>								
							</div>
						</div>
						

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap">
							<div class="row ">
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/notimetodie.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>NO TIME TO DIE</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">15 January 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/soul.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6> 
									SOUL</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">20 January 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/freeguy.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>FREE GUY</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">21 January 2020</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/seberg.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>SEBERG</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">23 January 2021</p>
									</p>
								</div>								
							</div>
						</div>

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap">
							<div class="row ">
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/DUNE.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>DUNE</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">28 January 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/thecrood2.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6> 
									THE CROOD 2</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">23 January 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/mulann.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>MULAN</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">31 December 2020</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/trolls.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>TROLLS WORLD TOUR</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">23 December 2021</p>
									</p>
								</div>								
							</div>
						</div>
	

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap">
							<div class="row ">
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/BOB'sBurgers.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>BOB'S BURGERS</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">9 April 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/quietplace2.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6> 
									A QUIET PLACE PART II</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">23 April 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/godzillavskong.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>GODZILLA VS KONG</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">21 May 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/topgun.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>TOPGUN:<br>MAVERICK</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">2 July 2021</p>
									</p>
								</div>								
							</div>
						</div>

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
						<div class="container movie font-quicksand flex-container flex-container-wrap">
							<div class="row ">
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/thebeatles.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>THE BETALS:THE GET BACK</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">27 August 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/greyhound.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6> 
									GREYHOUND</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">30 JUNE 2021</p>
									</p>
								</div>
								<div class="col-lg-3 flex-item-stretch text-center">
									<a href="#"><img src="images/thefrenchdispatch.jpg"  class="cmsoonimg" width="155px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>THE FRENCH DISPATCH</h6></a>
									<p class="font-quicksand font-size-16 text-black-50">31 July 2021</p>
									</p>
								</div>								
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
								<a href="#"><img src="images/poster1.png" class="img-fluid cmsoonimg"></a>
							</span>
						</aside>
					</div>
					<div class="deadpool border-0 my-3">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/deadpool.jpg" class="img-fluid cmsoonimg"></a>
							</span>
						</aside>
					</div>
					<div class="sign-up border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster2.png" class="img-fluid cmsoonimg"></a>
							</span>
						</aside>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster3.png" class="card-img-top cmsoonimg">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster5.png" class="card-img-top cmsoonimg">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster4.png" class="card-img-top cmsoonimg">		
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- about section end -->
	</body>
	<!-- body section end -->
	
	<?php require_once 'footer.php'; ?>
	<!-- DRY => Don't Repeat Yourself -->

	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script>
	//Get the button
	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    mybutton.style.display = "block";
	  } else {
	    mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
	</script>
</body>
</html>