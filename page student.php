

<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedinstudent"]) || $_SESSION["loggedinstudent"] !== true){
    header("location: login student.php");
    exit;
}
?>


<?php

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
    die("ERROR: Could not connect. " . $mysqli->connect_error);

}

if(!isset($_SESSION['uid'])){
  echo "uid is not set";
}


else {


// $sql="SELECT * FROM studentacc WHERE uid='".$_SESSION["uid"]."' ";
// $result=$conn->query($sql);

// $row = $result->fetch_assoc();
 
//     $_SESSION['branch']=$row['branch'];
   
   
//       if(!isset($_SESSION['branch'])){
//         echo "not   cccset ";
//       }

    
  }
?>


<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">

  <header>
    <img src="hulogoo.png"  style="width:60px;height:50px;float: left;" >
     Hi, <b><?php echo htmlspecialchars($_SESSION["uid"]); ?><?php echo htmlspecialchars($_SESSION["branch"]); ?></b>. Welcome !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a  href="student/home.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="#"> News</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="student/exam.php"> Exam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="student/result.php"> Result</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="student/preference.php"> Placement</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="logout.php">sign out</a>
     </header>

  <nav>
            <a  href="student/home.php"> Home</a> <br><br>
            <a  href="#"> News</a> <br><br>
           <a  href="#"> Exam</a> <br><br>
           <a  href="student/result.php"> Result</a> <br><br>
           <a  href="#"> Placement</a> <br><br>
           <a  href="p_student.php">change password</a><br><br>
  </nav>

  <section>this is section 

  </section>

  <footer>this is footer
  </footer>
</div>
 
</body>

</html>

