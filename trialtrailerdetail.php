<?php 
		require_once 'php/db.php';
		if (isset($_GET['m_id'])) {
			$id =$_GET['m_id'];

			$sql = "select * from movie where m_id = $id";
			$result = mysqli_query($conn,$sql);
			$num = mysqli_fetch_assoc($result);
			
			$image=$num['image'];
			$name=$num['m_name'];
			$duration=$num['duration'];
			$rating=$num['rating'];
			$director=$num['director'];
			$actor=$num['actor'];
			$genre=$num['genre'];
			$video = $num['video'];
			$review = $num['review'];

			
			//execeute query and get result
		
			//fetch resulting rows as an array
			
			// mysqli_free_result($result);

			// mysqli_close($conn);
		}
	// 	if (isset($_POST['buy'])) {
	// 		$name = $_GET['m_name'];
	//  $check="SELECT * FROM movie";

	// $result=mysqli_query($connect,$check);
	// $r=mysqli_fetch_assoc($result);
	// if ($result) {
	// 	$_SESSION['m_name'] = $r['m_name'];
	// }
	// else
	// {
	// 	echo "<script>alert('try again');</script>";
	// }
	// 	}

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
		<?php 
			require_once 'navbar.php'; 
		?>

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
								<a href="#"><img src="<?php  echo $image;?>" class="img-fluid ssimg"></a>
							</span>
						</aside>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="">	
						<h2 class="font-playfair text-white"><?php  echo $name; ?></h2>	
						<div class="mobile-hide" wfd-id="67">
							<p class='duration-rating font-quicksand text-white-50 font-size-14'><?php  echo "$duration"; ?>|<?php  echo $rating; ?>|<?php  echo $genre; ?></p>
							<p class='duration-rating font-quicksand text-white-50 font-size-14'><?php  echo $director; ?>|<?php  echo $actor; ?></p>
						</div>								
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand mb-3	">
							<div class="row">
								<div >
									<div class="movie-info font-size-14 text-white " wfd-id="65" style="line-height: 24px;">
					                    <p class="font-quicksand">
					                    	<?php  echo $review; ?>
										</p>
					                </div>
								</div>
							</div>

							<p class='card-text my-3' id='mylove'>
								<a href='' class='btn btn-outline-danger'><i class="fab fa-youtube fa-2x"></i> Watch</a>
								<a href='' class='btn btn-outline-primary'><i class="fab fa-facebook fa-2x"></i> Share</a>
								<a href='' class='btn btn-outline-primary'><i class="fab fa-twitter fa-2x"></i> Tweet</a>
							</p>
							
								<iframe width="650" height="400" src="<?php  echo $video; ?>">
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