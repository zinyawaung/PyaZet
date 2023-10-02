<!-- <?php 
	// require_once 'php/component.php';
	// require_once 'php/operation.php';
?> -->
<?php 
	session_start();
	require_once 'php/db.php';
	$sql = "select * from movie";

		//execeute query and get result
		$result = mysqli_query($conn,$sql);

		//fetch resulting rows as an array
		
	
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
				<div class="col-lg-12">
					<div class="card border-0 p-3">
						<div >
							<h3 class="font-playfair">B O O K I N G &nbsp; T I C K E T</h3>
						</div>						
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
						<div class="row" class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
							<div class="col-lg-4 " style="border-right: 1px solid #33311f;">	
								<?php 
									$uname = $_SESSION["name"];
								 ?>
								<p class="font-quicksand"><span class="font-size-34 text-red">Wel</span><span class="font-size-34 text-blue font">come</span > : <span class="font-dancing font-size-27"><?php echo $uname; ?></span></p>

								<p class='card-text my-3 ' id='mylove'>
								<a href='editprofile.php?' class='btn btn-outline-danger m-3'><i class="fas fa-key fa-2x"></i> Edit Profile</a>
								<a href='bookinghistory.php' class='btn btn-outline-primary m-3'><i class="fas fa-book fa-2x"></i> Booking History</a>
								</p>
								<div class="col-lg-4 flex-item-stretch text-center">
									<img src="images/deadpool.jpg" class="nsimg" width="300px;">
								</div>
							</div>
							<div class="col-lg-8">
								<h4 class="font-playfair"><span class="text-red">NOW</span> <span class="text-blue">SHOWING</span></h4>
								<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
								<div class="row">
									<?php for ($i=0; $i <2 ; $i++) { 
											$movie = mysqli_fetch_array($result);?>	
									<div class="col-lg-6">
										<div class="card border-0 p-3 bg-dark">
											<div class="card-header" style="border-bottom: 2px solid #33311f;">
												<h5 class="font-playfair text-center text-white"><?php echo $movie['m_name']; ?></h5>
											</div>
											<div class="card-body" style="border-bottom: 2px solid #33311f;">
												<img src="<?php echo $movie['image']; ?>" class="img-fluid nsimg" alt="">
											</div>
											<div class="card-footer text-center">
												<a href='trailerdetail.php?m_id= <?php echo $movie['m_id'] ?>' class='btn btn-outline-warning'><i class="fas fa-shopping-cart fa-2x mr-1"></i>Buy Tickets</a>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>

						<hr style="border-bottom: 2px solid #33311f;margin-top: 10px;">
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
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-4">
						<div class="card border-0">
							<img src="images/poster3.png" class="card-img-top tcimg">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card border-0">
							<img src="images/poster5.png" class="card-img-top tcimg">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card border-0">
							<img src="images/poster4.png" class="card-img-top tcimg">		
						</div>
					</div>
				</div>
			</div>
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