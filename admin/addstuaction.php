<?php
$errormsg='';

if(isset($_POST['submit'])){
if(empty($_POST['studentid'])|| empty($_POST['name'])|| empty($_POST['fathername'])|| empty($_POST['courseyear'])|| empty($_POST['academicyr'])|| empty($_POST['address'])){

$errormsg= 'Missing';

}
else {

	/*include("confs/config.php");*/
	$connection = mysqli_connect("127.0.0.1", "root", "");
	$db = mysqli_select_db( $connection, "hostel");

	$studid = $_POST['studentid'];
	$studname = $_POST['name'];
	$dadname = $_POST['fathername'];
	$courseyr = $_POST['courseyear'];
	$acadyr = $_POST['academicyr'];
	$addr = $_POST['address'];
	$phone = $_POST['phno'];
	$mail = $_POST['email'];
	$bill = $_POST['balance'];

	$res=mysqli_query($connection,"SELECT * FROM student WHERE studno='$studid' ;");
	$rrr = mysqli_fetch_assoc($res);
	//$beforeexit =$rrr['avilable'];

	if($rrr >0){
		$errormsg ='Already exit!';
	}else{


	mysqli_query($connection ,"INSERT INTO student VALUES ('$studid', '$studname ','$dadname', '$courseyr', '$acadyr','$addr','$phone','$mail', '$bill','0','','0','0') ");

	

	$errormsg ='One student added';

}
}
}
?>