 <?php
  
 include("check.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
</style>
</head>
<body>

<div class="header">
 <?php echo htmlspecialchars($_SESSION["uid"]); ?></a>
  <div class="header-right">
    <a  href="../page student.php">Home</a>
  <a href="exam.php">Exam</a>
   <a href="result.php">Result</a>
    <a href="preference.php">Placement</a>
    <a href="../logout.php">logout</a>
  </div>
</div>


</body>
</html>
