<?php
$errorms=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['cardno']) || empty($_POST['amount'])) {
$errorms = 'Missing something';
}
else
{
// Define $username and $password
$cardnumber=$_POST['cardno'];
$moneyamount=$_POST['amount'];
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
mysqli_query($connection,"INSERT into giftcard VALUES (gid, '$cardnumber','$moneyamount')");

$errorms='One Card Added';

}
}

?>