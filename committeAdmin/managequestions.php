<?php

 
include("check.php");

include("db.php");



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
    <body style="margin-top:100px;">
<div class="container">
    <!-- <button class="btn btn-primary my-5"><a href="select.php" class="text-light">add question</a></button> -->
       
    
  <table class='table'>
            <thead>
                <tr>
                    <th>Qno</th>
                    <th>Branch</th>
                    <th>Semester</th>
                    <th>question</th>
                    <th>option a</th>
                    <th>option b</th>
                    <th>option c</th>
                    <th>option d</th>
                    <th>Answer</th>
                     <th>Status</th>
                    <th>Action</th>  
                </tr>
            </thead>

            <tbody>           
      <?php 


      $sql= "SELECT * from  question";
   $result=$conn->query($sql);
     $sn=1;
    if($result){
    while($row=mysqli_fetch_assoc($result)){
          
       $id=$row['id']; 
         $branch=  $row['branch']; 
        $sem=$row['sem']; 
        $question=$row['question']; 
         $option_a=$row['option_a']; 
         $option_b= $row['option_b']; 
        $option_c=$row['option_c']; 
      $option_d=$row['option_d']; 
      $answer= $row['answer'];
      $status=$row['status']; 

      echo'<tr>
    
        <td>'. $sn++.'</td>
        <td>'.$branch.'</td>
        <td>'.$sem .'</td>
        <td> '.$question.'</td>
        <td>'.$option_a.' </td>
        <td>  '.$option_b.' </td>
        <td>  '.$option_c.' </td>
        <td> '.$option_d.' </td>
        
        <td>'.$answer.'</td>
        <td>'.$status.'</td>
        
        <td>
        <button class="btn btn-primary"><a href="activatequestions.php? activateid='.$id.'" class="text-light">Activate</a></button>
        <button class="btn btn-danger"><a href="activatequestions.php? deactivateid='.$id.'" class="text-light">Deactivate</a></button>

        </td>
    </tr>';

  }
}
?>
   
</tbody>
</table>
 </div>
</body>
</html>

     
            
       