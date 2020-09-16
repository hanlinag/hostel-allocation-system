<?php
  $conn = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

  
  mysqli_select_db($conn, "hostel") or die(mysql_error());
 
  $id = $_GET['id']; 
  
  
    $id = htmlspecialchars($id); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    
    $id = mysqli_real_escape_string($conn, $id);
    // makes sure nobody uses SQL injection
    
   mysqli_query($conn, "UPDATE `student` SET `stay` = '1' WHERE `student`.`studno` = '$id';") or die(mysqli_error());

   mysqli_query($conn, "INSERT INTO rollcall VALUES ('$id','0')") or die(mysqli_error());

   
      

    
 header("location: ../admin/acceptstud.php");
?>