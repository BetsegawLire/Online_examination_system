<?php
include("check.php");
//include("examheader.php");

?>





<?php 
include("connect.php");


foreach ($_SESSION as $key => $value) {
	$$key = $value;
}

//unset($_SESSION['qa']);
if(!isset($_SESSION['qa']) || empty($_SESSION['qa'])){
	$_SESSION['branch']=$branch;
	$q = "SELECT * FROM question WHERE (branch= '".$branch."' OR branch='both' ) AND( status='active') order by RAND() limit 11";
	 $res=$conn->query($q);
	 if(mysqli_num_rows($res)<=0)
	 	
	 {

	 	?>
	 	<script>
        alert(' The exam is not available!');
        window.location='../page student.php';
      </script>
    <?php
	 }

	 //getting semester and storing it in session
       $row = $res->fetch_assoc();
               $_SESSION['semester']=$row['sem'];
              
               
	 
	$_SESSION['qa'] = array();
	$count = 1;
	while($row = mysqli_fetch_assoc($res)){

		$_SESSION['qa'][$count]['id'] = $row['id'];
		$_SESSION['coursename'] = $row['coursename'];
		$_SESSION['qa'][$count]['question'] = $row['question'];
		$_SESSION['qa'][$count]['option_a'] = $row['option_a'];
		$_SESSION['qa'][$count]['option_b'] = $row['option_b'];
		$_SESSION['qa'][$count]['option_c'] = $row['option_c'];
		$_SESSION['qa'][$count]['option_d'] = $row['option_d'];
		$_SESSION['qa'][$count]['ans'] = '';
		$count++;
	}
}


?>

<html>


</head>

<body>





	<iframe id="exam_frame" width="100%" height="450" frameborder="0" scrolling="no" src="exam_frame.php"></iframe>

	  <script type="text/javascript">
		setTimeout(myfun,1800000);

		function myfun()
		{
			window.location = 'result_count.php';
		}
	</script>
	

<script src="js/jquery.min.js"></script>

        
        <script src="js/bootstrap.min.js"></script>

        
        <script src="js/metisMenu.min.js"></script>

        
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        
        <script src="js/startmin.js"></script>
        <script src="js/jquery.min.js"></script>

       
        <script src="js/bootstrap.min.js"></script>

        
        <script src="js/metisMenu.min.js"></script>

        
        <script src="js/startmin.js"></script>

	<li><a href="result_count.php" id="endExamBtn" class="btn btn-primary">submit-Exam</a></li>     