<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Fee Detail</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/viewfeeStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center">Fees Details </h1>
     <div class="table-responsive">
         <table border="1" class="table table-bordered table-hover ">
          <thead>
             <tr>
                 <th>Student Number</th>
                 <th>Student Name</th>
                 <th>Payment Amount</th>
                 <th>Date of Payment</th>
               </tr>
          </thead>
           <tbody>
              <?php
              include("confs/config.php");
              $results = mysqli_query($conn, "SELECT student.studno, student.name, fee.amount, fee.date from student , fee where student.studno = fee.studno");

              while ($row = mysqli_fetch_array($results)) {
              ?>
                
                <tr class="tablerow">
                 <td><?php echo $row['studno']?></td>
                 <td><?php echo $row['name']?></td>
                 <td><?php echo $row['amount']?></td>
                 <td><?php echo $row['date']?></td>
                 
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