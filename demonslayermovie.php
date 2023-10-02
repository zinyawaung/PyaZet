<!-- <?php 
	// require_once 'php/component.php';
	// require_once 'php/operation.php';
?> -->
<?php 
	session_start();
	require_once 'php/db.php';

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
	<link rel="shotcut icon" href="images/logo.png">
</head>
<body>
	<!-- header section  start-->
	<header class="section nsbg">
	<!-- navbar section start -->
		<?php require_once 'navbar.php'; ?>
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
								<a href="#"><img src="images/demonslayerposter.jpg" class="img-fluid ssimg"></a>
							</span>
						</aside>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="">	
						<h2 class="font-playfair text-white">DEMON SLAYER : MUGEN TRAIN</h2>	
						<div class="mobile-hide" wfd-id="67">
							<p class='duration-rating font-quicksand text-white-50 font-size-14'>161 mins | Rated R | Animation </p>
							<p class='duration-rating font-quicksand text-white-50 font-size-14'>Directed by Haruo Sotozaki | Starring Tanjiro Kamado(Natsuki Hanae), Inosuke Hashibira(Yoshitsugu Matsuoka), Zenitsu Agatsuma(Hiro Shimono), Nezuko Kamado(Akari Kitô), Kyojuro Rengoku(Satoshi Hino), Enmu(Daisuke Hirakawa)</p>
						</div>								
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand mb-3	">
							<div class="row">
								<div >
									<div class="movie-info font-size-14 text-white " wfd-id="65" style="line-height: 24px;">
					                    <p class="font-quicksand">
					                    	Tanjiro Kamado, joined with Inosuke Hashibira, a boy raised by boars who wears a boar's head, and Zenitsu Agatsuma, a scared boy who reveals his true power when he sleeps, board the Infinity Train on a new mission with the Fire Pillar, Kyojuro Rengoku, to defeat a demon who has been tormenting the people and killing the demon slayers who oppose it!
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
								<iframe width="650" height="400" src="trailer/MugenTrainOfficialTrailer.mp4">
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