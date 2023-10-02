<!-- <?php 
	// require_once 'php/component.php';
	// require_once 'php/operation.php';
?> -->

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
		<?php require_once 'navbar.php'; ?>
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
				<div class="col-lg-8">
					<div class="card border-0 p-3">
						<div >
							<h3 class="font-playfair"><span class="text-red">T E R M S</span> & <span class="text-blue">C O N D I T I O N S</span></h3>
						</div>						
						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
			            <div class="container movie font-quicksand flex-container flex-container-wrap" id="feature-products">
							<p>
								<b><span class="text-red">Pya</span><span class="text-blue">Zet</span></b> in compliance with 17 U.S.C. § 512 and the Digital Millennium Copyright Act (“DMCA”). It is our policy to respond to any infringement notices and take appropriate actions under the Digital Millennium Copyright Act (“DMCA”) and other applicable intellectual property laws.If your copyrighted material has been posted on <b><span class="text-red">Pya</span><span class="text-blue">Zet</span></b> or if links to your copyrighted material are returned through our search engine and you want this material removed, you must provide a written communication that details the information listed in the following section. Please be aware that you will be liable for damages (including costs and attorneys’ fees) if you misrepresent information listed on our site that is infringing on your copyrights. We suggest that you first contact an attorney for legal assistance on this matter.The following elements must be included in your copyright infringement claim:
								Provide evidence of the authorized person to act on behalf of the owner of an exclusive right that is allegedly infringed.<br>
								Provide sufficient contact information so that we may contact you. You must also include a valid email address.<br>
								You must identify in sufficient detail the copyrighted work claimed to have been infringed and including at least one search term under which the material appears in <b><span class="text-red">Pya</span><span class="text-blue">Zet</span></b>.org search results.<br>
								A statement that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law.<br>
								A statement that the information in the notification is accurate, and under 	penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.<br>
								Must be signed by the authorized person to act on behalf of the owner of an exclusive right that is allegedly being infringed.<br>
								Please allow 1-3 business days for an email response. Note that emailing your complaint to other parties such as our Internet Service Provider will not expedite your request and may result in a delayed response due the complaint not properly being filed.
							</p>
						</div>
						

						<hr style="border-bottom: 2px solid #33311f;margin-top: -2px;">
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
					<div class="tenet border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster1.png" class="img-fluid tcimg"></a>
							</span>
						</aside>
					</div>
					<div class="deadpool border-0 my-3">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/deadpool.jpg" class="img-fluid tcimg"></a>
							</span>
						</aside>
					</div>
					<div class="sign-up border-0">
						<aside class="mobile_hide tablet_hide">
							<span>
								<a href="#"><img src="images/poster2.png" class="img-fluid tcimg"></a>
							</span>
						</aside>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster3.png" class="card-img-top tcimg">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
						<div class="card border-0">
							<img src="images/poster5.png" class="card-img-top tcimg">
						</div>
					</div>
					<div class="col-lg-4 mt-3">
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