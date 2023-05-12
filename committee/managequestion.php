
<?php

include("header.php");

?>
<?php
//include("check.php");


?>
<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'final');
 
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);

}
//include("header.php");


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

    <label  test-align:center;>CURRENT QUESTION</label><br>
    <button class="btn btn-primary my-5"><a href="addquestion.php" class="text-light">add question</a></button>
   
       
    
  <table class='table'>
            <thead>
                <tr>
                    <th>Qno</th>
               
                    <th>Semester</th>
                    <th>question</th>
                    <th>option a</th>
                    <th>option b</th>
                    <th>option c</th>
                    <th>option d</th>
                    <th>Answer</th>
                     
                    <th>Action</th>  
                </tr>
            </thead>

            <tbody>           
      <?php 
$coursename=$_SESSION["coursename"];

      $sql= "SELECT * from  question WHERE coursename='$coursename'";
   $result=$conn->query($sql);
     $sn=1;
    if($result){
    while($row=mysqli_fetch_assoc($result)){
          
       $id=$row['id']; 
        // $branch=  $row['branch']; 
        $sem=$row['sem']; 
        $question=$row['question']; 
         $option_a=$row['option_a']; 
         $option_b= $row['option_b']; 
        $option_c=$row['option_c']; 
      $option_d=$row['option_d']; 
      $answer= $row['answer'];
      //$status=$row['status']; 

      echo'<tr>
    
        <td>'. $sn++.'</td>
       
        <td>'.$sem .'</td>
        <td> '.$question.'</td>
        <td>'.$option_a.' </td>
        <td>  '.$option_b.' </td>
        <td>  '.$option_c.' </td>
        <td> '.$option_d.' </td>
        
        <td>'.$answer.'</td>
        
        
        <td>
           <button class="btn btn-primary"><a href="updatequestion.php?  updateid='.$id.'" class="text-light">Edit</a></button>
         

           </td>
    </tr>';

  }
}
?>
   
</tbody>
</table>


 </div>
<div class="container my-5">
  <button class="btn btn-primary my-5"><a href="getoldquestion.php" class="text-light">get old question </a></button>
</div>
</body>
</html>

     
            
       