<?php

include("header.php");
include("connect.php");
//$branch= $_SESSION['branch']

?>
<?php  
   $uid=$_SESSION['uid'];
   $branch=$_SESSION['branch'];
    $id=$_SESSION['id'];


//getting student information from studentacc table
       $sql= "SELECT * FROM students where Id=$id";
     $result=$conn->query($sql);

    if ($result->num_rows<1){ 
    
     {
        ?>
        <script>
        alert('There is no result ');
        window.location='../page student.php';
      </script>
    <?php
     }
}

    $row=$result->fetch_assoc();
  ?>

  <?php
// to get coc result 
 
    $sql1= "SELECT * from  result where user_id='".$_SESSION['id']."' ";
   $res=$conn->query($sql1);

    if($res){
    $r=$res->fetch_assoc();
    $coc=$r['obtained_marks'];

}
  else
     {
        ?>
        <script>
        alert('you have no coc result');
        window.location='../page student.php';
      </script>
    <?php
     }

  ?>

<?php
 $total= $row['UEE']*0.0285 +$row['CGPA']*12.5+ $r['obtained_marks'];


   //INSERTING COC AND TOTAL IN TO STUDENT ACCOUNT

      $sql3="UPDATE studentS SET COC=$coc, total=$total where Id=$id";

         $result3=$conn->query($sql3);


 ?>
 





<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>preference!</title>
  </head>
  <body>
    

<div class="container" style="margin-top:200px;">
      <div class="col-md-8">
             <div class="card">
                <div class="card-header">
                      <h3>Your results</h3>
                    
                </div>
                <div class="card-body">

        <div class="form-group  mb-3">
         Full Name= <?php echo $row['f_name']." ".$row['l_name']; ?><br>
    branch of study=<?php echo $_SESSION['branch'];?><br>
     university entrance examination result=<?php echo $row['UEE'];?><br>
     cgpa=<?php echo $row['CGPA'];?><br>
     college entry examination result=<?php echo $r['obtained_marks'];?><br>


    

     total result from 100% = <?php echo $total;?>%<br>
     Rank=

     
                 </div>
                 <form action="preference.php" method="post">

            <button name="next" class="btn btn-primary "> next</button>

                    </form>
                </div>
            </div>
        </div>
    </div>



<?php
if(isset($_POST['next'])){
//redirection to selection page
if($_SESSION['branch']!=='social'){
          $q = "select *from preference where stud_id='$id' order by id desc";
         $result =$conn->query($q);
         if($result->num_rows<1){
           header("location:naturalprefer.php");
         }
         else{
            header("location:changepreference.php");

         }
       }

 else if($_SESSION['branch']!=='natural'){
header("location:socialprefer.php");

 }
}

?>


  </body>

</html>