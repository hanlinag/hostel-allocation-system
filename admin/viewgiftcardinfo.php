<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gift Card Info</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/viewgiftcardstyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center">Gift Card Information Details </h1>
     <div class="table-responsive">
         <table border="1" class="table table-bordered table-hover ">
          <thead>
             <tr>
                 <th>ID</th>
                 <th>Pin Number</th>
                 <th>Amount</th>
               </tr>
          </thead>
           <tbody>
              <?php
              include("confs/config.php");
              $results = mysqli_query($conn, "SELECT * from giftcard ");

              while ($row = mysqli_fetch_array($results)) {
              ?>
                
                <tr class="tablerow">
                 <td><?php echo $row['gid']?></td>
                 <td><?php echo $row['pinno']?></td>
                 <td><?php echo $row['amount']?></td>
                 
                 
               </tr>

               <?php
              }
              ?>
             
           </tbody>

           
           <tfoot>
               <td colspan="8"><small>&copy; Copyright 2017 UCSM SecondYear Student</small></td>
           </tfoot>

         </table>
         </div>
</body>
</html>