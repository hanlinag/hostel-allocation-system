<?php
  include('../HostelAllocationSystem/checkStudentCodeAction.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Code Comfirmation</title>
	 

	 <link rel="stylesheet" type="text/css" href="stylecss/recieptCodeStyle.css">

	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="icon/hostelicon.ico">

   
</head>
<body>
		

        <h2 class="text-center" id="welcomeText">ENTER YOUR STUDENT NUMBER</h2>
       <h4 class="text-center" id="secondText">Before you register for hostel room, you have to register your identity to school first.</h4>
             
             <form action="" method="Post">
        	<div class="container ">
            <div class="row">
              <div class="loginform">
              
              <input type="text" placeholder="Student Number" name="studno" class=" form-control " id="tfs"><br>
              <a href="index.php" id="btCancel">Cancel</a>
             	<input type="submit" name="submit" id="btCheck" value="Check"><br>
              <span style="color: red"><?php echo $emsg; ?></span>
              
              </div>
              </div>
         </div> 
         </form>  

</body>
</html>