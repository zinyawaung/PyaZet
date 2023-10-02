 <?php 
	// require_once 'php/component.php';
	// require_once 'php/operation.php';
 	session_start();
 	include_once 'php/db.php';

 	if (isset($_POST['submit'])) {
 		$name = $_POST['name'];
 		$pwd = $_POST['pwd'];

 		$sql = "select * from customer where c_name = '$name' and c_password='$pwd'";
 		$res = mysqli_query($conn,$sql);
 		@$_SESSION['name'] = $name;
 		if ($res) {

		 header('location:userchoice.php');
		}else{
			header('location:signin.php');
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

	<!-- navbar	-->
	<?php require_once 'navbar.php'; ?>

	<!-- body section start -->
	<body class="section_body" style="background-image: url(images/netflix.jpg);">
		<!-- about section start -->
		<div class="container about my-4">
			<div class="row" style="margin-left: 250px;">
				<div class="col-lg-8">
					<div class="card border-0 p-3" style="background: #000201;opacity: 95%;">
						<h3 class="font-playfair text-white"><span class="text-red">Sign</span> <span class="text-blue">In</span></h3>			
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <form action="#" method="post">
						  	<div class="form-group">
							    <label><span class="text-red">Your</span> <span class="text-blue">Name</span></label>
							    <input type="text" name="name" class="form-control">
						  	</div>
						  	<div class="form-group">
							    <label for="exampleInputPassword1" class="text-red"><span class="text-red">Pass</span><span class="text-blue">word</span></label>
							    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
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
						 		<div class="col-lg-4 signin text-red">
								    <button class="btn btn-outline-danger mb-3 mr-2 font-quicksand" name="submit">Sign In</button>
								    <!-- <a href="userchoice.php"><input type="submit" class="btn btn-outline-danger mb-3 mr-2 font-quicksand" name="submit" value="Sign In"></a> -->
								</div>
								<div class="col-lg-4 signup text-blue" style="margin-left: 170px;">
									<a href="signup.php" class="btn btn-outline-primary mb-3 mr-2  font-quicksand">Sign Up<i class="fa  fa-arrow-right ml-1"></i></a>
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