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
							<h3 class="font-playfair">Y O U R &nbsp; P R O F I L E</h3>
						</div>						
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
						<div class="row" class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
							<div class="col-lg-4 " style="border-right: 1px solid #33311f;">	
								<?php 
									$uname = $_SESSION["name"];
								 ?>
								<p class="font-quicksand"><span class="font-size-34 text-red">Wel</span><span class="font-size-34 text-blue font">come</span > : <span class="font-dancing font-size-27"><?php echo $uname; ?></span></p>

								
								<div class="col-lg-4 flex-item-stretch text-center">
									<img src="images/deadpool.jpg" class="nsimg" width="300px;">
								</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-lg-6">
										<div class="card border-0 p-3  ">
											<div class="row mt-3">
											<p class='card-text my-3 ' id='mylove'>
											<table class="table font-quicksand table-striped">
												<thead>
												    <tr>
												      <th scope="col" class="text-red">Your</th>
												      <th scope="col" class="text-blue">Tickets</th>
												    </tr>
												</thead>
												<tbody>
												    <tr>
												      <td><b>Name :</b></td>
												      <td><?php echo $uname; ?></td>	      
												    </tr>
												    <tr>
												      <td><b>Booking ID :</b></td>
												      <td>18881</td>	      
												    </tr>
												    <tr>
												      <td><b>Costs :</b></td>
												      <td>9500ks</td>	      
												    </tr>
												</tbody>
											</table>
											</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card border-0 p-3  ">
											<div class="row mt-3">
											<p class='card-text my-3 ' id='mylove'>
											<table class="table font-quicksand table-striped">
												<thead>
												    <tr>
												      <th scope="col" class="text-red">Your</th>
												      <th scope="col" class="text-blue">Tickets</th>
												    </tr>
												</thead>
												<tbody>
												    <tr>
												      <td><b>Name :</b></td>
												      <td><?php echo $uname; ?></td>	      
												    </tr>
												    <tr>
												      <td><b>Booking ID :</b></td>
												      <td>18882</td>	      
												    </tr>
												    <tr>
												      <td><b>Costs :</b></td>
												      <td>3000ks</td>	      
												    </tr>
												</tbody>
											</table>
											</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="col-lg-12 my-3 mx-auto">
									<a href="userchoice.php" class="btn btn-outline-danger font-weight-bold font-playfair ">
										B A C K
									</a>
									</div>
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