<?php
  include('../admin/adminloginaction.php'); // Includes Login Script

  if(isset($_SESSION['loginuser'])){
  header("location: ../admin/profile.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/adminLoginStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
		

        <h1 class="text-center" id="welcomeText">HELLO ADMIN<br>WELCOME TO SYSTEM</h1>

          <form action="" method="post">

        	<div class="container loginform">
            
            <div class="row">
            <div class="col-md-4">
              <input type="text" placeholder="username" class=" form-control " name="username" id="username tfs"><br>
              </div>
              </div>

            <div class="row">
            <div class="col-md-4">
              <input type="password" placeholder="password" class="form-control " name="password" id="password tfs"><br>
              </div>
              </div>

              <div class="row">
            <div class="col-md-4">
              <a href="../index.php" id="btCancel">Cancel</a>
             	<input type="submit" name="submit" value="Login" id="btLogin">
              </div>
              </div>
              <br>
              <span style="color: red;"><?php echo $error; ?></span>
         </div> 
         </form>  

</body>
</html>