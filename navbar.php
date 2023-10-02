
	<!-- navbar section start -->
		<nav class="navbar navbar-expand-lg navbar-dark">

			<button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navMenu">
			<span class="navbar-toggler-icon"></span> 
			</button>

			<div class="collapse navbar-collapse" id="navMenu">
				<a href="index.php" class="navbar-brand" style="margin-left: 62px;"><img src="images/logoo.png" class="img-fluid ml-5 mr-1" style="width: 140px;"></a>
				<h1 class="font-dancing"><span class="text-red">Pya</span> <span class="text-blue">Zet</span></h1>

				<ul class="navbar-nav mr-3" style="margin-left: 200px;">					
					<li class="nav-item">
		 				<a href="index.php" class="nav-link text-white font-quicksand <?= (basename($_SERVER['PHP_SELF'])=="index.php")?"active":""; ?>">Now Showing</a>
					</li>
					<li class="nav-item">
						<a href="comingsoon.php" class="nav-link text-white font-quicksand <?php if(basename($_SERVER['PHP_SELF'])=="comingsoon.php"){
		 					echo "active";
		 				}else{
		 					echo "";
		 				} ?> ">Coming Soon</a>
					</li>
					<li class="nav-item">
						<a href="signin.php" class="nav-link text-white font-quicksand <?= (basename($_SERVER['PHP_SELF'])=="signin.php")?"active":""; ?>">Sign Up</a>
					</li>
					<li class="nav-item">
						<a href="about.php" class="nav-link text-white font-quicksand <?= (basename($_SERVER['PHP_SELF'])=="about.php")?"active":""; ?>">About</a>
					</li>
					<li class="nav-item dropdown font-quicksand ">
						<a href="#" class="nav-link dropdown-toggle text-white <?= (basename($_SERVER['PHP_SELF'])=="candybar.php")?"active":""; ?>" data-toggle="dropdown">More</a>

						<div class="dropdown-menu">
							<a href="candybar.php" class="dropdown-item <?= (basename($_SERVER['PHP_SELF'])=="candybar.php")?"active":""; ?>" id="dropdown-item1">Candy Bar</a>
							<a href="specialseries.php" class="dropdown-item <?= (basename($_SERVER['PHP_SELF'])=="specialseries.php")?"active":""; ?>" id="dropdown-item2">Special Series</a>
							<div class="dropdown-divider" id="dropdown-item3"></div>
							<a href="terms&conditions.php" class="dropdown-item <?= (basename($_SERVER['PHP_SELF'])=="terms&conditions.php")?"active":""; ?>" id="dropdown-item3">Terms&Conditions</a>
						</div>
					</li>					
				</ul>
							
			</div>
		</nav>
	<!-- navbar section end -->

	<!-- back to top section -->
		<button onclick="topFunction()" id="myBtn" title="Go to top" class="text-white">
			<span class="fa-stack fa-lg">
            		<i class="fa fa-square-o fa-stack-2x"></i>
            		<i class="fa fa-arrow-up fa-stack-1x" style="color: red;"></i>
            </span>
		</button>
	<!-- back to top end -->
