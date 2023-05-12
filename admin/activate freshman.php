<?php
 include("check.php");
?>
<?php

 include("db.php");

?>
<?php
if(isset($_GET['activateid'])){

$id=$_GET['activateid'];


  $sql="update directorateacc set  status='active' where id='$id'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A freshman directorate is activated! ');
        window.location='freshman.php';
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


  $sql="update directorateacc set  status='inactive' where id='$id'";
  if($conn->query($sql)==TRUE)
  { 
  ?>
        <script>
        alert('A freshman directorate is deactivated! ');
        window.location='freshman.php';
      </script>
  <?php  

  }else
  {
    echo "Something Wrong " . $conn->error;
  }
}
?>

