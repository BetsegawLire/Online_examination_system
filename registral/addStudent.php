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
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $sex=$_POST['sex'];
    $region=$_POST['region'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $uee=$_POST['uee'];
    $cgpa=$_POST['cgpa'];
    $coc=$_POST['coc'];
    $total=$_POST['total'];


    // $password=md5($_POST['password']);  
    

  
  $sql="insert into students( f_name, l_name, sex, region, branch, year, UEE, CGPA, COC, total)
    values('$f_name','$l_name','$sex', '$region', '$branch', $year, $uee, $cgpa, $coc, $total)";
  if($conn->query($sql)==TRUE)
  {   
    $sql = "select Id from students ORDER BY id DESC LIMIT 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["Id"];
    $password=md5(123456);  
    $id=$row["Id"];

    $sql="insert into studentaccount( ID, password)
    values($id, '$password')";
  $conn->query($sql);
    
  
  }
  ?>
  <!-- select *from getLastRecord ORDER BY id DESC LIMIT 1; -->

  
        <script>
        alert('A Student is added!');
        window.location='student.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
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
            <p align="center";>FILL THE FORM TO ADD NEW STUDENT </p>
      <!-- <div class="form-group">
      <label >Faculty</label>
    <input type="text" class="form-control" name="faculty" placeholder="Enter faculty" required>
    
  </div> -->
  <div>
    <label >First Name</label>
    <input type="text" class="form-control" name="f_name" placeholder="Enter firstname" required>
    
  </div>
  <div>
    <label >Last Name</label>
    <input type="text" class="form-control" name="l_name" placeholder="Enter lastname" required>
    
  </div>
  <div>
    <label >Sex</label>
    <input type="text" class="form-control" name="sex" placeholder="Enter sex" required>
    
  </div>
  <div>
    <label >Region</label>
    <input type="text" class="form-control" name="region" placeholder="Enter region" required>
    
  </div>
  <div>
    <label >Branch</label>
    <input type="text" class="form-control" name="branch" placeholder="Enter branch" required>
    
  </div>
  <div>
    <label >Year</label>
    <input type="number" class="form-control" name="year" placeholder="Enter year" required>
    
  </div>
  <div>
    <label >UEE</label>
    <input type="number" class="form-control" name="uee" placeholder="Enter uee" required>
    
  </div>
  <div>
    <label >CGPA</label>
    <input type="float" class="form-control" name="cgpa" placeholder="Enter cgpa">
    
  </div>
  <div>
    <label >COC</label>
    <input type="number" class="form-control" name="coc" placeholder="Enter coc">
    
  </div>
  <div>
    <label >Total</label>
    <input type="number" class="form-control" name="total" placeholder="Enter total">
    
  </div>
  
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
    </div>
               
    </from>          

</body>
</html>