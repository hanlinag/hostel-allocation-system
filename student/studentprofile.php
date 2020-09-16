<?php
include('studsession.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Dashboard</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/studentDashboardStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>

		
		<div class="Stunavigation ">
		<ul>
		<li><h5 class="text-center" ><i><?php echo $login_session; ?></i> - <i><?php echo $currentname; ?></i></h5></li>
		<li><a href="../student/studlogout.php" id="btnLogout">Logout</a></li>
		</ul>
		</div>
		
         <div class="container" >
         	<div class="row" id="parentlayout">
         		<div class="col-md-4" id="btIcons">
         			<a href="studentUpdateInfo.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
         			<h4 class="labelText">Update Information</h4>
         		</div>

         		<div class="col-md-4" id="btIcons">
         			<a href="studentPayBill.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
         			<h4 class="labelText">Pay Bill</h4>
         		</div>

         		<div class="col-md-4" id="btIcons">
         			<a href="studentChangePassword.php"><i class="fa fa-shield" aria-hidden="true"></i></a>
         			<h4 class="labelText">Change Password</h4>
         		</div>

         	</div> 
         </div>
         <div class="helpbt">
         <a href="../pdf/help.pdf" id="btHelp" style="<link rel="icon" href="../icon/hostelicon.ico">">Help</a>
         </div>
</body>
</html>