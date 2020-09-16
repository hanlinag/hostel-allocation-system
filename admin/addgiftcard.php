<?php
  include('../admin/addgiftcardaction.php'); // Includes Login Script

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Gift Card</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/addgiftcardstyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center" id="welcomeText">Adding Gift Card Information</h1>
        <form action="" method="post">
         <div class="container loginform" id="loginformm">            

              <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Pin Number</h5>
              <input type="text" placeholder="Card Number" class=" form-control tf" id="tfs cardno" name="cardno"><br>
               </div>
               </div>

              <div class="row">
              <div class="col-md-4">
              <h5 class="tfLabel">Amount</h5>
              <input type="Number" placeholder="Amount (Kyats)" class=" form-control tf" id="tfs amount" name="amount"><br>
               </div>
               </div>
              

              <div class="buttons">
              <a href="../admin/profile.php" class="bt">Cancel</a>
              <input type="submit" name="submit" value="Add" id="btnAddd"><br><br>
              <span style="color: red;"><?php  echo $errorms; ?></span>
              </div>

         </div>   
         </form>
</body>
</html>