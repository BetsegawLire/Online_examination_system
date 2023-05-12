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
    <button class="btn btn-primary my-5"><a href="addStudent.php" class="text-light">add Student</a></button>
    <button class="btn btn-primary my-5"><a href="downloadTable.php" class="text-light">Download</a></button>

       
    
  <table class='table'>
            <thead>
                <tr>
                    <th>Srno</th>
                    <th>Id</th>
                    <th>Uid</th>
                   
                     <th>F_name</th>
                    <th>L_name</th>  
                </tr>
            </thead>

            <tbody>           
      <?php 


      // $sql= "SELECT * from  students";
      $sql = "SELECT * from students, studentaccount WHERE students.Id = studentaccount.ID ORDER BY students.f_name ASC";
   $result=$conn->query($sql);
     $sn=1;
    if($result){
    while($row = $result->fetch_assoc()){
          
       $id=$row['Id']; 
       $uid=$row['UID'];
        $f_name=  $row['f_name']; 
         $l_name=  $row['l_name']; 
       // $password=$row['password']; 
        
        //  $status=$row['status']; 
       
         

      echo'<tr>
    
        <td>'. $sn++.'</td>
        <td>'.$id.'</td>
        <td>'.$uid.'</td>
        <td>'.$f_name.'</td>
        <td>'.$l_name.'</td>
       
        
        
    </tr>';

  }
}
?>
   
</tbody>
</table>
 </div>
</body>
</html>

     
            
       