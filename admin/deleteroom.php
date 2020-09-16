<?php
  $conn = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

  
  mysqli_select_db($conn, "hostel") or die(mysql_error());
 
  $rid = $_GET['id']; 
  
  
    $rid = htmlspecialchars($rid); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    
    $rid = mysqli_real_escape_string($conn, $rid);
    // makes sure nobody uses SQL injection
    
   mysqli_query($conn, "Delete from room WHERE `room`.`roomid` = '$rid';") or die(mysqli_error());

    $results = mysqli_query($conn, "SELECT allocation.studno from allocation WHERE roomid ='$rid' ");
    			
          while ($row = mysqli_fetch_array($results)) {
          	
          	$stud = $row['studno'];
          	//echo "$stud";

          	mysqli_query($conn, "UPDATE `student` SET `allocate` = '0' WHERE `student`.`studno` = '$stud'") or die(mysqli_error());


          	
          }
   		mysqli_query($conn, "Delete from allocation WHERE `allocation`.`roomid` = '$rid';") or die(mysqli_error());

      

    
 		header("location: ../admin/viewroom.php");
?>