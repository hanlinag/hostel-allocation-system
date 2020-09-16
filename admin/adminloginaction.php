<?php
session_start(); // Starting Session

$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Missing something";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// To protect MySQL injection for Security purpose
/*
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);*/
// Selecting Database
$db = mysqli_select_db( $connection, "hostel");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from admininfo where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['loginuser']=$username; // Initializing Session
header("location: ../admin/profile.php"); // Redirecting To Other Page
isset($_SESSION['loginuser']);
} else {
$error = "Username or Password is invalid";
echo "$error";

}
mysqli_close($connection); // Closing Connection
}
}

?>