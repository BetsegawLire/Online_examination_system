

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedincommitteadmin"]) || $_SESSION["loggedincommitteadmin"] !== true){
    header("location: login committeadmin.php");
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
     Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a  href="#"> Home</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="committeAdmin/committe.php">Manage Committe</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a  href="committeAdmin/managequestions.php">Manage Questions</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         <a  href="logout.php">sign out</a>
     </header>

  <nav>
        <a href="#"> Home</a><br><br>
        
        <a href="p_admin.php"> Change password</a><br><br>
  
  </nav>

  <section>this is section 

  </section>

  <footer>this is footer
  </footer>
  
</div>
 
</body>

</html>

