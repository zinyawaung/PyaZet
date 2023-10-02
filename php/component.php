<?php 
	function inputElement($your,$name){
		$element = "
			<div class='form-group'>
				<label for='exampleInputEmail1'><span class='text-red'>$your</span> 
				<span class='text-blue'>$name</span></label>
				<input type='text' class='form-control'>
			</div>

		";
		echo $element;
	}
		function buttonElement($type,$style,$attr,$signup){
			$btn = "
			<a href='#' type='$type' class='$style' $attr>$signup</a> 

			";
			echo $btn;
		}

		function nowshowing($image,$title,$duration,$rate,$name,$characters,$genre,$time){

			$element = "<div class='container movie font-quicksand'>
							<div class='row'>
								<div class='col-lg-3'>
									<a href='#'><img src='images/$image' class='nsimg' width='155px'></a><br>
								</div>
								<div class='col-lg-4'>
									<div class='movie-info font-size-14' wfd-id='65'>
					                    <a href='#' class='movie-link text-black'><h4>
					                    $title</h4></a>
					                    <p class='duration-rating'>$duration | Rated $rate</p>

					                    <div class='director mobile-hide' wfd-id='67'><b>Directed by</b> $name</div>
					                    <div class='actors mobile-hide' wfd-id='66'><b>Starring</b> $characters</div>
					                    <div class='genre mobile-hide' wfd-id='67'><b>Genre : </b> $genre</div>
					                </div>
								</div>
								<div class='col-lg-5'>
									$time

								</div>
							</div>
						</div>

					<p class='card-text ml-3 my-3' id='mylove'>
							<a href='' class='btn btn-outline-danger'>Watch Thrailer</a>
							<a href='' class='btn btn-outline-primary'>Buy Ticket</a>
						</p>
						 ";

			echo $element;
		}
 ?>