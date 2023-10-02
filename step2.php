<!--  <?php 
// require_once 'php/component.php';
// require_once 'php/operation.php';
?>  -->
<?php 
session_start();
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
<body >
<!-- header section  start-->
<header class="section">
<!-- navbar section start -->
<?php require_once 'navbar.php'; ?>
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
				<h3 class="font-playfair"><span class="text-red">B O O K I N G</span> <span class="text-blue">T I C K E T</span></h3>
			</div>						
			<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			<div class="row" class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
				<div class="col-lg-4 " style="border-right: 1px solid #33311f;">	
					<?php 
						$uname = $_SESSION["name"];
					 ?>
					<p class="font-quicksand"><span class="font-size-34 text-red">User</span><span class="font-size-34 text-blue font"> Name</span > : <span class="font-dancing font-size-27"><?php echo $uname; ?></span></p>

					<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">

					
					<div class="col-lg-4 flex-item-stretch text-center">
						<img src="images/deadpool.jpg" class="nsimg" width="300px;">
					</div>
				</div>
				<div class="col-lg-8">
					<h4 class="font-playfair"><span class="text-red">S T E P</span> <span class="text-blue">II</span>-<span class="text-red">Confirm Your</span> <span class="text-blue">Selections</span></h4>
					<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
					<div class="row">
						<div class="col-lg-12">
							<div class="card border-0  p-3" style="opacity: 95%;">
								<form>
		            				<div class="row">
										<p class='card-text my-3 ' id='mylove'>
										<table class="table table-dark  table-striped font-quicksand">
											  	<thead>
											  		<h3 class="font-playfair text-center"><span class="text-red">Your</span> <span class="text-blue">Selections</span></h3>
												    <tr>
												      <th scope="col" class="text-red">Your</th>
												      <th scope="col" class="text-blue">Selections</th>
												    </tr>
												</thead>
												<tbody>
												    <tr>
												      <td><b>Theatre :</b></td>
												      <td><?php echo $_POST['movie']; ?></td>	      
												    </tr>
												    <tr>
												      
												      <td><b>Movie :</b></td>
												      <td><?php echo $_POST['down']; ?></td>
												    </tr>
												    <tr>
												      <td><b>Showing Time :</b></td>
												      <td><?php echo $_POST['time']; ?></td>
												    </tr>
												    <tr>
												      <td><b>SeatCategory :</b></td>
												      <td><?php echo $_POST['ticket']; ?></td>
												    </tr>
												    <tr>
												      <td><b>Show Date :</b></td>
												      <td><?php echo $_POST['date']; ?></td>
												    </tr>
												    <tr>
												      <td><b>No of seats :</b></td>
												      <td><?php echo $_POST['seat']; ?></td>
												    </tr>
												</tbody>
											</table>
										</p>
									</div>
		            				<div class="row">
										<p class='card-text my-3 ' id='mylove'>
										<table class="table table-dark font-quicksand table-striped">
											<thead>
										  		<h3 class="font-playfair text-center"><span class="text-red">Your</span> <span class="text-blue">Tickets</span></h3>
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
											      
											      <td><b>Movie :</b></td>
											      <td><?php echo $_POST['down']; ?></td>
											    </tr>
											    <tr>
											      <td><b>Showing Time :</b></td>
											      <td><?php echo $_POST['time']; ?></td>
											    </tr>
											    <tr>
											      <td><b>SeatCategory :</b></td>
											      <td><?php echo $_POST['ticket']; ?></td>
											    </tr>
											    <tr>
											      <td><b>Show Date :</b></td>
											      <td><?php echo $_POST['date']; ?></td>
											    </tr>
											    <tr>
											      <td><b>No of seats :</b></td>
											      <td><?php echo $_POST['seat']; ?></td>
											    </tr>
											</tbody>
										</table>
										</p>
									</div>
						  	
									<div class="col-lg-12 my-3 mx-auto">
										<a href="step1.php" class="btn btn-outline-danger font-weight-bold font-playfair ">
											C A N C E L
										</a>
										<a href="step3.php" class="btn btn-outline-primary font-weight-bold font-playfair " style="margin-left: 210px;">
											N E X T  <i class="fa  fa-arrow-right ml-1"></i> S T E P I I I
										</a>
									</div>
								</div>
								</form>
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
<?php require_once 'footer.php'; ?>
<!-- footer section end -->

<!-- DRY => Don't Repeat Yourself -->

<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
<script src="library/bootstrap/popper.min.js"></script>
<script src="library/bootstrap/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>