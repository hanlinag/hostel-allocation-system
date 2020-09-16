<?php
include("../student/studsession.php");
$eormsg=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['email']) || empty($_POST['phno'])) {
$eormsg = "Fill Anything to update";

}
else
{
// Define $username and $password
$newemail=$_POST['email'];
$newphone=$_POST['phno'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");

// Selecting Database
$db = mysqli_select_db( $connection, "hostel");
// SQL query to fetch information of registerd users and finds user match.
mysqli_query($connection,"UPDATE `student` SET `phno` = '$newphone', `email` = '$newemail' WHERE `student`.`studno` = '$user_check'");

$eormsg ='Update Success!';

}
}

?>