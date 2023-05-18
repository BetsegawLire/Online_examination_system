<?php
include("header.php");
include("connect.php");



   if(isset($_POST['btn'])) {

  $choice_1 = $_POST['choice_1'];
$choice_2 = $_POST['choice_2'];
$choice_3 = $_POST['choice_3'];
$choice_4 = $_POST['choice_4'];
$choice_5 = $_POST['choice_5'];

      $id=$_SESSION['id'];
      $q="UPDATE preference set first_choice='$choice_1', second_choice='$choice_2', third_choice='$choice_3', forth_choice='$choice_4', fifth_choice='$choice_5'";
      if ($conn->query($q) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
    //   $r = $conn->query($q);
    //   if($r){
    //      ?>
    //     <script>
    //     alert('you changed your preference');
    //     window.location='preference.php';
    //   </script>
    // <?php

    //   } else {
    //     ?>
    //     <script>
    //     alert('unable to change your preference');
    //     window.location='preference.php';
    //   </script>
    //   <?php
    //   } 
}
?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>preference!</title>
<style>
  .container {
   max-width: 50% !important;/*Set your own width %; */
}
</style>


  </head>
  <body>


    <div class="container my-5 border">


      change your preference
      <form action="changepreference.php" method="post">

           <?php

            ?>
            
 first choice
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Options</label>
  </div>
  <select class="custom-select"  name="choice_1" required>
     <option value="">Choose...</option>
 <option value="Engineering">Engineering</option>
    <option value="Medicine">Medicine</option>
    <option value="Pharmacy">Pharmacy</option>
    <option value="other">other natural science</option>
    <option value="veternary">veternary</option>
  </select>
</div>
   second question
   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Options</label>
  </div>
  <select class="custom-select" name="choice_2" required>
    <option value="">Choose...</option>
    <option value="Engineering">Engineering</option>
    <option value="Medicine">Medicine</option>
    <option value="Pharmacy">Pharmacy</option>
    <option value="other">other natural science</option>
    <option value="veternary">veternary</option>
  </select>
</div>
   third choice
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Options</label>
  </div>
  <select class="custom-select" name="choice_3" required>
    <option value="">Choose...</option>
   <option value="Engineering">Engineering</option>
    <option value="Medicine">Medicine</option>
    <option value="Pharmacy">Pharmacy</option>
    <option value="other">other natural science</option>
    <option value="veternary">veternary</option>
  </select>
</div>
   forth choice
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Options</label>
  </div>
  <select class="custom-select" name="choice_4" required>
     <option value="">Choose...</option>
   <option value="Engineering">Engineering</option>
    <option value="Medicine">Medicine</option>
    <option value="Pharmacy">Pharmacy</option>
    <option value="other">other natural science</option>
    <option value="veternary">veternary</option>
  </select>
</div>


 fifth choice
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Options</label>
  </div>
  <select class="custom-select" name="choice_5" required>
     <option value="">Choose...</option>
   <option value="Engineering">Engineering</option>
    <option value="Medicine">Medicine</option>
    <option value="Pharmacy">Pharmacy</option>
    <option value="other">other natural science</option>
    <option value="veternary">veternary</option>
  </select>
</div>



   </form>
   <div class="from-group mt-3">
  <button type="submit" name="btn" class="btn btn-primary">change preference</button>
  </div>
    </div>
  </body>
  </html>
