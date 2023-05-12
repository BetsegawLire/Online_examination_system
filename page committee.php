

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login committee.php");
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
     Hi, <b><?php echo htmlspecialchars($_SESSION["coursename"]); ?></b> exam committee Welcome !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a  href="#"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="#">View news</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="committee/addquestion.php">Add questions</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="committee/managequestion.php">Manage questions</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
            <a  href="logout.php">sign out</a>
     </header>

  <nav>
         <a href="#"> Home</a><br><br>
         <a  href="questions/upload.php">send question</a><br><br>
        <a href="p_committee.php"> change password</a><br><br>
   
  </nav>

  <section>this is section 

  </section>

  <footer>this is footer
  </footer>
</div>
 
</body>

</html>
