<?php

 
// include("check.php");

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
    <button class="btn btn-primary my-5"><a href="select.php" class="text-light">place natural students</a></button>
    <button class="btn btn-primary my-5"><a href="place_social_students.php" class="text-light">place social students</a></button>
       
    
  <table class='table'>
            <thead>
                <tr>
                    <th>Qno</th>
                    <th>S_id</th>
                    <th>Branch</th>
                    <th>Total Marks</th> 
                </tr>
            </thead>

            <tbody>           
      <?php 


      $sql= "SELECT * from  students order by total desc";
   $result=$conn->query($sql);
     $sn=1;
    if($result){
    while($row=mysqli_fetch_assoc($result)){
          
       $id=$row['Id']; 
         $branch=  $row['branch']; 
        $total=$row['total'];

      echo'<tr>
    
        <td>'. $sn++.'</td>
        <td>'. $id.'</td>
        <td>'.$branch.'</td>
        <td>'. $total.'</td>
    </tr>';

  }
}
?>
   
</tbody>
</table>
 </div>
</body>
</html>

     
            
       