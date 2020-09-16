<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['studno']) || empty($_POST['password'])) {
$error = "Something missing!";
}
else
{
// Define $username and $password
$username=$_POST['studno'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
$db = mysqli_select_db($connection,"hostel");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection,"select * from student where password='$password' AND studno='$username' ");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['stud_user']=$username; // Initializing Session
header("location: ../student/studentprofile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>

