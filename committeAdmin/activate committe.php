<?php
 include("check.php");
?>
<?php

 include("db.php");

?>
<?php
if(isset($_GET['activateid'])){

$id=$_GET['activateid'];


  $sql="update committeeacc set  status='active' where id=$id";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A committee is activated! ');
        window.location='committe.php';
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


  $sql="update committeeacc set  status='inactive' where id=$id";
  if($conn->query($sql)==TRUE)
  { 
  ?>
        <script>
        alert('A committee is deactivated! ');
        window.location='committe.php';
      </script>
  <?php  

  }else
  {
    echo "Something Wrong " . $conn->error;
  }
}
?>

