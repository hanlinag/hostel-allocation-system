<?php
  $totalstud='';
  $totalava ='';
$conn = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

  
    mysqli_select_db($conn, "hostel") or die(mysql_error());
    $result=mysqli_query($conn,"SELECT * FROM room;");
  $totalstud = 0;
  $totalava = 0;

  while ($ro = mysqli_fetch_array($result)) {
    $totalstud += $ro['noofstud'];
    $totalava += $ro['avilable'];
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Room Details</title>
   

   <link rel="stylesheet" type="text/css" href="../stylecss/viewroom.css">

  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

   
</head>
<body>
    <h1 class="text-center">Rooms Details </h1>
     <h4 class="text-center" id="welcometext">This hostel can accept only <span style="color: #e67e22"><?php echo $totalstud; ?></span> students.Just <span style="color: #e67e22" ><?php echo $totalava; ?></span> students are avilable.</h4>
     <div class="table-responsive">
         <table border="1" class="table table-bordered table-hover ">
          <thead>
             <tr>
                 <th>Room ID</th>
                 <th>Room Number</th>
                 <th>No of Students</th>
                 <th>Avalible Students</th>
                 <th>Delete Room</th>
                 
               </tr>
          </thead>
           <tbody>
              <?php
              include("confs/config.php");
              $results = mysqli_query($conn, "SELECT * from room ");

              while ($row = mysqli_fetch_array($results)) {
              ?>
                
                <tr class="tablerow">
                 <td><?php echo $row['roomid']?></td>
                 <td><?php echo $row['roomno']?></td>
                 <td><?php echo $row['noofstud']?></td>
                  <td><?php echo $row['avilable']?></td>
                  <td> <form action="deleteroom.php" method="GET">
                  <input type="hidden" name="id" value="<?php echo $row['roomid']; ?>">
                  <input type="submit" name="submit" value="Delete" class="deletebts">
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