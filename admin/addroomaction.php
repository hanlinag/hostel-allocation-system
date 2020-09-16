<?php
	$err = '';

if (isset($_POST['submit'])) {

if (empty($_POST['roomno']) || empty($_POST['noofstud'])) {

	
	$err = 'Missing something';
	
}
else
{
	
	$roomno = $_POST['roomno'];
	$noofStud = $_POST['noofstud'];

	include("confs/config.php");
	$res=mysqli_query($conn,"SELECT * FROM room WHERE roomno='$roomno' ;");
	$rrr = mysqli_fetch_assoc($res);
	$beforeexit =$rrr['roomno'];

	if($beforeexit == null){
		
	$sql ="INSERT INTO room VALUES(roomid,'$roomno', $noofStud, '$noofStud') ";

	include("confs/config.php");
	mysqli_query($conn , $sql);


	header("location: addroom.php");
	$err ='One room added';
	
	}else{
	$err ='Already exit!';
}
}
}
?>
