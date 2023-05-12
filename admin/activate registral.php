<?php
 include("check.php");
?>
<?php

 include("db.php");

?>
<?php
if(isset($_GET['activateid'])){

$id=$_GET['activateid'];


  $sql="update registralacc set  status='active' where username='$id'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A registral is activated! ');
        window.location='registral.php';
      </script>
  <?php
       
  }else
  {
    echo "Something Wrong " . $conn->error;
  }
}

//deactivate a committee
else if(isset($_GET['deactivateid'])){
  $id=$_GET['deactivateid'];


  $sql="update registralacc set  status='inactive' where username='$id'";
  if($conn->query($sql)==TRUE)
  { 
  ?>
        <script>
        alert('A registral is deactivated! ');
        window.location='registral.php';
      </script>
  <?php  

  }else
  {
    echo "Something Wrong " . $conn->error;
  }
}
?>

