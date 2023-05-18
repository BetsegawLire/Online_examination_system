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
    <body style="margin-top:100px;">
<div class="container">
    <button class="btn btn-primary my-5"><a href="addcommitte.php" class="text-light">add exam-committee</a></button>
       
    
  <table class='table'>
            <thead>
                <tr>
                    <th>Srno</th>
                    <th>Faculty</th>
                    <th>course name</th>
                   
                     <th>Status</th>
                    <th>Action</th>  
                </tr>
            </thead>

            <tbody>           
      <?php 


      $sql= "SELECT * from  committeeacc";
   $result=$conn->query($sql);
     $sn=1;
    if($result){
    while($row=mysqli_fetch_assoc($result)){
          
       $id=$row['id']; 
        $faculty=  $row['faculty']; 
         $coursename=  $row['coursename']; 
       // $password=$row['password']; 
        
         $status=$row['status']; 
         

      echo'<tr>
    
        <td>'. $sn++.'</td>
        <td>'.$faculty.'</td>
        <td>'.$coursename.'</td>
       
        <td>'.$status.'</td>
        
        <td>
           <button class="btn btn-primary"><a href="activate committe.php? activateid='.$id.'" class="text-light">Activate</a></button>
           <button class="btn btn-danger"><a href="activate committe.php? deactivateid='.$id.'" class="text-light">Deactivate</a></button>

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

     
            
       