<?php
 include("check.php");

?>
<?php

 include("db.php");

?>
<?php



if(isset($_POST['btn']))
{

    $faculty=$_POST['faculty'];
    $coursename=$_POST['coursename'];
    $semester=$_POST['semester'];
    $branch=$_POST['branch'];
    $password=md5($_POST['password']);  
    

  
  $sql="insert into committeeacc( faculty,coursename,password,status,semester,branch)
    values('$faculty','$coursename','$password','active', $semester, '$branch')";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A freshman committe is added!');
        window.location='committe.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}

?>
 <html>
 <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">   
  <style>
   
  </style>
 </head><body>
    <div class="container my-5 border">

        <form method="post" enctype="multipart/form-data">
            <p align="center";>FILL THE FORM TO ADD NEW EXAM COMMITTEE </p>
      <div class="form-group">
      <label >Faculty</label>
    <input type="text" class="form-control" name="faculty" placeholder="Enter faculty" required>
    
  </div>
  <div>
    <label >Course Name</label>
    <input type="text" class="form-control" name="coursename" placeholder="Enter coursename" required>
    
  </div>
  <div>
    <label >Semester</label>
    <input type="number" class="form-control" name="semester" placeholder="Enter semester" required>
    
  </div>
  <div>
    <label >Branch</label>
    <input type="text" class="form-control" name="branch" placeholder="Enter branch" required>
    
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" name="password" placeholder=" Enter Password" required>
  </div>
  
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
    </div>
               
    </from>          

</body>
</html>