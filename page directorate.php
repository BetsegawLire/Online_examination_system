

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
   <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">

  <header><img src="hulogoo.png"  style="width:60px;height:50px;float: left;" >
  Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?>!</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="#"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="#"> Upload news</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
             <a  href="directorate/viewquestion.php"> Manage question</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a  href="directorate/managexam.php"> Manage exam</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="directorate/report.php">Report</a> 
            <a  href="directorate/manageplacement.php">Manage placement</a> 
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
</div>
 
</body>

</html>

