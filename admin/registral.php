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
<div class="container">
    <button class="btn btn-primary my-5"><a href="addRegistral.php" class="text-light">add Registral</a></button>
       
    
   <table class='table'>
            <thead>
                <tr>
                <th>No</th>
                    <th>UserName</th>
                    <th>Status</th>
                    <th>Action</th>  
                </tr>
            </thead>

            <tbody>           
      <?php 


      $sql= "SELECT * from  registralacc";
   $result=$conn->query($sql);
     $sn=1;
    if($result){
    while($row=mysqli_fetch_assoc($result)){
          
      //  $id=$row['id']; 
        $username=  $row['username']; 
         $status=  $row['status']; 
       // $password=$row['password']; 
        
        //  $status=$row['status']; 
         

      echo'<tr>
    
        <td>'. $sn++.'</td>
        <td>'.$username.'</td>
       
        <td>'.$status.'</td>
        
        <td>
           <button class="btn btn-primary"><a href="activate registral.php? activateid='.$username.'" class="text-light">Activate</a></button>
           <button class="btn btn-danger"><a href="activate registral.php? deactivateid='.$username.'" class="text-light">Deactivate</a></button>

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

     
            
       