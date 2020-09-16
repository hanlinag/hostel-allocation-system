<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/adminDashboardStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>

		<div class="Stunavigation ">
		<a href="../admin/logout.php" id="btnLogout">Logout</a>
		</div>
		
         <div class="container" >
         	<div class="row" id="parentlayout">
         		<div class="col-md-3" id="btIcons">
         			<a href="../admin/addstudinfo.php"><i class="fa fa-address-card-o" aria-hidden="true"></i></a>
         			<h4 class="labelText">Add Student Information</h4>
         		</div>

         		<div class="col-md-3" id="btIcons">
         			<a href="acceptstud.php"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
         			<h4 class="labelText">Accept/Decline Student</h4>
         		</div>

               <div class="col-md-3" id="btIcons">
                  <a href="nonallostud.php"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
                  <h4 class="labelText">Non-Allocate Students</h4>
               </div>


         		<div class="col-md-3" id="btIcons">
         			<a href="allocateroom.php"><i class="fa fa-users" aria-hidden="true"></i></a>
         			<h4 class="labelText">Allocate Rooms</h4>
         		</div>

         		</div>

               <div class="row" id="parentlayout">
              
         		<div class="col-md-3" id="btIcons">
         			<a href="searchstud.php"><i class="fa fa-search" aria-hidden="true"></i></a>
         			<h4 class="labelText">Search Student</h4>
         		</div>

         		<div class="col-md-3" id="btIcons">
         			<a href="viewstudentinfo.php"><i class="fa fa-files-o" aria-hidden="true"></i></a>
         			<h4 class="labelText">View Student Information</h4>
         		</div>

         		<div class="col-md-3" id="btIcons">
         			<a href="viewfee.php"><i class="fa fa-dollar" aria-hidden="true"></i></a>
         			<h4 class="labelText">View Fee Information</h4>
         		</div>

               <div class="col-md-3" id="btIcons">
                  <a href="attendence.php"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                  <h4 class="labelText">Attendence</h4>
               </div>
               </div>

               

               <div class="row" id="parentlayout">

                <div class="col-md-3" id="btIcons">
                  <a href="addroom.php"><i class="fa fa-bank" aria-hidden="true"></i></a>
                  <h4 class="labelText">Add Rooms</h4>
               </div>


               <div class="col-md-3" id="btIcons">
                  <a href="viewroom.php"><i class="fa fa-bed" aria-hidden="true"></i></a>
                  <h4 class="labelText">View Rooms</h4>
               </div>


               <div class="col-md-3" id="btIcons">
                  <a href="addgiftcard.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
                  <h4 class="labelText">Add Gift Card</h4>
               </div>


               <div class="col-md-3" id="btIcons">
                  <a href="viewgiftcardinfo.php"><i class="fa fa-credit-card" aria-hidden="true"></i></a>
                  <h4 class="labelText">View Gift Card</h4>
               </div>



         	</div> 
         </div>

</body>
</html>