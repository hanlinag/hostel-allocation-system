<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost:8888", "", "");
// Selecting Database
$db = mysqli_select_db($connection, "hostel");
session_start();// Starting Session
// Storing Session
//$user_check=$_SESSION['loginuser'];
// SQL Query To Fetch Complete Information Of User
//$user_check=$_SESSION['loginuser'];
// SQL Query To Fetch Complete Information Of User

$ses_sql=mysqli_query($connection,"select username from admininfo where username='admin'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];

if(!isset($login_session)){

 	mysql_close($connection); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
}
?>

