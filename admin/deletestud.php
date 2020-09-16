<?php
  $conn = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

  
  mysqli_select_db($conn, "hostel") or die(mysql_error());
 
  $id = $_GET['id']; 
  
  
    $id = htmlspecialchars($id); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    
    $id = mysqli_real_escape_string($conn, $id);
    // makes sure nobody uses SQL injection
    
    $ress=mysqli_query($conn,"select roomid from allocation where studno='$id';");
	$rr = mysqli_fetch_assoc($ress);
	$rid =$rr['roomid'];
   

   mysqli_query($conn, "delete from student where studno='$id'") or die(mysqli_error());

   $ses_sql=mysqli_query($conn,"select avilable from room where roomid='$rid';");
	$row = mysqli_fetch_assoc($ses_sql);
	$ava =$row['avilable'];

	$ava = $ava +1;

	mysqli_query($conn, "UPDATE `room` SET `avilable` = '$ava' WHERE `room`.`roomid` = $rid ;") or die(mysqli_error());
      
    mysqli_query($conn, "delete from allocation where studno='$id'") or die(mysqli_error());

     mysqli_query($conn, "delete from fee where studno='$id'") or die(mysqli_error());

      mysqli_query($conn, "delete from rollcall where studno='$id'") or die(mysqli_error());
    
 header("location: ../admin/viewstudentinfo.php");
?>