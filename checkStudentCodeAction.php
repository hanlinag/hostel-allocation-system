<?php
$emsg=''; // Variable To Store Error Message

if(isset($_POST['submit'])){
	if (empty($_POST['studno'])) {
		# code...
		$emsg= 'Missing';
	}
	else{

		$studentnum = $_POST['studno'];

	$connection = mysqli_connect("127.0.0.1", "root", "");

	// Selecting Database
	$db = mysqli_select_db( $connection, "hostel");

	
	
	$query = mysqli_query($connection,"select studno from student where studno='$studentnum'");
	$rows = mysqli_num_rows($query);

	if ($rows == 1) {
		$studentnum = $_POST['studno'];

		$connection = mysqli_connect("127.0.0.1", "root", "");

		$db = mysqli_select_db( $connection, "hostel");
 
		/*$que = mysqli_query($connection,"select proposted  from student where studno ='$studentnum' ");
		$rrr = mysqli_fetch_assoc($que);
		$propo = $rrr['proposted '];*/

		$ses_sql=mysqli_query($connection,"select proposted from student where studno='$studentnum'");
		$row = mysqli_fetch_assoc($ses_sql);
		$pp =$row['proposted'];

			if($pp == '1'){
				$emsg='You already sign up';
				
			}
			else  {
				# code...
				$studno = $studentnum;
				header("location: studentsignup.php?stud=$studno"); // Redirecting To Other Page
			}
	 
	}
	else{

	$emsg = 'You are not registered to school or wrong student number. Try Again!';
	
}

}
}
?>