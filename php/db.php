<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "pyazet";

	//Create conneciton
	$conn = new mysqli($servername,$username,$password,$database);

	//Check conneciton
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

 ?>