<?php

 
include("check.php");

include("connect.php");


// $id=$_SESSION['id'];
// include("header.php");
// $sql = "SELECT s.student_id, s.total_marks, p.first_choice, p.second_choice FROM students s INNER JOIN preferences p ON s.student_id = p.student_id";
// Get the list of students and their preferences
// $sql="SELECT c.C_name FROM college c INNER JOIN placement p ON p.s_id = $id && c.C_id = p.c_id";
// $result = $conn->query($sql);

// $college = $result->fetch_assoc();


// Close the database connection
// $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title></title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

        
    </head>
    <body>
    <div class="container">

<div class="row justify-content-center">
   <div class="col-md-8">
       <div class="card mt-5">

            

          <div class="card-header">
         <h3> message></h3>
          </div>
          <div class="card-body">

              <div class="card-header">
                Message:
              </div>
              <div class="card-body">
                You have successfully placed to  <?php
                $id=$_SESSION['id'];
                // include("header.php");
                // $sql = "SELECT s.student_id, s.total_marks, p.first_choice, p.second_choice FROM students s INNER JOIN preferences p ON s.student_id = p.student_id";
                // Get the list of students and their preferences
                if($_SESSION["branch"] == "natural") {
                $sql="SELECT c.C_name FROM college c INNER JOIN placement p ON p.s_id = $id && c.C_id = p.c_id";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0){
                  $college = $result->fetch_assoc();

                  echo '<h2>'.$college["C_name"].'</h2>';
                }else {
                  echo "<h2> UnAssigned </h2>";
                }
                } else {
                  $sql="SELECT c.C_name FROM social_college c INNER JOIN social_placement p ON p.s_id = $id && c.C_id = p.c_id";
                $result = $conn->query($sql);
                
                $college = $result->fetch_assoc();
                echo '<h2>'.$college["C_name"].'</h2>';
                }
                ?>
              </div>
              <div class="card-footer">
              <a href="../page student.php" class='btn btn-primary' name="submit" >back to homepage</a>

              </div>
          </div>
      </div>
  </div>
</div>
</div>

</body>
</html>
