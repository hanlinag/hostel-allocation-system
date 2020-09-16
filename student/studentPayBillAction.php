<?php
include("../student/studsession.php");
$errormg=''; // Variable To Store Error Message
$errormsgtopup='';


if (isset($_POST['submit'])) {

if (empty($_POST['payamount'])) {
$errormg = "Please enter the amount!";

}
else
{
	$monthypaymentamount = 5000;
// Define $username and $password
$paymentamount=$_POST['payamount'];

if($paymentamount < $monthypaymentamount){
	$errormg = 'Fee amount is 5000 Kyats per month';

 }else if($currentbalance< $paymentamount){
 	$errormg = 'Your balance is not enough.Top Up and try again!';
}
else{
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");

// Selecting Database
$db = mysqli_select_db( $connection, "hostel");
// SQL query to fetch information of registerd users and finds user match.

$date = date('d / m / Y , h:i:s') ;
mysqli_query($connection,"insert into fee values('$user_check', '$paymentamount', '$date') ");

$currentbalance = $currentbalance - $paymentamount;

mysqli_query($connection,"update student set balance='$currentbalance' where studno='$user_check'");


$errormg ='Payment Success!';

}
}
}

/*................................Top Up Functions......................................*/

if (isset($_POST['TopUp'])) {

if (empty($_POST['cardno'])) {
$errormsgtopup = "Please Enter Card Number";
}
else{
$cardnuber=$_POST['cardno'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");

// Selecting Database
$db = mysqli_select_db( $connection, "hostel");

$pinnores = mysqli_query($connection, "select * from giftcard where pinno='$cardnuber'");

$rows = mysqli_num_rows($pinnores);
if ($rows == 1) {
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");

// Selecting Database
$db = mysqli_select_db( $connection, "hostel");

$bal = mysqli_query($connection, "select amount from giftcard where pinno='$cardnuber'");
$newbal = mysqli_fetch_assoc($bal);
$newBalance = $newbal['amount'];

$currentbalance = $currentbalance + $newBalance;

mysqli_query($connection, "update student set balance='$currentbalance' where studno='$user_check'");

mysqli_query($connection, "delete from giftcard  where pinno='$cardnuber'");

$errormsgtopup ='Top Up Success!';
}else 
{

$errormsgtopup='Wrong Pin Number!';


}
}
}

?>