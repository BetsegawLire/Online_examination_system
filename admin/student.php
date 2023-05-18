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
<div class="container my-5 border">
<button class="btn btn-primary my-5"><a href="downloadTable.php" class="text-light">Download</a></button>

    <button class="btn btn-primary my-5" ><a href="activate student.php? naturalactive=1" class="text-light">activate all natural students</a></button>
   
       <button class="btn btn-primary my-5"><a href="activate student.php? socialactive=3" class="text-light">activate all social students</a></button>
        <button class="btn btn-danger my-5"><a href="activate student.php? naturaldeactive=2" class="text-light">deactivate all natural students</a></button>
    <button class="btn btn-danger my-5"><a href="activate student.php? socialdeactive=4" class="text-light">deactivate all social studets</a></button>
    <table class='table'>
            <thead>
                <tr>
                    <th>Srno</th>
                    <th>Id</th>
                    <!-- <th>Uid</th> -->
                   
                     <th>F_name</th>
                    <th>L_name</th>  
                    <th>status</th> 
                    <th>action</th> 
                </tr>
            </thead>

            <tbody>           
      <?php 
//       $sql = "SELECT * from students, studentaccount WHERE students.Id = studentaccount.ID ORDER BY students.f_name ASC";
//    $result=$conn->query($sql);
     $sn=1;
//     if($result){
//     while($row = $result->fetch_assoc()){
          
//        $id=$row['Id']; 
//        $uid=$row['UID'];
//         $f_name=  $row['f_name']; 
//          $l_name=  $row['l_name']; 
        
//          $status=$row['status']; 
       
         

//       echo'<tr>
    
//         <td>'. $sn++.'</td>
//         <td>'.$id.'</td>
//         <td>'.$uid.'</td>
//         <td>'.$f_name.'</td>
//         <td>'.$l_name.'</td>
//         <td>'.$status.'</td>

//         <td>
//         <button class="btn btn-primary btn-md center-block" ><a href="activate student.php?  activateid='.$id.'" class="text-light">Activate</a></button>
//         <button class="btn btn-danger btn-md center-block"><a href=" activate student.php? deactivateid='.$id.'" class="text-light">Deactivate</a></button>

//         </td>
        
        
//     </tr>';

//   }
// }
?>
<?php


// Check if search form has been submitted
if (isset($_GET['search'])) {
    // Sanitize user input
    $search_id = mysqli_real_escape_string($conn, $_GET['search']);

    // Construct SQL query
    $sql = "SELECT * FROM students WHERE id = '$search_id'";
} else {
    // Construct SQL query
    $sql = "SELECT * FROM students";
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
        echo '<td>' . $row['status'] . '</td>';
        
                // <button class="btn btn-danger btn-md center-block"><a href=" activate student.php? deactivateid='.$id.'" class="text-light">Deactivate</a></button>
        
                // </td>
                // <button class="btn btn-primary btn-md center-block" ><a href="activate student.php?  activateid='.$id.'" class="text-light">Activate</a></button>
                // <button class="btn btn-primary btn-md center-block" ><a href="activate student.php?  activateid='.$id.'" class="text-light">Activate</a></button>
                echo '<td>'. '<button class="btn btn-primary btn-md center-block me-2"> <a href="activate student.php? activateid='.$row['Id'].'" class="text-light">Activate</a></button>'.
                '<button class="btn btn-danger btn-md center-block"> <a href="activate student.php? deactivateid='.$row['Id'].'" class="text-light">Deactivate</a></button>'.'</td>';
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
  <!-- <table class='table'>
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>id</th>
                    <th>f_name</th>
                    <th>l_name</th>
                    <th>sex</th>
                  
                    <th>branch</th>
                    <th>year</th>
                    
                    <th>status</th> 
                    <th>action</th>  
                </tr>
            </thead>

            <tbody>           
      <?php 


      $sql= "SELECT * from  students";
   $result=$conn->query($sql);
     $sn=1;
    if($result){
    while($row=$result->fetch_assoc()){
          
       $id=$row['Id'];
       $f_name=$row['f_name'];
       $l_name=$row['l_name'];
      //  $uid=$row['uid'];
       //$password=$row['password'];
       $sex=$row['sex'];
         //$region=$row['region'];
         $branch=  $row['branch']; 
        $year=$row['year'];

        $uee_result=$row['UEE']; 
         $cgpa=$row['CGPA']; 
        //  $coc= $row['coc_result']; 
        $status=$row['status']; 
     
 
      echo'<tr>
    
        <td>'. $sn++.'</td>
        <td>'.$id.'</td>
        <td>'.$f_name.'</td>
        <td>'.$l_name.'</td>
       <td>'.$sex.'</td>
     
        <td>'.$branch.'</td>
        <td>'.$year .'</td>
        <td>  '.$status.' </td>
        
       
        
        <td>
           <button class="btn btn-primary btn-md center-block" ><a href="activate student.php?  activateid='.$id.'" class="text-light">Activate</a></button>
           <button class="btn btn-danger btn-md center-block"><a href=" activate student.php? deactivateid='.$id.'" class="text-light">Deactivate</a></button>

           </td>
    </tr>';

  }
}
?>
   
</tbody>
</table> -->
 </div>
</body>
</html>

     
            
       