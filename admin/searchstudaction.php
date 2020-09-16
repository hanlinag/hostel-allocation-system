<?php
  $conn = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
  /*
    localhost - it's location of the mysql server, usually localhost
    root - your username
    third is your password
    
    if connection fails it will stop loading the page and display an error
  */
  
  mysqli_select_db($conn, "hostel") or die(mysql_error());
  /* tutorial_search is the name of database we've created */
?>

<!DOCTYPE html>
<html >
<head>
  <title>Search results</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" type="text/css" href="../stylecss/viewstudentinfoStyle.css">

  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="../icon/hostelicon.ico">

</head>
<body>
 <h1 class="text-center"> Student Search Result </h1>
    

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
                 <th>Password</th>
               </tr>
          </thead>
           <tbody>
<?php
  $query = $_GET['query']; 
  // gets value sent over search form
  
  $min_length = 3;
  // you can set minimum length of the query if you want
  
  if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
    
    $query = htmlspecialchars($query); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    
    $query = mysqli_real_escape_string($conn, $query);
    // makes sure nobody uses SQL injection
    
    $raw_results = mysqli_query($conn, "SELECT * FROM student
      WHERE (`studno` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysqli_error());
      
    // * means that it selects all fields, you can also write: `id`, `title`, `text`
    // articles is the name of our table
    
    // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
    // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
    // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
    
    if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
      
      while($results = mysqli_fetch_array($raw_results)){
      // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
      
        //echo "<p><h3>".$results['name']."</h3>".$results['studno']."</p>";
        // posts results gotten from database(title and text) you can also show id ($results['id'])
       echo" <tr class='tablerow'>";
                echo" <td>".$results['studno']."</td>";
                echo" <td>".$results['name']."</td>";
                echo" <td>".$results['fathername']."</td>";
                echo" <td>".$results['courseyr']."</td>";
                echo" <td>".$results['academicyr']."</td>";
                echo" <td>".$results['address']."</td>";
                echo" <td>".$results['phno']."</td>";
                echo" <td>".$results['email']."</td>";
                echo" <td>".$results['balance']."</td>";
                echo" <td>".$results['password']."</td>";
                 /*<td><?php echo $row['name']?></td>
                 <td><?php echo $row['fathername']?></td>
                 <td><?php echo $row['courseyr']?></td>
                 <td><?php echo $row['academicyr']?></td>
                 <td><?php echo $row['address']?></td>
                 <td><?php echo $row['phno']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['balance']?></td>
                  <td><?php echo $row['password']?></td>*/
              echo " </tr>";

              
           echo"</tbody>";
      }
      
    }
    else{ // if there is no matching rows do following
      echo "No results";
    }
    
  }
  else{ // if query length is less than minimum
    echo "Minimum length is ".$min_length;
  }
?>
</body>
</html>