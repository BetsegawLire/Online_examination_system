<?php
 include("check.php");

?>
<?php

 include("db.php");

?>
<?php

 include("header.php");

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
<div class="container" style="margin-top:100px;">
     <button class="btn btn-primary my-5"><a href="addStudent.php" class="text-light">add Student</a></button>
    <button class="btn btn-primary my-5"><a href="downloadTable.php" class="text-light">Download</a></button>

       
    
  <table class='table'>
            <thead>
                <tr>
                    <th>Srno</th>
                    <th>Id</th>
                   
                     <th>F_name</th>
                    <th>L_name</th>  
                    <th>Uid</th>
                    <th>Branch</th>

                </tr>
            </thead>

            <tbody>          
       <?php 


      
      // $sql = "SELECT * from students, studentaccount WHERE students.Id = studentaccount.ID ORDER BY students.f_name ASC";
  //  $result=$conn->query($sql);
     $sn=1;
    // if($result){
    // while($row = $result->fetch_assoc()){
          
    //    $id=$row['Id']; 
    //    $uid=$row['UID'];
    //     $f_name=  $row['f_name']; 
    //      $l_name=  $row['l_name'];  
       
         

    //   echo'<tr>
    
    //     <td>'. $sn++.'</td>
    //     <td>'.$id.'</td>
    //     <td>'.$uid.'</td>
    //     <td>'.$f_name.'</td>
    //     <td>'.$l_name.'</td>
       
        
        
    // </tr>';

  // }
// }
?>  

<?php


// Check if search form has been submitted
if (isset($_GET['search'])) {
    // Sanitize user input
    $search_id = mysqli_real_escape_string($conn, $_GET['search']);

    // Construct SQL query
    // $sql = "SELECT * FROM students WHERE ";
    $sql = "SELECT * FROM students, studentaccount where students.Id=studentaccount.ID && students.Id = '$search_id'";

} else {
    // Construct SQL query
    $sql = "SELECT * FROM students, studentaccount where students.Id=studentaccount.ID ORDER BY students.f_name ASC";
}

// Execute SQL query
$result = $conn->query($sql);

// Display search form
echo '<form method="get">';
echo '<input type="text" name="search" placeholder="Search by ID">';
echo '<input type="submit" value="Search">';
echo '</form>';

// Display search results
if ($result->num_rows > 0) {
    // echo '<table>';
    // echo '<tr><th>ID</th><th>F Name</th<th>L Name</th></tr>';
    
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $sn++ . '</td>';

        echo '<td>' . $row['Id'] . '</td>';
        echo '<td>' . $row['f_name'] . '</td>';
        echo '<td>' . $row['l_name'] . '</td>';
        echo '<td>' . $row['UID'] . '</td>';
        echo '<td>' . $row['branch'] . '</td>';

        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No results found.';
}

// Close database connection
$conn->close();
?>

   
</tbody>
</table>
 </div>
</body>
</html>

     
            
       