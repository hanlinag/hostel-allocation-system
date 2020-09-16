<?php
    include('../student/studsignaction.php'); // Includes Login Script

if(isset($_SESSION['stud_user'])){
header("location: ../student/studentprofile.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Signin</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/studentLoginStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
		

        <h1 class="text-center" id="welcomeText">HELLO, WELCOME TO <br>HOSTEL ALLOCATION SYSTEM</h1>
        
        	<div class="container loginform">
            <form action="" method="post">
              <input type="text" placeholder="Student Number" class=" form-control " id="tfs" name="studno"><br>
              <input type="password" placeholder="Password" class="form-control " id="tfs" name="password"><br>
              <a href="../index.php" id="btCancel">Cancel</a>
             	<input type="submit" name="submit" value="Login" id="btLogin">
              <span style="color:red"><?php echo $error; ?></span>
              <br>
              <div class="signupLayer">
              <a href="../receiptCodeEnter.php" id="signupLink">Don't have an account?Create one?</a>
              
              </div>
              </form>
         </div>   

</body>
</html>