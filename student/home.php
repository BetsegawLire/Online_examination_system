<?php

include("header.php");
 
// Initialize the session
// session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedinstudent"]) || $_SESSION["loggedinstudent"] !== true){
    header("location: login student.php");
    exit;
}
 

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'final');
 
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

$sql="select count(id) as id1 from studentacc where status='yes'";
$result=$conn->query($sql);
   $row=$result->fetch_assoc();
  
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        <!-- Bootstrap Core CSS -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- MetisMenu CSS -->
        <!-- <link href="css/metisMenu.min.css" rel="stylesheet"> -->

        <!-- DataTables CSS -->
        <!-- <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet"> -->

        <!-- DataTables Responsive CSS -->
        <!-- <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet"> -->

        <!-- Custom CSS -->
        <!-- <link href="css/startmin.css" rel="stylesheet"> -->

        <!-- Custom Fonts -->
        <!-- <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->


<html>
<body>
  <!-- <div style="margin-top:200px;"> -->
  <?php
// Connect to database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "final";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// Retrieve news details from database
$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

// Display news details on webpage
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div style='margin-bottom:100px;'></div>";
  echo "<div class='card m-5'><div class='card-header text-center'><h2>" . $row['title'] . "</h2></div>";
  echo "<div class='card-body text-center'><p>" . $row['description'] . "</p>";
  echo "<img src='../directorate/uploads/" . $row['image'] . "'></div></div>";
}

// Close the database connection
// mysqli_close($conn);
?>
  <!-- </div> -->
   


   
   
        <!-- <script src="js/jquery.min.js"></script> -->

        
        <!-- <script src="js/bootstrap.min.js"></script> -->
        
        
        <!-- <script src="js/metisMenu.min.js"></script> -->
        
        
        <!-- <script src="js/dataTables/jquery.dataTables.min.js"></script> -->
        <!-- <script src="js/dataTables/dataTables.bootstrap.min.js"></script> -->

        
        <!-- <script src="js/startmin.js"></script> -->
        <!-- <script src="js/jquery.min.js"></script> -->
        
        
        <!-- <script src="js/bootstrap.min.js"></script> -->

        
        <!-- <script src="js/metisMenu.min.js"></script> -->
        
        
        <!-- <script src="js/startmin.js"></script> -->
        

        
      </body>
        </html>