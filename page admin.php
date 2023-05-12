

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedinadmin"]) || $_SESSION["loggedinadmin"] !== true){
    header("location: login admin.php");
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
            <a  href="questions/downloads.php">Download files</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="dropdown">
            <a  href="#" class="dropdown-btn">manage account</a> 
                <div class="dropdown-content">
                <a href="admin/student.php"> for students</a>
                <a href="admin/committeAdmin.php"> for exam committee admin</a>
                <a href="admin/registral.php"> for Registral</a>
                <a href="admin/freshman.php"> for freshman</a>

            
              </div>
          </div>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#"> View feedbacks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
