<?php
include("../student/studsession.php");

$passw = mysqli_query($connection, "select password from student where studno='$login_session'");
$rr = mysqli_fetch_assoc($passw);
$psw = $rr['password'];

$errormsg=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['curpw']) || empty($_POST['newpw']) || empty($_POST['confpw'])) {
$errormsg = "Missing something!";

}
else if($_POST['newpw'] != $_POST['confpw']){

	$errormsg='New Password and Confirm Password do not match!';
}
else if( $_POST['curpw'] != $psw ){

	$errormsg='Current password does not correct!';
}
else
{
// Define $username and $password
$currentpassword=$_POST['curpw'];
$newpassword=$_POST['confpw'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");

// Selecting Database
$db = mysqli_select_db( $connection, "hostel");
// SQL query to fetch information of registerd users and finds user match.
mysqli_query($connection,"UPDATE `student` SET `password` = '$newpassword' WHERE `student`.`studno` = '$login_session' AND `student`.`name` = '$currentname';");

$errormsg ='Success! Password Changed..';

}
}

?>