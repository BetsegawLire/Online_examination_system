<?php
 include("check.php");
?>
<?php

 include("db.php");

?>
<?php
if(isset($_GET['activateid'])){

$id=$_GET['activateid'];


  $sql="update question set  status='active' where id=$id";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A question is activated! ');
        window.location='managequestions.php';
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


  $sql="update question set  status='inactive' where id=$id";
  if($conn->query($sql)==TRUE)
  { 
  ?>
        <script>
        alert('A question is deactivated! ');
        window.location='managequestions.php';
      </script>
  <?php  

  }else
  {
    echo "Something Wrong " . $conn->error;
  }
}
?>

