<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Student Information</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/viewstudentinfoStyle.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center">Stayed Student Information Details </h1>
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
                 <th>Balance</th>
                 <th>Room No</th>
                 <th>Attendence</th>
                 <th>Password</th>
                 <th>Delete</th>
               </tr>
          </thead>
           <tbody>
              <?php
              include("confs/config.php");
              $results = mysqli_query($conn, "SELECT distinct s.studno, s.name, s.fathername , s.courseyr, s.academicyr, s.address , s.phno , s.email, s.balance , ro.roomno ,r.count, s.password from student s,rollcall r , allocation a, room ro where s.stay ='1' AND r.studno = s.studno AND s.studno = a.studno AND a.roomid = ro.roomid order by s.studno ");

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
                  <td><?php echo $row['balance']?></td>
                  <td><?php echo $row['roomno']?></td>
                  <td><?php echo $row['count']?> </td>
                  <td><?php echo $row['password']?></td>
                  <td>
                     <form action="deletestud.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $row['studno']; ?>">
                  <input type="submit" name="submit" value="Delete" class="contact-bts">
                  </form>
                  </td>
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