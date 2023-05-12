<?php

 
include("check.php");

include("db.php");
 
?>


<?php


//activate all question
if(isset($_GET['questionactive'])){

   $sql="update question set  status='active' where branch='natural' or branch='both'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('All questions are activated! ');
        window.location='viewquestion.php';
      </script>
  <?php
  }
  else
  {
    echo "Something Wrong " . $conn->error;
  }
 
}


//deactivate all question

else if(isset($_GET['questiondeactive'])){

  $sql="update question set  status='inactive' where branch='natural' or branch='both'";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('All questions are deactivated! ');
        window.location='viewquestion.php';
      </script>
  <?php
  }
  else
  {
    echo "Something Wrong " . $conn->error;
  }
 
}



//remove all question

else if(isset($_GET['questionremove'])){


   //question should be copied to other database 
 // $sql="update question set  status='inactive' where branch='natural' or branch='both'";
  //if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('All questions are deactivated! ');
        window.location='viewquestion.php';
      </script>
  <?php
  }
  // else
  // {
  //   echo "Something Wrong " . $conn->error;
  // }
 
}

?>