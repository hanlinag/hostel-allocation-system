<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accept/Decline Student</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/acceptstud.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center" id="welcometext">Accept/Decline Student</h1>
     <div class="table-responsive">
         <table border="1" class="table table-bordered table-hover ">
          <thead>
             <tr>
                 <th>Student No</th>
                 <th>Student Name</th>
                 <th>Father Name</th>
                 <th>Course Year</th>
                 <th>Academic Year</th>
                 <th>Address</th>
                 <th>Phone No</th>
                 <th>Email</th>
                 <th>Password</th>
                 <th>Accept</th>
                 <th>Decline</th>
               </tr>
          </thead>
           <tbody>
              <?php
              include("confs/config.php");
              $results = mysqli_query($conn, "SELECT studno, name, fathername , courseyr, academicyr, address , phno , email ,password from student where proposted ='1' AND stay='0'");

              while ($row = mysqli_fetch_array($results)) {?>
                
                <tr class="tablerow">
                 <td><?php echo $row['studno']?></td>
                 <td><?php echo $row['name']?></td>
                 <td><?php echo $row['fathername']?></td>
                 <td><?php echo $row['courseyr']?></td>
                 <td><?php echo $row['academicyr']?></td>
                 <td><?php echo $row['address']?></td>
                 <td><?php echo $row['phno']?></td>
                 <td><?php echo $row['email']?></td>
                 <td><?php echo $row['password']?></td>
                 <td >
                   <form action="accept.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $row['studno']; ?>">
                  <input type="submit" name="submit" value="Accept" class="contact-bts">
                  </form>
                  </td>
                  <td> <form action="decline.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $row['studno']; ?>">
                  <input type="submit" name="submit" value="Decline" class="contact-bts">
                  </form></td>
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