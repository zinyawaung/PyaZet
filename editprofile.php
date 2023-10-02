<?php 
	session_start();
	require_once 'php/db.php';

	$errors=array('c_id'=>'','c_name'=>'','c_password'=>'','email_id'=>'','phone_no'=>'');
	
	if (isset($_POST['editprofile'])) {
		# code...
		if (empty($_POST['c_id'])) {
			$errors['c_id'] =  "customer id cannot be empty";
		}
		if (empty($_POST['c_name'])) {
			$errors['c_name'] =  "your name cannot be empty";
		}
		if (empty($_POST['c_password'])) {
			$errors['c_password'] =  "your password cannot be empty";
		}
		if (empty($_POST['email_id'])) {
			$errors['email_id'] =  "your email cannot be empty";
		}
		if (empty($_POST['phone_no'])) {
			$errors['phone_no'] =  "your phone no cannot be empty";
		}
		if (array_filter($errors)) {
 			
 		}
 		else{
 			$id =$_GET['id'];
 			$c_id = mysqli_real_escape_string($conn,$_POST['c_id']);
 			// $news_id= mysqli_real_escape_string($conn,$_POST['news_id']);
 			$c_name = mysqli_real_escape_string($conn,$_POST['c_name']);

 			$c_password = mysqli_real_escape_string($conn,$_POST['c_password']);
 			$email_id = mysqli_real_escape_string($conn,$_POST['email_id']);
 			$phone_no = mysqli_real_escape_string($conn,$_POST['phone_no']);
 			

				// $tmp= $_FILES['image']['tmp_name'];
				// 	$name=$_FILES['image']['name'];
				// 	$dst = "images/".$name;
				// move_uploaded_file($tmp,$dst);

			$sql="update customer SET  c_id='$c_id', c_name='$c_name' , c_password='$c_password' ,email_id='email_id' ,phone_no='phone_no' where c_id='$id'";
			if (mysqli_query($conn,$sql)) {
					echo "<script>alert('NEWS edit  successfully!');</script>";
			}else{
					echo "Update failed ".mysqli_error($conn);
			}
 		}
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
								<section>
						<div class="row">
							<div class="col-lg-10 col-md-9 mx-auto">
								<div class="add-video">
									<h3 class="text-center font-quicksand py-4"><span class="font-size-34 text-red">Edit Yo</span><span class="font-size-34 text-blue font">ur Profile</span ></h3>
										<form action="" method="post" enctype="multipart/form-data">
											<div class="input-group py-3 px-4">
												<input type="text" name="c_name" placeholder="Your Name" class="form-control" value=""><br>
											</div>
											<div class="text-danger ml-4 font-12">
												<?php echo $errors['c_name'] ?>
											</div>
											<div class="input-group py-3 px-4">
												<input type="text" name="c_password" placeholder="Your Password" class="form-control" value=""><br>
											</div>
											<div class="text-danger ml-4 font-12">
												<?php echo $errors['c_password'] ?>
											</div>
											<div class="input-group py-3 px-4">
												<input type="text" name="email_id" placeholder="Your Email" class="form-control" value=""><br>
											</div>
											<div class="text-danger ml-4 font-12">
												<?php echo $errors['email_id'] ?>
											</div>
											<div class="input-group py-3 px-4">
												<input type="text" name="phone_no" placeholder="Your Phone No." class="form-control" value=""><br>
											</div>
											<div class="text-danger ml-4 font-12">
												<?php echo $errors['phone_no'] ?>
											</div>
											<div class="col-lg-12 my-3 ml-4">
											<a href="userchoice.php" class="btn btn-outline-danger font-weight-bold font-playfair ">
												C A N C E L
											</a>
											<input type="submit" name="editprofile"  class=" btn btn-outline-primary" value="E D I T" style="margin-left: 200px;">
											</div>
									</form>
								</div>
							</div>
						</div>
					</section>
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