<?php

 
include("check.php");

include("connect.php");


  
?>

<?php

$username=$_SESSION["username"];

$sql1="SELECT * FROM studentacc WHERE coursename='$username'";
$result=$conn->query($sql1);

$row = $result->fetch_assoc();
//$result=$conn->query($sql);
 
    $_SESSION['branch']=$row['branch'];
    $status=$row['status'];

  if($status!=='inactive'){
    header("location: instruction.php");
  }

else{
   ?>
        <script>
        alert('you can not take exam !');
        window.location='page student.php';
      </script>
  <?php
}
}

?>

<html>
<head>
	</head>
	<body>

     this is instruction

	</body>
	</html>
