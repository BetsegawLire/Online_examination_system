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
    if (!preg_match("/^[a-zA-Z]+$/", $f_name)) {
      // if the username contains anything other than letters, display an error message
      ?><script>
      alert('Error: Firstname can only contain letters.');
      // window.location='student.php';
    </script>
    <?php
      // echo "Error: Username can only contain letters.";
    } else {
      // if the username is valid, continue with the rest of your code
      // ...
      $l_name=$_POST['l_name'];
      if (!preg_match("/^[a-zA-Z]+$/", $l_name)) {
        // if the username contains anything other than letters, display an error message
        ?><script>
        alert('Error: Lastname can only contain letters.');
        // window.location='student.php';
      </script>
      <?php
        // echo "Error: Username can only contain letters.";
      } else {
    $sex=$_POST['sex'];
    $region=$_POST['region'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $uee=$_POST['uee'];
    $cgpa=$_POST['cgpa'];
    // $coc=$_POST['coc'];
    // $total=$_POST['total'];

    $cgpa = $_POST['cgpa']; // assuming the CGPA value is submitted via a form

// Validate CGPA input
if (filter_var($cgpa, FILTER_VALIDATE_FLOAT) === false) {
  // CGPA input is not a valid float
  // echo "Error: CGPA must be a valid number.";
  ?>
  
  <script>
        alert('Error: CGPA must be a valid number.!');
        // window.location='student.php';
      </script>
      <?php
} else {
  // CGPA input is valid
  // Proceed with inserting the student information into the database




    // $password=md5($_POST['password']);  
    

  
  $sql="insert into students( f_name, l_name, sex, region, branch, year, UEE, CGPA)
    values('$f_name','$l_name','$sex', '$region', '$branch', $year, $uee, $cgpa)";
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
    <!-- <label >Sex</label> -->
    <!-- <input type="text" class="form-control" name="sex" placeholder="Enter sex" required> -->
    <label for="sex">Sex:</label>
  <select name="sex" id="sex" class="form-control" required>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select>
  </div>
  <div>
    <!-- <label >Region</label>
    <input type="text" class="form-control" name="region" placeholder="Enter region" required> -->
    <label for="region">Region:</label>
  <select name="region" id="region" class="form-control" required>
    <option value="Oromia">Oromia</option>
    <option value="Amhara">Amhara</option>
    <option value="Tigray">Tigray</option>
    <option value="Afar">Afar</option>
    <option value="Benishangul-Gumuz">Benishangul-Gumuz</option>
    <option value="Gambela">Gambela</option>
    <option value="Harari">Harari</option>
    <option value="Somali">Somali</option>
    <option value="SNNPR">SNNPR</option>
    <option value="Sidama">Sidama</option>
    <option value="South Western">South Western</option>

  </select>
    
  </div>
  <div>
  <label for="branch">Branch:</label>
  <select name="branch" id="branch" class="form-control" required>
    <option value="natural">Natural</option>
    <option value="social">Social</option>
    <!-- <option value="other">Other</option> -->
  </select>
    
  </div>
  <div>
    <!-- <label >Year</label>
    <input type="number" class="form-control" name="year" placeholder="Enter year" required> -->
    <label for="year">Year:</label>
  
  <input type="number" class="form-control" id="year" name="year" placeholder="Enter uee" required>

    
  </div>
  <div>
    <label >UEE</label>
    <input type="number" class="form-control" name="uee" placeholder="Enter year" required>
    
  </div>
  <div>
    <label >CGPA</label>
    <input type="float" class="form-control" name="cgpa" placeholder="Enter cgpa">
    
  </div>
  <!-- <div>
    <label >COC</label>
    <input type="number" class="form-control" name="coc" placeholder="Enter coc">
    
  </div>
  <div>
    <label >Total</label>
    <input type="number" class="form-control" name="total" placeholder="Enter total">
    
  </div> -->
  
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>
    </div>
               
    </from>          

</body>
</html>