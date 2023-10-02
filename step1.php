<!--  <?php 
// require_once 'php/component.php';
// require_once 'php/operation.php';
?>  -->
<?php 
session_start();
require_once 'php/db.php';
if (isset($_POST['confirm'])) {
		echo $category=mysqli_real_escape_string($conn,$_POST['category']);
	}
	

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

						<p class='card-text my-3 ' id='mylove'>
						<table class="table  table-striped font-quicksand ">
							  	<thead>
								    <tr>
								      <th scope="col">Seat Category</th>
								      <th scope="col">Price</th>
								    </tr>
								</thead>
								<tbody>
								    <tr>
								      <td>Silver :</td>
								      <td>2000Ks</td>
								      
								    </tr>
								    <tr>
								      
								      <td>Gold :</td>
								      <td>3000Ks</td>
								    </tr>
								    <tr>
								   
								      <td>Platinum :</td>
								      <td>5000Ks</td>
								    </tr>
								    <tr>
								      
								      <td>Diamond :</td>
								      <td>9500Ks</td>
								    </tr>
								</tbody>
							</table>
						</p>
						<div class="col-lg-4 flex-item-stretch text-center">
							<img src="images/deadpool.jpg" class="nsimg" width="300px;">
						</div>
					</div>
					<div class="col-lg-8">
						<h4 class="font-playfair"><span class="text-red">S T E P</span> <span class="text-blue">I</span>-<span>BOOK YOUR SELECTION</span></h4>
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
						<div class="row">
							<div class="col-lg-12">
								<div class="card border-0 p-3" style="background: #000201;opacity: 95%;">
									<form action="step2.php" method="POST">
			            				<div class="row">
										  	<div class="input-group mb-3  mx-auto" style="width: 45%">
												  <div class="input-group-prepend">
				    								<label class="input-group-text font-weight-bold font-playfair" for="inputGroupSelect01">Theater :</label>
				  								  </div>
				  								<select class="custom-select font-quicksand font-playfair" id="inputGroupSelect01" name="movie">
				    							<option>P Y A</option>
				    							<option>Z E T</option>
				  								</select>
											</div>
							  	
											<div class="input-group mb-3 mx-auto" style="width: 45%">
												  <div class="input-group-prepend">
				    								<label class="input-group-text font-weight-bold font-playfair" for="inputGroupSelect02">Movie :</label>
				  								  </div>
				  								
				  								<select class="custom-select font-quicksand font-playfair" name="down">
				    							<option selected ><?php  echo $_SESSION["movie"]; ?> </option>
				    							<!-- <option value="1">DOWNHILL</option -->
				    							<!-- <option value="2">MUGEN TRAIN</option> -->
				  								</select>
				  								
											</div>
										</div>
						            	<div class="row">
										  	<div class="input-group mb-3  mx-auto" style="width: 45%">
													<div class="input-group-prepend">
					    								<label class="input-group-text font-weight-bold font-playfair" for="inputGroupSelect01">Show Time :</label>
					  								</div>
					  								<select class="custom-select font-quicksand" id="inputGroupSelect01" name="time">
						    							<option selected>10:30AM</option>
						    							<option>1:30PM</option>
						   								<option>6:30PM</option>
				  									</select>
											</div>
										  	
											<div class="input-group mb-3 mx-auto" style="width:45%">
												<div class="input-group-prepend">
				    								<label class="input-group-text font-weight-bold font-playfair" for="inputGroupSelect02">Seat Category :</label>
				  								</div>
				  								<select class="custom-select font-quicksand" name="ticket">
				    							<option selected><?php echo $_SESSION['silver']; ?></option>
				    							<!-- <option>Gold</option>
				   								<option>Platinum</option>
				   								<option>Diamond</option> -->
				  								</select>
											</div>
										</div>
										<div class="row">
										  	<div class="input-group mb-3 mx-auto" style="width:45%">
												<div class="input-group-prepend">
				    								<label class="input-group-text font-weight-bold font-playfair" for="inputGroupSelect01">Show Date :</label>
				  								</div>
				  								<select class="custom-select font-quicksand" name="date" >
				    							<option selected>21/09/2020</option>
				  								</select>
				    							<!-- <span class="custom-select form-control">
												<input type="date"  value="Select Date"> 
												</span>  -->	
											</div>
									  	
											<div class="input-group mb-3 mx-auto" style="width: 45%">
												<div class="input-group-prepend">
				    								<label class="input-group-text font-weight-bold font-playfair"
				    								for="inputGroupSelect02">No of seats :
				    								</label>
				  								</div>
				  								<select class="custom-select font-quicksand" name="seat" >
					    							<option selected><?php echo $_SESSION['seat']+"1"; ?></option>
					    						
				  								</select>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="card border-0 p-3 bg-dark">
													<div class="card-header" style="border-bottom: 2px solid #33311f;">
														<h5 class="font-playfair font-weight-bold text-center text-red">T H E A T R E I</h5>
													</div>
													<div class="card-body" style="border-bottom: 2px solid #33311f;">
														<img src="images/Theatre1.png" class="img-fluid nsimg" alt="">
													</div>
													<div class="card-footer text-center">
														<a href='downhill.php' class='btn btn-outline-danger font-weight-bold font-playfair'><i class="fas fa-film fa-2x mr-2"></i>P Y A</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="card border-0 p-3 bg-dark">
													<div class="card-header " style="border-bottom: 2px solid #33311f;">
														<h5 class="font-playfair font-weight-bold text-center text-blue">T H E A T R E II</h5>
													</div>
													<div class="card-body" style="border-bottom: 2px solid #33311f;">
														<img src="images/Theatre2.jpg" class="img-fluid nsimg" alt="">
													</div>
													<div class="card-footer text-center">
														<a href='demonslayermovie.php' class='btn btn-outline-primary font-weight-bold font-playfair'><i class="fas fa-film fa-2x mr-2"></i>Z E T</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 my-3 mx-auto">
											<a href="userchoice.php" class="btn btn-outline-danger font-weight-bold font-playfair ">
												C A N C E L
											</a>
											<!-- <a href="step2.php" type="submit"  name="next">
												N E X T  <i class="fa  fa-arrow-right ml-1"></i> S T E P I I
											</a> -->
											<input type="submit" class="btn btn-outline-primary font-weight-bold font-playfair " style="margin-left: 210px;"  name="next" value="S T E P I I">
										</div>
									</form>
								</div>
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