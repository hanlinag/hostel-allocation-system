<?php
  include('../student/changepwaction.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/studentChangePwStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>

		 <h1 class="text-center">Changing User Password</h1>
        
            <div class="loginform container">
            <form action="" method="Post">
            <div class="row">
            

            <h5 class="labelText">Current Password</h5>
              <input type="password" placeholder="Current Password" class=" form-control " id="tfs" name="curpw"><br>

            </div>

            <div class="row">
              <h5 class="labelText">New Password</h5>
              <input type="password" placeholder="New Password" class="form-control " id="tfs" name="newpw"><br>
              </div>

              <div class="row">
              <h5 class="labelText">Confirm New Password</h5>
              <input type="password" placeholder="Confirm Password" class="form-control " id="tfs" name="confpw"><br>
            </div>
            <div class="row">
            <a href="studentprofile.php" class="btCancel" id="btCancel">Cancel</a>
            <input type="submit" name="submit" id="btChange" value="Change">
            <br>
            <span style="color: red"><?php echo $errormsg; ?></span>
            <br>
            </div>
            </form>
         </div> 

</body>
</html>