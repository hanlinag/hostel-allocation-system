<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student SignUp</title>
	 

	 <link rel="stylesheet" type="text/css" href="stylecss/studentSignupStyle.css">

	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="icon/hostelicon.ico">

   
</head>
<body>
		

        <h1 class="text-center" id="welcomeText">STUDENT SIGN UP FORM </h1>
        
        	<div class="container loginform">
            <form action="signupaction.php" method="Post">
              <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Student Number</h5>
              <input type="Phone" placeholder="Student Number" class="form-control tf" id="tfs" name="studno"
              value="<?php echo $_GET['stud']?>"><br>
              </div>
              </div>

             <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Create Passowrd</h5>
              <input type="Password" placeholder="Passowrd" class=" form-control tf" id="tfs" name="pw"><br>
               </div>
              </div>

             <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Confirm Password</h5>
              <input type="Password" placeholder="Confirm Passowrd" class=" form-control  tf" id="tfs" name="cpw"><br>
               </div>
              </div>

             <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Phone</h5>
              <input type="Phone" placeholder="Phone" class=" form-control tf" id="tfs" name="phno"><br>
               </div>
              </div>

              <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Email</h5>
              <input type="Email" placeholder="Email" class="form-control tf" id="tfs" name="email"><br>
              </div>
              </div>

              <div class="row">
              <div class="col-md-4">
              <input type="checkbox" name="accept" value="Accept">
              <span style="color: #e67e22; font-size: 1.2em; font-weight: bold;">I Accept</span>
              <a href="acceptrules.php" class="termscondi">Terms & Conditions of UCSM Hostel<br><br>
              </div>
              </div>

              <div class="buttons">
              <a href="index.php" class="bt">Cancel</a>
              <input type="submit" name="submit" value="submit" id="btSignUp">
             	<br>
              </div>
              </form>
            
         </div>   

</body>
</html>