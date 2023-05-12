<?php

 
include("check.php");


include("connect.php");


  
?>


<?php

$uid=$_SESSION["uid"];
$_SESSION['branch'];


date_default_timezone_set("Africa/Addis_Ababa");



if(!isset($_SESSION['branch'])){
  echo "session brach is not set";
}


if(!isset($_SESSION['uid'])){
  echo "session uid is not set";
}

//getting exam date and time

$sql="SELECT * FROM exam";
$result=$conn->query($sql);

$row = $result->fetch_assoc();
    $exam_date=$row['exam_date'];
    $start_time=$row['start_time'];
    $end_time=$row['end_time'];

    $_SESSION['exam_date']=$exam_date;
if(isset($_SESSION['exam_date'])){
  // echo' nope';
  // echo $_SESSION['exam_date'];
}
$_SESSION['start_time']=$start_time;
if(isset($_SESSION['start_time'])){
  // echo' nope';
  // echo $_SESSION['start_time'];
}

$_SESSION['end_time']=$end_time;
if(isset($_SESSION['end_time'])){
  // echo' nope';
  // echo $_SESSION['end_time'];
}

/*
echo strtotime("$start_time");

echo time(),"\n";
$d=date("H:i:sa");
echo strtotime("d"),"\n";
$e=date("Y-m-d");
echo strtotime("e");



*/

//getting student status
$sql1="SELECT * FROM studentaccount, students WHERE studentaccount.UID=$uid && students.Id=studentaccount.ID";
$result1=$conn->query($sql1);

$row = $result1->fetch_assoc();
//$result=$conn->query($sql);
 
    $status=$row['status'];

    //getting current date and time



if($status!=='inactive'){


       $now=time();
       $exam_time=strtotime($start_time);
       $end_time=strtotime($end_time);

       if($now<$exam_time){
            
        $mm="now is not the exam time";
          $_SESSION['message']= $mm;

        header("location:earlier.php");
        exit;


       }

       else if($now>$end_time){
              
        
         header("location:earlier.php");
         exit;
       }


       else{
          header("location:examination.php");
          exit;

       }

}





else if($status!=="active"){

            ?>
        <script>
        alert('you can not take exam !');
        window.location='../page student.php';
      </script>
        <?php

  }



?>

