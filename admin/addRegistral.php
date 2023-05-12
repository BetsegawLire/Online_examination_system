<?php
 include("check.php");

?>
<?php

 include("db.php");

?>
<?php



if(isset($_POST['btn']))
{

    // $faculty=$_POST['faculty'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);  
    

  
  $sql="insert into registralacc( username, password)
    values('$username','$password')";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('A Regisral is added!');
        window.location='registral.php';
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
            <p align="center";>FILL THE FORM TO ADD NEW REGISTRAL </p>
      <!-- <div class="form-group">
      <label >Faculty</label>
    <input type="text" class="form-control" name="faculty" placeholder="Enter faculty" required>
    
  </div> -->
  <div>
    <label >User Name</label>
    <input type="text" class="form-control" name="username" placeholder="Enter username" required>
    
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