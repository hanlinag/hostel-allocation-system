<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"hostel");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['stud_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select studno from student where studno='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['studno'];

$res = mysqli_query($connection, "select name from student where studno='$user_check'");
$ro = mysqli_fetch_assoc($res);
$currentname = $ro['name'];

$passw = mysqli_query($connection, "select password from student where studno='$user_check'");
$rr = mysqli_fetch_assoc($passw);
$psw = $rr['password'];

$balance = mysqli_query($connection, "select balance from student where studno='$user_check'");
$rrr = mysqli_fetch_assoc($balance);
$currentbalance = $rrr['balance'];


if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
