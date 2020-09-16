<?php
	$err = '';
	$totalstud='';
	$totalava ='';
$conn = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

  
  	mysqli_select_db($conn, "hostel") or die(mysql_error());
    $result=mysqli_query($conn,"SELECT * FROM room;");
	$totalstud = 0;
	$totalava = 0;

	while ($ro = mysqli_fetch_array($result)) {
		$totalstud += $ro['noofstud'];
		$totalava += $ro['avilable'];
	}

	

if (isset($_GET['submit'])) {

if ( empty($_GET['id'])) {
	$err = 'Missing something';
}
else
{
	$conn = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

  
  mysqli_select_db($conn, "hostel") or die(mysql_error());
 
  $roomid = $_GET['rid'];
   $id = $_GET['id']; 
  
 // echo "room is $roomid and studno is $id";
  
    $id = htmlspecialchars($id); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    
    $id = mysqli_real_escape_string($conn, $id);
    // makes sure nobody uses SQL injection

     $resss=mysqli_query($conn,"select studno from student where studno='$id';");
	 $rowww = mysqli_fetch_assoc($resss);
	 $studnocheck =$rowww['studno'];

    $ses_sql=mysqli_query($conn,"select avilable from room where roomid='$roomid';");
	$row = mysqli_fetch_assoc($ses_sql);
	$ava =$row['avilable'];

	$res=mysqli_query($conn,"SELECT * FROM allocation WHERE studno='$id' ;");
	$rrr = mysqli_fetch_assoc($res);
	//$beforeexit =$rrr['avilable'];
	if($studnocheck ==null ){
		$err ="Please enter real student number";
	}
	else if($rrr != null){
		$err = "This student is already allocate";
	}
	else if($ava >0){
		mysqli_query($conn, "INSERT INTO allocation VALUES('$id','$roomid')") or die(mysqli_error());

		$ava = $ava -1;

		mysqli_query($conn, "UPDATE `room` SET `avilable` = '$ava' WHERE `room`.`roomid` = $roomid ;") or die(mysqli_error());

		mysqli_query($conn, "UPDATE `student` SET `allocate` = '1' WHERE `student`.`studno` = '$id';") or die(mysqli_error());

		 header("location: ../admin/allocateroom.php");
	}
	else if(empty($_GET['id']))
	{
		$err = "Enter student id";
	
	}
	else{
		$err =  "Room is full!";
	}

}
}
?>
