<?php
include('../admin/addroomaction.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Rooms</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/addroomStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center" id="welcomeText">Add Room Information</h1>
        <form action="" method="post">
         <div class="container loginform" id="loginformm">
            

              <div class="row">
              <div class="col-md-6">
              <h5 class="tfLabel">Room Number</h5>
              <input type="text" placeholder="Room Number" class="form-control tf" id="tfs roomno" name="roomno"><br>
              </div>
              </div>

              

               <div class="row">
              <div class="col-md-6">
              <h5 class="tfLabel">Number of Students</h5>
              <input type="Number" placeholder="Number of Students" class=" form-control  tf" id="tfs noofstud" name="noofstud"><br>
               </div>
              </div>

              <div class="buttons">
              <a href="../admin/profile.php" class="bt">Cancel</a>
              <button type="submit" name="submit" value="Add" id="btAdd" >Add</button>
              <br><br>
              <span style="color: red;"><?php echo $err; ?></span>
              </div>

         </div>   
         
         </form>
</body>
</html>