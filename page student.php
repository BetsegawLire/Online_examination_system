

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
   <!-- <link rel="stylesheet" href="style.css"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="hulogoo.png" width="50" height="60" alt="">
    Hi, <b><?php echo htmlspecialchars($_SESSION["id"]); ?></b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a  href="#" class="nav-link" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
        <a  href="student/home.php" class="nav-link" style="color: white;"> News</a>
        </li>
        <li class="nav-item">
        <a  href="student/exam.php" class="nav-link" style="color: white;"> Exam</a>
              </li>
        <li class="nav-item">
        <a  href="student/result.php" class="nav-link" style="color: white;"> Result</a>
              </li>
              <li class="nav-item">
              <a  href="student/preference.php" class="nav-link" style="color: white;"> preferences</a> 
                         </li>
                         <li class="nav-item">
                         <a  href="student/placement.php" class="nav-link" style="color: white;"> Placement</a> 
                                     </li>
                                     <li class="nav-item">
                                     <a  href="p_student.php" class="nav-link" style="color: white;">change password</a>
                                                  </li>
        <li class="nav-item">
        <a  href="logout.php" class="nav-link" style="color: white;">sign out</a>

        </li>
        
        
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="wrapper">

  <header>
    <img src="hulogoo.png"  style="width:60px;height:50px;float: left;" >
     Hi, <b><?php echo htmlspecialchars($_SESSION["id"]); ?><?php echo htmlspecialchars($_SESSION["branch"]); ?></b>. Welcome !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a  href="student/home.php"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="#"> News</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="student/exam.php"> Exam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="student/result.php"> Result</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="student/preference.php"> preferences</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a  href="student/placement.php"> Placement</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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
</div> -->
 
<!-- body start -->
<div style="height:100vh">

</div>
<!-- body end -->

  <!-- footer start -->
  <div class="bg-dark" style="margin-top: 200px;">
    <div class="row row-cols-lg-3 p-5 mx-auto" style="width: 80%; border-bottom: 1px white solid;" >
      <div class="col text-center">
        <img src="hulogoo.png" class="mb-4" width="100" height="100" alt="">
        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quas.</p>
        <div class="row row-cols-lg-4" style="margin: 0; padding: 0;">
          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="facebook"></fa-icon>
          </div>

          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="twitter"></fa-icon>
          </div>

          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="youtube"></fa-icon>
          </div>

          <div class="col">

            <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="instagram"></fa-icon>
            
          </div>
        </div>

      </div>

      <div class="col text-center">
        <h1 class="text-light mb-4" style="font-family: 'Bree Serif', serif;">Useful Links</h1>
        <ul style="list-style:none" class="text-start">
          <li class="text-light mb-2 fs-6" style="font-family: 'Bree Serif', serif;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            Home
          </li>

          <li class="text-light mb-2 fs-6" style="font-family: 'Bree Serif', serif;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            News
          </li>

          <li class="text-light mb-2 fs-6" style="font-family: 'Bree Serif', serif;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            Contact Us
          </li>
        </ul>
      </div>

    

      <div class="col text-center">
        <h1 class="text-light mb-4" style="font-family: 'Bree Serif', serif;">Contact Info</h1>
        <h5 class="text-light fs-6 mb-2" style="font-family: 'Bree Serif', serif;">
          <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="address"></fa-icon>
          Haramaya, Ethiopia
        </h5>

        <h5 class="text-light fs-6 mb-2" style="font-family: 'Bree Serif', serif;">
          <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="email"></fa-icon>
          info@haramaya.com
        </h5>

        <h5 class="text-light fs-6 mb-2" style="font-family: 'Bree Serif', serif;">
          <fa-icon style="color: aliceblue; font-size: xx-large;" [icon]="phone"></fa-icon>
          +251 9________
        </h5>
      </div>
    </div>

    <h4 class="text-light p-3 text-center">&copy; 2023 All Rights Reserved | Haramaya University</h4>
  </div>
      <!-- footer end -->
</body>

</html>

