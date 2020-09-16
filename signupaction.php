<?php

	if(isset($_POST['submit'])){
		if(empty($_POST['studno']) || empty($_POST['pw']) || empty($_POST['cpw']) || empty($_POST['phno']) || empty($_POST['email'])){
			echo "Something missing! Check and try again..";
		}
		else if(empty($_POST['accept'])){
			echo "Please accept rules!";

		}
		else if($_POST['pw'] != $_POST['cpw']){
			echo "Passwords do not match! Try again..";
		}
		else{
			include("../HostelAllocationSystem/admin/confs/config.php");

			$studnum = $_POST['studno'];
			$pass = $_POST['cpw'];
			$emaill = $_POST['email'];
			$phnum = $_POST['phno'];

			$sql ="UPDATE `student` SET `phno` = '$phnum', `email` = '$emaill', `password` = '$pass', `proposted` = '1' WHERE `student`.`studno` = '$studnum' ";

			mysqli_query($conn , $sql);
			mysqli_query($conn, "UPDATE `student` SET `proposted` = '1' WHERE `student`.`studno` = '$studnum' ");
			

			header("location: ../HostelAllocationSystem/student/index.php");


		}
	}
 
?>