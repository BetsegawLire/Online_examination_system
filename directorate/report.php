<?php

include("header.php");
   include("db.php");

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> 
    </head>
    <body style="margin-top: 100px;">
   <div class="container">

     <button class="btn btn-primary my-5"><a href="downloadNaturalReport.php" class="text-light">downloadNaturalReport</a></button>
     <button class="btn btn-primary my-5"><a href="downloadSocialReport.php" class="text-light">downloadSocialReport</a></button>

      <div class="row justify-content-center">

         <div class="col-md-8">
             <div class="card mt-5">
                <div class="card-header">
                <h3>General report on student result</h3>
                </div>
                <div class="card-body">

                <?php


// Query the database to get the number of students placed in each college
$sql = "SELECT C_name, COUNT(*) AS num_students_placed FROM college JOIN placement ON college.C_id = placement.c_id GROUP BY C_name";

$result = $conn->query($sql);

// Output the report
if ($result->num_rows > 0) {
  echo "<h4>Natural students Report: </h4>";
  echo "<table class='table table-bordered'><tr class='table-dark'><th>College Name</th><th>Number of Studentsaced</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["C_name"] . "</td><td>" . $row["num_students_placed"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

// Close the database connection
// $conn->close();
?>

<?php


// Query the database to get the number of students placed in each college
$sql = "SELECT C_name, COUNT(*) AS num_students_placed FROM social_college JOIN social_placement ON social_college.C_id = social_placement.c_id GROUP BY C_name";

$result = $conn->query($sql);

// Output the report
if ($result->num_rows > 0) {
  echo "<h4>Social students Report: </h4>";

  echo "<table class='table table-bordered'><tr class='table-dark'><th>College Name</th><th>Number of Studentsaced</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["C_name"] . "</td><td>" . $row["num_students_placed"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No results found.";
}

// Close the database connection
$conn->close();
?>


              <!-- <table>
  <tr>
    <th>info</th>
    <th>natural</th>
    <th>social</th>
  </tr>
  <tr>
    <td>total student</td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td>total male</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>total female</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>maximum mark</td>
    <td></td>
    <td></td>
  </tr>


</table> -->

                   
                     
                </div>
            </div>
        </div>
    </div>
</div>
</body>
     
            
       
     
            
       