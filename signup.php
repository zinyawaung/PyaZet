<!--  <?php 
	// require_once 'php/component.php';
	// require_once 'php/operation.php';
?>  -->
<?php 
	session_start();
	include_once 'php/db.php';
	
	$errors = array('username' => '','password' => '','email' => '');
		$username = "";
		$password = "";
		$email = "";

	if (isset($_POST['submit'])) {
		if (empty($_POST["username"])) {
				$errors['username'] = "*username is empty.<br>";
			}else{
				$name =$_POST["username"];
				if (!preg_match('/^[A-Za-z\\s]+$/',$name)) {
					$errors['username'] = "username must be validate email format";
				}
		if (empty($_POST["email"])) {
				$errors['email'] = "*email is empty.<br>";
			}else{
				$email =$_POST["email"];
				if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
					$errors['email'] = "email must be validate email format";
				}
			}
		if (empty($_POST["pwd"])) { 
				$errors['password'] = "*password is empty.<br>";
			}else{
				$pwd =$_POST["pwd"];		
				if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,16}$/',$pwd)) {
					$errors['password'] = "password must be at least 8 letters and numbers only.";
				}	else{

		$phnum = $_POST['phnum'];

		$sql = "insert into customer(c_name,c_password,email_id,phone_no) values('$name','$pwd','$email','$phnum')";
		$run = mysqli_query($conn,$sql);
		if ($run) {
		 header('location:signin.php');
		}else{
			header('location:signup.php');
		}
				}
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
<body >
	<!-- header section  start-->
	<header class="section">
	
	<!-- navbar -->
	<?php require_once 'navbar.php'; ?>

	</header>
	<!-- header section end-->

	<!-- body section start -->
	<body class="section_body" style="background-image: url(images/netflix.jpg);">
		<!-- about section start -->
		<div class="container about my-4">
			<div class="row" style="margin-left: 250px;">
				<div class="col-lg-8">
					<div class="card border-0 p-3" style="background: #000201;opacity: 95%;border-radius: 25px;">
						<h3 class="font-playfair text-white"><span class="text-red">Sign</span> <span class="text-blue">Up</span></h3>			
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <form action="#" method="post">
						  	<div class="form-group">
							    <label for="exampleInputEmail1"><span class="text-red">Your</span> <span class="text-blue">Name</span></label>
							    <input type="text" name="username" class="form-control">
							    <div class="text-danger my-3"><?php echo $errors['username']; ?></div>
						  	</div>
						  	<div class="form-group">
							    <label for="exampleInputPassword1" class="text-red"><span class="text-red">Pass</span><span class="text-blue">word</span></label>
							    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1"><div class="text-danger my-3"><?php echo $errors['password']; ?></div>
						 	 </div>
						  	<div class="form-group">
							    <label for="exampleInputEmail1"><span class="text-red">Email</span> <span class="text-blue">Address</span></label>
							    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><div class="text-danger my-3"><?php echo $errors['email']; ?></div>
							    <small id="emailHelp" class="form-text text-red">We'll never share your email with anyone else.</small>
						  	</div>						  	
						  	<div class="form-group">
							    <label for="exampleInputPassword1" class="text-red"><span class="text-red">Phone</span> <span class="text-blue">Number</span></label>
							    <input type="text" name="phnum" class="form-control">
						 	 </div>						  	
							 <div class="form-group form-check">
							 	<div class="row">
							 		<div class="col-lg-4">
									    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									    <label class="form-check-label text-red" for="exampleCheck1">Remember me</label>
									</div>
									<div class="col-lg-4" style="margin-left: 170px;">
										<a href="#" class="needhelp">
											<p>Need Help?</p>
										</a>
									</div>
							    </div>
							 </div>	
						  	<div class="row">
							 	<div class="col-lg-4">
									<input type="submit" name="submit" class="btn btn-outline-danger" value="Signup">
								</div>
								<div class="col-lg-4" style="margin-left: 170px;">
									<a href="signin.php" type="submit" class="btn btn-outline-primary mb-3 mr-2"><i class="fa fa-arrow-left mr-1"></i>Sign In</a> 
								</div>
							</div>
						</form>

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand">							
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