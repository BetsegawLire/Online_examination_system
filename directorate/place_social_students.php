<?php

 
include("check.php");

include("db.php");



// include("header.php");
// $sql = "SELECT s.student_id, s.total_marks, p.first_choice, p.second_choice FROM students s INNER JOIN preferences p ON s.student_id = p.student_id";
// Get the list of students and their preferences
$sql="SELECT s.Id, s.total, p.first_choice, p.second_choice FROM students s INNER JOIN social_prefernces p ON s.Id = p.stud_id ORDER BY s.total DESC;";
$result = $conn->query($sql);

// Loop through each student and place them in their preferred college
while ($row = $result->fetch_assoc()) {
    $student_id = $row["Id"];
    $total_marks = $row["total"];
    $first_choice = $row["first_choice"];
    $second_choice = $row["second_choice"];

    // Check if the first choice college has available slots
    $sql = "SELECT C_id, intake FROM social_college WHERE C_name = '$first_choice' AND intake > (SELECT COUNT(*) FROM social_placement WHERE c_id = social_college.C_id)";
    $result2 = $conn->query($sql);

    if ($result2->num_rows > 0) {
        // Place the student in their first choice college
        $row2 = $result2->fetch_assoc();
        $college_id = $row2["C_id"];

        $sql = "INSERT INTO social_placement (s_id, c_id) VALUES ($student_id, $college_id)";
        $conn->query($sql);
    } else {
        // Check if the second choice college has available slots
        $sql = "SELECT C_id, intake FROM social_college WHERE C_name = '$second_choice' AND intake > (SELECT COUNT(*) FROM social_placement WHERE c_id = social_college.C_id)";
        $result3 = $conn->query($sql);

        if ($result3->num_rows > 0) {
            // Place the student in their second choice college
            $row3 = $result3->fetch_assoc();
            $college_id = $row3["C_id"];

            $sql = "INSERT INTO social_placement (s_id, c_id) VALUES ($student_id, $college_id)";
            $conn->query($sql);
        }
    }
}

// Close the database connection
$conn->close();

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
                You have successfully placed social students.
              </div>
              <div class="card-footer">
              <a href="../page directorate.php" class='btn btn-primary' name="submit" >back to homepage</a>

              </div>
          </div>
      </div>
  </div>
</div>
</div>

</body>
</html>
