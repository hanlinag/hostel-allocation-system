<?php 
	$dbhost ="localhost:8888";
	$dbuser ="";
	$dbpass ="";
	$dbname="hostel";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	mysqli_select_db($conn, $dbname);
?>
