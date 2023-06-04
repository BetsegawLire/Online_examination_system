<?php

include("header.php");
include("connect.php");

if(isset($_POST['submit'])){

$choice_1 = $_POST['choice_1'];
$choice_2 = $_POST['choice_2'];
         $id=$_SESSION['id'];

       
      $query = "INSERT INTO social_prefernces (stud_id,first_choice, second_choice) VALUES('$id','$choice_1','$choice_2')";
    $result = $conn->query($query);
     if($result){
         ?>
        <script>
        alert('you made preference');
        window.location='preference.php';
      </script>
    <?php

      }  
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
  <body style="margin-top: 100px;">


    <div class="container my-5 border">
      <form action="socialprefer.php" method="post">

           <?php

            ?>
            




 first choice
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Options</label>
  </div>
  <select class="custom-select" name="choice_1" required>
    <option value="">Choose...</option>
    <option value="Law">Law</option>
    <option value="Other Social Science">other social science</option>
  </select>
</div>
   second question
   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" >Options</label>
  </div>
  <select class="custom-select" name="choice_2" required>
    <option value="">Choose...</option>
    <option value="Law">Law</option>
    <option value="Other Social Science">other social science</option>
  </select>
</div>






 <div class="from-group">
  <button type="submit" name="submit" class="btn btn-primary">submit</button>
  <button type="reset" name="" class="btn btn-primary">reset</button>

  </div>


   </form>
 
    </div>
  </body>
  </html>
