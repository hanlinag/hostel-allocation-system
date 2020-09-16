<?php
  include("../admin/allocateroomaction.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Allocate Students to Rooms</title>
	 

	 <link rel="stylesheet" type="text/css" href="../stylecss/allocateroom.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
<div id="btBack">
<a href="../admin/profile.php" class="bt" >Back</a>
</div>
    <h1 class="text-center" id="welcometext">Allocate Students to Rooms</h1>
    <h4 class="text-center" id="welcometext">This hostel can accept only <span style="color: #e67e22"><?php echo $totalstud; ?></span> students.Just <span style="color: #e67e22" ><?php echo $totalava; ?></span> students are avilable.</h4>
     <div class="table-responsive">
         <table border="1" class="table table-bordered table-hover ">
          <thead>
             <tr>
                 <th>Room ID</th>
                 <th>Room Number</th>
                 <th>No of Students</th>
                 <th>Avilable</th>
                 <th>Allocation</th>
               </tr>

          </thead>
           <tbody>
              <?php
              include("confs/config.php");
              $results = mysqli_query($conn, "SELECT * from room");

              while ($row = mysqli_fetch_array($results)) {?>
                
                <tr class="tablerow">
                 <td><?php echo $row['roomid']?></td>
                 <td><?php echo $row['roomno']?></td>
                 <td><?php echo $row['noofstud']?></td>
                 <td><?php echo $row['avilable']?></td>
                 
                 <td >
                   <form action="" method="GET">
                   <input type="hidden" name="rid" value="<?php echo $row['roomid']; ?>" >
                  <input type="text" name="id" class ="tff" placeholder="student no">
                  <input type="submit" name="submit" value="Allocate" class="contact-bts">
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
         <span style="color: red"><?php echo $err; ?></span>
         </div>
</body>
</html>