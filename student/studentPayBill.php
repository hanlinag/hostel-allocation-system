<?php 
  include("../student/studentPayBillAction.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/studentPayBillStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
		

        <h1 class="text-center" id="welcomeText">Hostel Fee Monthly Payment</h1>
         
         <form action="" method="Post">
            <div class=" container">

            <div class="row">
            <div class="col-md-8">
            <h5 class="labelText" id="tfLabel">Your Current Balance</h5>
            <h3 class="labelText" id="tfLabel1"><?php echo $currentbalance; ?> Kyats</h3>
            </div>

            <div class="col-md-8>
            <h5 class="labelText" id="tfLabel">Top Up</h5>
            <input type="text" placeholder="Card Pin Number" class=" form-control " id="tfs" name="cardno"><br>
            <input type="submit" name="TopUp" id="btTopUp" value="Top Up">
            <span style="color: red"><?php echo $errormsgtopup; ?></span>
            </div>

            </div>

           
            <div class="row">
            <div class="col-md-6">
            <h5 class="labelText" id="tfLabel">Pay Amount</h5>
              <input type="Number" placeholder="Amount" class=" form-control " id="tfs" name="payamount"><br>
            </div>
            </div>

            
            <div class="row">
            <div class="col-md-6">
            <a href="studentprofile.php" class="btCancel" id="btCancel">Cancel</a>
            <input type="submit" name="submit" id="btPay" value="Pay">
            <br><br>
            <span style="color: red"><?php echo $errormg; ?></span>
            <br>
            </div>
            </div>
            </div>
            </form>
          


</body>
</html>