<?php
  include('../student/studentUpdateInfoAction.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Information</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/studentUpdateInfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>

		 <h1 class="text-center">Update Student Information</h1>
        
            <form action="" method="Post">
            <div class="container">
            
            <div class="row">
            <div class="col-md-8">
            <h5 class="labelText">Email</h5>
            <input type="Email" placeholder="Email" class=" form-control " id="tfs" name="email"><br>
            </div>
            </div>

            <div class="row">
             <div class="col-md-8">
              <h5 class="labelText">Phone Number</h5>
              <input type="Phone" placeholder="Phone" class="form-control " id="tfs" name="phno"><br>
              </div>
              </div>

             
            
            <div class="row">
            <div class="col-md-8">
            <a href="studentprofile.php" class="btCancel" id="btCancel">Cancel</a>
            <input type="submit" name="submit" id="btChange" value="Change">
            <br><br>
            <span style="color: red"><?php echo $eormsg; ?></span>
            <br>
            </div>
            </div>
           
         </div> 
          </form>

</body>
</html>