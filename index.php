	<?php 
	  require_once 'php/db.php';

	  $limit = 2;
	  $page = isset($_GET['page']) ? $_GET['page'] : 1;
	  $start = ($page - 1) * $limit;
	  $result = $conn->query("SELECT * FROM movie LIMIT $start, $limit");
	  $movie = $result->fetch_all(MYSQLI_ASSOC);

	  $result1 = $conn->query("SELECT count(m_id) AS m_id FROM movie");
	  $movieCount = $result1->fetch_all(MYSQLI_ASSOC);
	  $total = $movieCount[0]['m_id'];
	  $pages = ceil($total/$limit);

	  $Previous = $page - 1;
	  $Next = $page + 1;

	
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
	<link rel="stylesheet" href="php/style.php">
	<link rel="shotcut icon" href="images/logopyazet.png">
	
<body>

	<!-- header section  start-->
	<header class="section nsbg">

	<!-- navbar -->
	<?php 
		require_once 'navbar.php';
	 ?>
	
	<!-- carousel section start -->
	

		<div class="container .bg-lightblue">
			<div class="carousel slide carousel-fade" data-ride="carousel" id="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/OnceUponATimeInHollywood.png" alt="" class="d block w-100 img-fluid" style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">ONCE UPON A TIME IN HOLLYWOOD</h5>
											<p class="font-quicksand font-size-16">???? Thrillingly unrestrained yet solidly crafted... tempers Tarantino's provocative impulses with the clarity of a mature filmmaker's vision.</p>	
										</div>
										<div class="col-md-3">
											<div class="caption-link" style="margin-top: 40px;margin-left: 80px" >
												<a href="onceuponatimeinhollywood.php"><div class="btn btn-outline-danger font-quicksand font-size-16">TIMES & TICKETS</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>		
					</div>
					<div class="carousel-item ">
						<img src="images/Demonslayer.png" alt="" class="d block w-100 img-fluid"  style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">DEMON SLAYER:MUGEN TRAIN</h5>
											<p class="font-quicksand">Opening At <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> December 21 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="demonslayermovie.php"><div class="btn btn-outline-danger font-quicksand">WATCH THE TRAILER</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/wonderwoman1984.png" alt="" class="d block w-100 img-fluid" style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">WONDER WOMAN 1987</h5>
											<p class="font-quicksand">Opening At <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> December 21 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="wonderwoman1984.php"><div class="btn btn-outline-danger font-quicksand">WATCH THE TRAILER</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/SpecialSeries.png" alt="" class="d block w-100 img-fluid" style="height:560px;">
						<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">SPECIAL SERIES</h5>
											<p class="font-quicksand">Coming Up <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> December 21 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="specialseries.php"><div class="btn btn-outline-danger font-quicksand">CHECK UP FULL LINE-UP</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/spn15.jpg" alt="" class="d block w-100 img-fluid" style="height:560px;">
							<div class="info carousel-caption">
							<div class="caption-container" >
								<div class="caption-details" style="margin-bottom: -100px;    background-color: rgba(0, 0, 0, 0.7);">
									<div class="row py-5" >
										<div class="col-md-8">
											<h5 class="font-playfair font-size-27">SUPER NATURAL SEASON 15</h5>
											<p class="font-quicksand">Coming Up <span class="font-dancing font-size-40 text-red">Pya</span><span class="font-dancing font-size-40 text-blue">Zet</span> December 21 . . .</p>
										</div>
										<div class="col-md-3">
											<div class="caption-link">
												<a href="specialseries.php"><div class="btn btn-outline-danger font-quicksand">CHECK UP FULL LINE-UP</div></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

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
						<nav aria-label="..." >
						  	<ul class="pagination">
						    	<li class="page-item">
						      		<a class="page-link" href="index.php?page=<?= $Previous; ?>">
						      			<i class="fa fa-2x fa-arrow-left"></i>
						      		</a>
						    	</li>
						    	<?php
						    		$day= array("Mon","&nbsp;&nbsp;Mon<br>Sept,21","&nbsp;&nbsp;Tues<br>Sept,22","&nbsp;&nbsp;Wed<br>Sept,23","&nbsp;Thurs<br>Sept,24","&nbsp;&nbsp;Fri<br>Sept,25","&nbsp;&nbsp;Sat<br>Sept,26","&nbsp;&nbsp;Sun<br>Sept,27");
						    	 	for ($i = 1; $i <= $pages ; $i++) : ?>
						    	<li class="page-item ">
						    		<a class="page-link <?= (basename($_SERVER['PHP_SELF'])=="index.php?page=<?= $i; ?>")?"active":""; ?>" href="index.php?page=<?= $i; ?>">
						    			<span class="font-playfair text-center"><?= $day[$i]; ?></span>
						    		</a>
						    	</li>
						    	<?php endfor; ?>
							    <li class="page-item">
						      		<a class="page-link" href="index.php?page=<?= $Next; ?>">
						      			<i class="fa fa-2x fa-arrow-right"></i>
						      		</a>
						    	</li>
						  	</ul>
						</nav>
						<div class="row">
							<div class="col-lg-4">
								<ul class="navbar-nav my-2">					
									<li class="nav-item dropdown font-quicksand">
										<a href="#" class="nav-link1 dropdown-toggle text-black" data-toggle="dropdown">By DAY :<i class="fa fa-lg fa-calendar ml-2"></i></a>

										<div class="dropdown-menu">
											<a href="byday.php" class="dropdown-item" id="dropdown-item1">By MOVIE :<i class="fa fa-lg fa-film ml-2"></i></a>
										</div>
									</li>										
								</ul>
							</div>
						</div>						
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
						<?php foreach ($movie as $movie) : ?>
						<div class='container movie font-quicksand'>
							<div class='row'>
								<p style="display: none;"><?= $movie['m_id'];  ?></p>
								<div class='col-lg-3'>
									<a href='#'><img src='<?= $movie['image'];?>' class='nsimg' width='155px'></a><br>
								</div>
								<div class='col-lg-4'>
									<div class='movie-info font-size-14' wfd-id='65'>
					                    <a href='#' class='movie-link text-black'><h4>
					                    <?= $movie['m_name'];  ?></h4></a>
					                    <p class='duration-rating'><?= $movie['duration'];  ?> | Rated <?= $movie['rating'];  ?></p>

					                    <div class='director mobile-hide' wfd-id='67'><b>Directed by</b> <?= $movie['director'];  ?></div>
					                    <div class='actors mobile-hide' wfd-id='66'><b>Starring</b> <?= $movie['actor'];  ?></div>
					                    <div class='genre mobile-hide' wfd-id='67'><b>Genre : </b> <?= $movie['genre'];  ?></div>
					                </div>
								</div>
								<div class='col-lg-5'>
									<a href="signin.php" class="btn btn-outline-danger my-2">10:30PM</a>
									<a href="signin.php" class="btn btn-outline-primary my-2">1:30PM</a>
									<a href="signin.php" class="btn btn-outline-danger">6:30PM</a>
								</div>
							</div>
						</div>

						<p class='card-text ml-3 my-3' id='mylove'>
							<a href='trialtrailerdetail.php?m_id= <?php echo $movie['m_id'] ?>' class='btn btn-outline-danger'>Watch Trailer</a>
							<a href='signin.php' class='btn btn-outline-primary'>Buy Ticket</a>
						</p>
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;"> 

						 <?php endforeach; ?>
						
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
					<div class="tenet border-0 mt-2">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster1.png" class="img-fluid nsimg"></a>
							</span>
						</aside>
					</div>
					<div class="deadpool border-0 my-3">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/deadpool.jpg" class="img-fluid nsimg"></a>
							</span>
						</aside>
					</div>
					<div class="sign-up border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster2.png" class="img-fluid nsimg"></a>
							</span>
						</aside>
					</div>
				</div>
			</div>
			<div class="container mt-5 cnt">
				<div class="row">
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster3.png" class="card-img-top nsimg">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster5.png" class="card-img-top nsimg">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster4.png" class="card-img-top nsimg">		
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
	<!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.6/lib/darkmode-js.min.js"></script> -->
	<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
	<script src="library/bootstrap/popper.min.js"></script>
	<script src="library/bootstrap/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script>
		//Get the bu rolls down 20px from the top of the document, show the button
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