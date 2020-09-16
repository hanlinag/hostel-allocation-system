<?php
  include("../admin/addstuaction.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Student Information</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/addStudInfo.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center" id="welcomeText">Student Infomation Adding Form</h1>
        <form action="" method="post">
         <div class="container loginform" id="loginformm">
            

              <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Student ID</h5>
              <input type="Number" placeholder="Student ID" class="form-control tf" id="tfs studentid" name="studentid"><br>
              </div>

              <div class="col-md-4">
              <h5 class="tfLabel">Name</h5>
              <input type="text" placeholder="Name" class=" form-control tf" id="tfs name" name="name"><br>
               </div>

              <div class="col-md-4">
              <h5 class="tfLabel">Father Name</h5>
              <input type="text" placeholder="Father Name" class=" form-control  tf" id="tfs fathername" name="fathername"><br>
               </div>
              </div>

             <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Course Year</h5>
              <input type="text" placeholder="Course Year" class=" form-control tf" id="tfs courseyear" name="courseyear"><br>
               </div>

              <div class="col-md-4">
              <h5 class="tfLabel">Academic Year</h5>
              <input type="text" placeholder="Academic Year" class=" form-control tf" id="tfs academicyr" name="academicyr"><br>
               </div>

              <div class="col-md-4">
              <h5 class="tfLabel">Address</h5>
              <input type="text" placeholder="Address" class=" form-control tf" id="tfs address" name="address"><br>
               </div>
              </div>

              <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Phone Number</h5>
              <input type="Phone" placeholder="Phone Number" class=" form-control tf" id="tfs phno" name="phno"><br>
               </div>

              <div class="col-md-4">
              <h5 class="tfLabel">Email</h5>
              <input type="Email" placeholder="Email" class=" form-control tf" id="tfs email" name="email"><br>
               </div>

              <div class="col-md-4">
              <h5 class="tfLabel">Balance</h5>
              <input type="Number" placeholder="Balance" class=" form-control tf" id="tfs balance" name="balance"><br>
               </div>
              </div>

              <div class="buttons">
              <a href="../admin/profile.php" class="bt">Cancel</a>
              <input type="submit" name="submit" value="Add" id="btnAddd"><br><br>
              <span style="color:red"><?php echo $errormsg; ?></span>
              </div>

         </div>   
         </form>
</body>
</html>