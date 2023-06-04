
<?php
include("check.php");
?>

<?php
include("connect.php");
 ?>

<?php

$branch = $_SESSION['branch'];
$semester = $_SESSION['semester'];
$qa=$_SESSION['qa'];

$sql = "select * from students where id='".$_SESSION['id']."'";
$result=$conn->query($sql);
   $row=$result->fetch_assoc(); 
$count_atten = 0;
$count=0;
$total_que = 0;
$right_ans = 0;
	while($count<10)
	{
		if(isset($_SESSION['qa'][$count]['ans']) && empty($_SESSION['qa'][$count]['ans']) == false)
		{
			$count_atten++;
		}
		$count++;
	}
	foreach ($_SESSION['qa'] as $key => $value) 
	{	
		$qid = $value['id'];
		$sql1 = "select answer from question where id = ".$qid;
		$result1=$conn->query($sql1);
		$result1 = mysqli_fetch_assoc($result1);
  
  
		$ans = $result1['answer'];

		if($ans == $value['ans'])
		{
			$right_ans++;
		}

		$total_que++;
	}


$id = $_SESSION['id'];

$attend_que = $count_atten;
$obtained_marks = $right_ans;
$exam_date = date('Y-m-d h:i:s');

$branch = $row['branch'];
//$sem = $row['semester'];

$q = "insert into result (user_id,branch,sem,attend_que,obtained_marks,exam_date)
	values ($id,'$branch','$semester',$attend_que,$obtained_marks,'$exam_date')";
	
$result1 =$conn->query($q);
if (!$result1) {
	echo "error inserting result data";
}

$qq = "insert into studentacc (coc_result)
	values ($obtained_marks)";
	
$result2 =$conn->query($qq);
if (!$result2) {
	echo "error inserting result data";
}






unset($_SESSION['qa']);
unset($_SESSION['subject']);
unset($_SESSION['current_que']);

?>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
    
    </style>
</head>
<body>


	
	
                      <div class="container my-5">
                       
					  <!-- <div class="form-group">
						<span class="lbl">Name : </span> 
						<span class="data"><?php echo $row['fname']." ".$row['lname']; ?></span>
					</div> -->
					  <!-- <div class="form-group">
						<span class="lbl">branch of study : </span> 
						<span class="data"><?php echo "$branch"; ?></span>
					</div> -->
					  <div class="form-group">
						<span class="lbl">Total Questions : </span> 
						<span class="data"><?php echo "$total_que"; ?></span>
					</div>
					  <div class="form-group">
						<span class="lbl">Attended Questions : </span> 
						<span class="data"><?php echo $count_atten+1; ?></span>
					</div>
					  <div class="form-group">
						<span class="lbl">Right Answers : </span> 
						<span class="data"><?php echo "$right_ans"; ?></span>
					</div>
					<a href="../page student.php" class='btn btn-primary' name="submit" >back to homepage</a>
				</div>

			
		</body>
		</html>

	
	

