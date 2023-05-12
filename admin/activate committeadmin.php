<?php
 include("check.php");
?>
<?php

 include("db.php");

?>
<?php
if(isset($_GET['activateid'])){

$id=$_GET['activateid'];


  $sql="update committeadmin set  status='active' where id=$id";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A committee admin is activated! ');
        window.location='committeAdmin.php';
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


  $sql="update committeadmin set  status='inactive' where id=$id";
  if($conn->query($sql)==TRUE)
  { 
  ?>
        <script>
        alert('A committee admin is deactivated! ');
        window.location='committeAdmin.php';
      </script>
  <?php  

  }else
  {
    echo "Something Wrong " . $conn->error;
  }
}
?>

