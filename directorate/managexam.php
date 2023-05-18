<?php

 


include("db.php");
include("header.php");

?>
<?php
// for exam time and instruction
$sql="select * from exam";
$result=$conn->query($sql);

$row=mysqli_fetch_assoc($result);

    $exam_date=$row['exam_date'];
    $start_time=$row['start_time'];
    $end_time=$row['end_time'];
  $instruction=$row['instruction'];
   

       

if(isset($_POST['submit']))
{

    

    $exam_date=$_POST['exam_date'];
    $start_time=$_POST['start_time'];
    $end_time=$_POST['end_time'];
     echo $start_time;

 $sql1="UPDATE exam SET  exam_date='$exam_date',start_time='$start_time',end_time='$end_time'";
                 
  if($conn->query($sql1)==TRUE)
  {   
  ?>
        <script>
        alert('exam date and time is set! \n');
        window.location='managexam.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }

}




if(isset($_POST['btn']))
{
  

    $ins=$_POST['instruction'];
   

 $sq="UPDATE exam SET instruction='$ins'";
                 
  if($conn->query($sq)==TRUE)
  {   
  ?>
        <script>
        alert('Instruction is updated! \n');
        window.location='managexam.php';
      </script>
  <?php
  }else
  {  

    $message="Something Wrong ! Retry again!";
  }

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
    <body style="margin-top:100px;">
   <div class="container">

      <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card mt-5">

                  

                <div class="card-header">
                Set date and time for exam
                </div>
                <div class="card-body">

                    <form action="managexam.php" method="post">

                    <div class="form-group  mb-3">
                        <label> exam date</label>
                        <input type="date" name="exam_date" class="form-control" value="<?php echo $exam_date ;?>">

                     </div>
                     <div class="form-group  mb-3">
                        <label>start time</label>
                        <input type="time" name="start_time" class="form-control" value="<?php echo $start_time ;?>">

                     </div>
                     <div class="form-group  mb-3">
                        <label>end  time</label>
                        <input type="time" name="end_time" class="form-control" value="<?php echo $end_time ;?>">

                     </div>

                        <div class="form-group mb-3">
                         <button type="submit" name="submit" class="btn-primary" class="text-light">UPDATE</button>
                         
                         
                       
                        </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
         <div class="card mt-5">
            <div class="card-header">
                    Write examination instruction below
             </div>

              <div class="card-body">

                    <form action="managexam.php" method="post">

                   <div class="form-group  mb-3">

                       <textarea name="instruction" class="form-control" rows="10"> <?php echo $instruction;?> </textarea>
                    </div>
                
                    </div>
                        <div class="form-group mb-3">
                        <button type="submit" name="btn" class="btn-primary" class="text-light">UPDATE INSTRUCTION</button>
                      
                       
                        </div>

                  </form>
                   
                </div>

         </div>

     </div>
 </div>
 </div>    
</body>
</html>



     
            
       