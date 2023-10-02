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
	<style>
		#feature-products .col-md-4{
		overflow: hidden;
		}

		#feature-products img:hover{
		transform: scale(1.2);
		transition: transform 1.5s ease;
		}
	</style>
</head>
<body>
	<!-- header section  start-->
	<header class="section cmsoonhead">
	<!-- navbar section start -->
	<?php require_once 'navbar.php'; ?>
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
						<div >
							<h3 class="font-playfair text-red">C A N D Y <span class="font-playfair text-blue">B A R . . .</span></h3>
							<p class="font-quicksand text-black-50">
								You don't have to queue and wait your turn to buy foods.
								You don't have to worry about <b>the INTRO</b> of the movies .
								Book here and take your foods when you reach to the <b><span class="text-red">PYA </span><span class="text-blue"> Zet</span></b> . 
							</p>
						</div>						
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
							<div class="row ">
								<div class="col-lg-4 flex-item-stretch text-center">
									<a href="#"><img src="images/Popcorn.png" width="200px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon "><h6>POPCORN</h6></a>
									<b><p class="font-quicksand font-size-16">3500 KYATS</p></b>
									</p>
								</div>
								<div class="col-lg-4 flex-item-stretch text-center">
									<a href="#"><img src="images/M&M.png" width="200px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6> 
									M&Ms</h6></a>
									<b><p class="font-quicksand font-size-16">4000 KYATS</p></b>
									</p>
								</div>
								<div class="col-lg-4 flex-item-stretch text-center">
									<a href="#"><img src="images/icecream.jpg"  width="200px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>ICE CREAMS</h6></a>
									<b><p class="font-quicksand font-size-16">3500 KYATS</p></b>
									</p>
								</div>						
							</div>
						</div>
						

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
							<div class="row ">
								<div class="col-lg-4 flex-item-stretch text-center">
									<a href="#"><img src="images/potato-chips.jpg" width="200px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>POTATO CHIPS</h6></a>
									<b><p class="font-quicksand font-size-16">2500 KYATS</p></b>
									</p>
								</div>
								<div class="col-lg-4 flex-item-stretch text-center">
									<a href="#"><img src="images/cocacola.png" width="200px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6> 
									COCA-COLA</h6></a>
									<b><p class="font-quicksand font-size-16">900 KYATS</p></b>
									</p>
								</div>
								<div class="col-lg-4 flex-item-stretch text-center">
									<a href="#"><img src="images/BubbleMilkTea.jpg" width="200px"></a><br>
									<p class="card-text ml-3 my-3" id="mylove">
									<a href="" class="font-playfair text-black cmsoon"><h6>BUBBLE MILK TEA</h6></a>
									<b><p class="font-quicksand font-size-16">3000 KYATS</p></b>
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
								<a href="#"><img src="images/poster1.png" class="img-fluid candybar"></a>
							</span>
						</aside>
					</div>
					<div class="deadpool border-0 my-3">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/deadpool.jpg" class="img-fluid candybar"></a>
							</span>
						</aside>
					</div>
					<div class="sign-up border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster2.png" class="img-fluid candybar"></a>
							</span>
						</aside>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster3.png" class="card-img-top candybar">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster5.png" class="card-img-top candybar">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster4.png" class="card-img-top candybar">		
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- about section end -->
	</body>
	<!-- body section end -->
	
	<!-- footer section start -->
	<?php require_once 'footer.php'; ?>
	<!-- footer section end -->

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