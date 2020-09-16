<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Roll Call</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/attendence.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center" id="welcometext">Attendence of Students(Roll Call)</h1>
    <div class="Stunavigation ">
    <a href="../admin/rollcallreset.php" id="btnLogout">Reset</a>
    </div>
     <div class="table-responsive">
         <table border="1" class="table table-bordered table-hover ">
          <thead>
             <tr>
                 <th>Student No</th>
                 <th>Student Name</th>
                 <th>Course Year</th>e
                 <th>Room No</th>
                 <th>Present</th>
               </tr>
          </thead>
           <tbody>
              <?php
              include("confs/config.php");
              $results = mysqli_query($conn, "SELECT s.studno, s.name, s.courseyr, r.roomno from student s , allocation a, room r where proposted ='1' AND stay='1' AND s.studno = a.studno AND a.roomid = r.roomid order by r.roomno");

              while ($row = mysqli_fetch_array($results)) {?>
                
                <tr class="table-tr">
                 <td><?php echo $row['studno']?></td>
                 <td><?php echo $row['name']?></td>
                 <td><?php echo $row['courseyr']?></td>
                 <td><?php echo $row['roomno']?></td>
             
                 <td >
                   <form action="present.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $row['studno']; ?>">
                  <input type="submit" name="submit" value="Present" class="contact-bts">
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