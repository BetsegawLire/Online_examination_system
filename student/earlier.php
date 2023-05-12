<?php

include("header.php");

?>

<?php/*
$_SESSION['message']=$message;
$exam_date=$_SESSION['exam_date'];
  $start_time=$_SESSION['start_time'];
  $end_time=$_SESSION['end_time'];

*/

    $_SESSION['exam_date']=$exam_date;
if(!isset($_SESSION['exam_date'])){
  echo' nope';
}
$_SESSION['start_time']=$start_time;
if(!isset($_SESSION['start_time'])){
  echo' nope';
}

$_SESSION['end_time']=$end_time;
if(!isset($_SESSION['end_time'])){
  echo' nope';
}
 $_SESSION['message']= $mm;
 if(!isset($_SESSION['message'])){
  echo' nope';
}

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
    <body>

<div class="container">

      <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card mt-5">

                  

                <div class="card-header">
               <h3> message></h3>
                </div>
                <div class="card-body">

                    <form action="managexam.php" method="post">

                    <div class="form-group  mb-3">


                 

                <?php
                     
                  
                           echo "Now is " .date("Y-m-d"),"\n" ;
                          echo date("H:i:sa");
                            echo "The exam date is on"."". $_SESSION['exam_date'];
                            
                         echo "The start time is at "."". $_SESSION['start_time'];
                           echo ".The end time is at "."".$_SESSION['end_time'];
                        
               
                   ?>
                     </div>
                     

                        <div class="form-group mb-3">
                         <a href="../page student.php" name="submit" >back to homepage</a>
                         
                         
                       
                        </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 


 ?>