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
	<header class="section nsbg">
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
				<div class="col-lg-4">
					<div class="tenet border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/onceuponatimeinhollywoodposter.jpg" class="img-fluid ssimg"></a>
							</span>
						</aside>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="">	
						<h2 class="font-playfair text-white">ONCE UPON A TIME IN HOLLYWOOD</h2>	
						<div class="mobile-hide" wfd-id="67">
							<p class='duration-rating font-quicksand text-white-50 font-size-14'>161 mins | R16  |Comedy / Drama</p>
							<p class='duration-rating font-quicksand text-white-50 font-size-14'>Directed by Quentin Tarantino | Starring argot Robbie, Brad Pitt, Al Pacino, Leonardo DiCaprio, Kurt Russell, Michael Madsen, Dakota Fanning, Emile Hirsch, James Marsden</p>
						</div>								
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand mb-3	">
							<div class="row">
								<div >
									<div class="movie-info font-size-14 text-white " wfd-id="65" style="line-height: 24px;">
					                    <p class="font-quicksand">
					                    	Starring Academy Award® winner Charlize Theron, Academy Award® winner Nicole Kidman, Academy Award® nominee John Lithgow and Academy Award® nominee Margot Robbie, based on the real scandal, BOMBSHELL is a revealing look inside the most powerful and controversial media empire of all time and the explosive story of the women who brought down the infamous man who created it. Directed by Emmy® Award winner Jay Roach and written by Academy Award® winner Charles Randolph.

											BOMBSHELL also stars Emmy® Award winner Kate McKinnon, Golden Globe® nominee Connie Britton, Emmy® Award winner Mark Duplass, Emmy® Award nominee Rob Delaney, Golden Globe® nominee Malcolm McDowell and Academy Award® winner Allison Janney.
										</p>
					                </div>
								</div>
							</div>

							<p class='card-text my-3' id='mylove'>
								<a href='' class='btn btn-outline-danger'><i class="fab fa-youtube fa-2x"></i> Watch</a>
								<a href='' class='btn btn-outline-primary'><i class="fab fa-facebook fa-2x"></i> Share</a>
								<a href='' class='btn btn-outline-primary'><i class="fab fa-twitter fa-2x"></i> Tweet</a>
							</p>

							<div class="my-3">
								<iframe width="650" height="400" src="trailer/onceuponatimeinhollywoodtrailer.mp4">
								</iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-4">
						<div class="card border-0">
							<img src="images/poster3.png" class="card-img-top ssimg">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card border-0">
							<img src="images/poster5.png" class="card-img-top ssimg">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card border-0">
							<img src="images/poster4.png" class="card-img-top ssimg">		
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
</body>
</html>