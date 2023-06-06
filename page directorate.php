

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedindirectorate"]) || $_SESSION["loggedindirectorate"] !== true){
    header("location: login directorate.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="style.css"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
  .background-image {
background-image: url("./images/Teaching.png");
background-size: cover;
background-position: center;
height: 500px;
}

.content {
background-color: #fff;
padding: 50px;
margin-top: -100px;
border-radius: 10px;
box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

h1 {
font-size: 36px;
margin-bottom: 20px}

.manage-accounts-button {
background-color: #007bff;
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 5px;
font-size: 18px;
margin-bottom: 20px;
cursor: pointer;
}

p {
font-size: 18px;
line-height: 1.5;
margin-bottom: 20px;
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="hulogoo.png" width="50" height="60" alt="">
    Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
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
        <a  href="directorate/uploadnews.php" class="nav-link" style="color: white;"> Upload news</a>
        </li>
        <li class="nav-item">
        <a  href="directorate/managexam.php" class="nav-link" style="color: white;"> Manage exam</a>
        </li>
        <li class="nav-item">
        <a  href="directorate/manageplacement.php" class="nav-link" style="color: white;">Manage placement</a>
        </li>
        <li class="nav-item">
        <a  href="directorate/place.php" class="nav-link" style="color: white;">place</a> 
        </li>
        <li class="nav-item">
        <a  href="directorate/report.php" class="nav-link" style="color: white;">Report</a> 
        </li>
        <li class="nav-item">
        <a href="p_directorate.php" class="nav-link" style="color: white;"> Change password</a>
        </li>
        <li class="nav-item">
        <a  href="logout.php" class="nav-link" style="color: white;">sign out</a>

        </li>
        
        
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="wrapper">

  <header><img src="hulogoo.png"  style="width:60px;height:50px;float: left;" >
  Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?>!</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="#"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="directorate/uploadnews.php"> Upload news</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
             <a  href="directorate/viewquestion.php"> Manage question</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a  href="directorate/managexam.php"> Manage exam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="directorate/report.php">Report</a> 
            <a  href="directorate/manageplacement.php">Manage placement</a> 
            <a  href="directorate/place.php">place</a> 

           <a  href="logout.php">sign out</a>
     </header>

  <nav>
        <a href="#"> Home</a><br><br>
        <a href="#"> Upload news</a><br><br>
        <a href="#">Report</a><br><br>
        <a href="p_directorate.php">Change password</a><br><br>   
  </nav>

  <section>this is section 

  </section>

  <footer>this is footer
  </footer>
</div> -->

 
<!-- body start -->
<div style="height:100vh">
<div class="container">
<div class="background-image"></div>
<div class="content">
<h1>Welcome to the Freshman Directorate Portal</h1>
<!-- <button class="manage-accounts-button">Manage Accounts</button> -->

<p>As a Freshman Directorate, you have the ability to post news, schedule exam time, place students and generate report With just a few clicks.</p>
<!-- <button class="manage-accounts-button">Manage Accounts</button> -->
<a  href="directorate/uploadnews.php" class="manage-accounts-button" > News</a>
<a  href="directorate/managexam.php" class="manage-accounts-button"> Exam</a>
<a  href="directorate/place.php" class="manage-accounts-button" > Place</a> 
<a  href="directorate/report.php" class="manage-accounts-button" > Report</a> 

<p>Simply click the "News" button above to get started. You'll be prompted to to try and submit the news.</p>
<p>Simply click the "Exam" button above to get started. You'll be able to view the schedule of the exam.</p>
<p>Simply click the "Place" button above to get started. You'll be prompted to place students.</p>
<p>Simply click the "Report" button above to get started. You'll be able to view the report of students placement.</p>

<p>Thank you for your hard work and dedication to our online student examination system. If you have any questions or concerns, please don't hesitate to contact us.</p>
</div>
</div>
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

