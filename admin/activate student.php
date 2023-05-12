<?php
 include("check.php");

?>
<?php

 include("db.php");

?>

<?php
//activate for single student
if(isset($_GET['activateid'])){
$id=$_GET['activateid'];



  $sql="update  students set  status='active' where Id=$id";
  if($conn->query($sql)==TRUE)
  {   ?>
        <script>
        alert('A student is activated! ');
        window.location='student.php';
      </script>
  <?php
  
  }else
  {
    echo "Something Wrong " . $conn->error;
  }
}
//deactivate for single student
else if(isset($_GET['deactivateid'])){

$id=$_GET['deactivateid'];
$stat="inactive";
$id=$_GET['deactivateid'];
  $sql="update  students set  status='$stat' where Id=$id";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A student is deactivated! ');
        window.location='student.php';
      </script>
  <?php

  }else
  {
    echo "Something Wrong " . $conn->error;
  }
 
}



//activate all natural
else if(isset($_GET['naturalactive'])){

  $sql="update  students set  status='active' where branch='natural'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('all natural student are activated! ');
        window.location='student.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong " . $conn->error;
  }
 
}


//deactivate for all natural stud

else if(isset($_GET['naturaldeactive'])){

  $sql="update  students set  status='inactive' where branch='natural'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('All natural students are deactivated! ');
        window.location='student.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong " . $conn->error;
  }
 
}
//activate all social student

else if(isset($_GET['socialactive'])){


  $sql="update  students set  status='active' where branch='social'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('All social students are activated! ');
        window.location='student.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong " . $conn->error;
  }
 
}



//deactivate for social student

else if(isset($_GET['socialdeactive'])){

  $sql="update  students set  status='inactive' where branch='social'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('all social students are deactivated! ');
        window.location='student.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong " . $conn->error;
  }
 
}


?>