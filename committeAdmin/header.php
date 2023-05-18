

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
    Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a  href="../page committeadmin.php" class="nav-link" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
        <a  href="committe.php" class="nav-link" style="color: white;">Manage Committe</a>

        

        </li>
        <li class="nav-item">

        

        <a  href="managequestions.php" class="nav-link" style="color: white;">Manage Questions</a>
        </li>
        <li class="nav-item">
        <a href="../p_committeadmin.php" class="nav-link" style="color: white;"> Change password</a>
        </li>
        <li class="nav-item">
        <a  href="../logout.php" class="nav-link" style="color: white;">sign out</a>

        </li>
        
        
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="header">
  <?php echo htmlspecialchars($_SESSION["username"]); ?>
  <div class="header-right">
     <a  href="../page committeadmin.php">home</a>
     <a href="committe.php">Manage Committe</a>
     <a href="managequestions.php">Manage Questions</a>

      

 
    <a href="../logout.php">logout</a>
  </div>
</div>
s -->

</body>
</html>
