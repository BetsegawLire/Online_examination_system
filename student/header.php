 <?php
  
 include("check.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #3f024f;!important;;
  padding: 20px 10px;
  color: white;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img src="../hulogoo.png" width="50" height="60" alt="">
    Hi, <b><?php echo htmlspecialchars($_SESSION["id"]); ?></b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a  href="../page student.php" class="nav-link" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
        <a  href="home.php" class="nav-link" style="color: white;"> News</a>
        </li>
        <li class="nav-item">
        <a  href="exam.php" class="nav-link" style="color: white;"> Exam</a>
              </li>
        <li class="nav-item">
        <a  href="result.php" class="nav-link" style="color: white;"> Result</a>
              </li>
              <li class="nav-item">
              <a  href="preference.php" class="nav-link" style="color: white;"> preferences</a> 
                         </li>
                         <li class="nav-item">
                         <a  href="placement.php" class="nav-link" style="color: white;"> Placement</a> 
                                     </li>
                                     <li class="nav-item">
                                     <a  href="../p_student.php" class="nav-link" style="color: white;">change password</a>
                                                  </li>
        <li class="nav-item">
        <a  href="../logout.php" class="nav-link" style="color: white;">sign out</a>

        </li>
        
        
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="header">
 <?php echo htmlspecialchars($_SESSION["uid"]); ?></a>
  <div class="header-right">
    <a  href="../page student.php">Home</a>
  <a href="exam.php">Exam</a>
   <a href="result.php">Result</a>
    <a href="preference.php">preferences</a>
           <a  href="placement.php"> Placement</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="../logout.php">logout</a>
  </div>
</div> -->


</body>
</html>
