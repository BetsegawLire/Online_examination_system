
<?php
include("check.php");

?>

        
<style>
  #clockcontainer{
  float: right;
  margin-top: 40px;
  margin-right: 150px;
}
</style>
        
       <link href="css/bootstrap.min.css" rel="stylesheet">

    
        <link href="css/metisMenu.min.css" rel="stylesheet">

        
        <link href="css/timeline.css" rel="stylesheet">

        
        <link href="css/startmin.css" rel="stylesheet">

        
        <link href="css/morris.css" rel="stylesheet">

        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css">

        
    </head>
    </html>
<?php
//session_start();
//include("examheader.php");
include("connect.php");
   

if(!isset($_SESSION['current_que']) || empty($_SESSION['current_que'])){
	$_SESSION['current_que'] = 1;

}
//echo $_SESSION['qa'][1]['question'];
?>
<script type="text/javascript">

	function getPrevQue(){

		var checked_value = $('input[type=radio]:checked').val();
		var current_que = $('#current_que').val();

		$.ajax({
			url: 'submit_que.php',
			type: 'POST',
			data: 'prev=1',
			success: function(data){
				if(data == 1){
					location.reload();

				}
			}
		});

	}

	function getNextQue(){

		var checked_value = $('input[type=radio]:checked').val();
		var current_que = $('#current_que').val();

		//alert(checked_value);
		//alert(current_que);

		$.ajax({
			url: 'submit_que.php',

			type: 'POST',
			data: 'next=1&value='+checked_value+'&current_que='+current_que,
			success: function(data){
				//alert(data);
				if(data == 1){
					location.reload();
					//window.location='examination.php';
				}
			}
		
});
	}
</script>
<?php


// Query the database to get the exam start and end times
$sql = "SELECT start_time, end_time FROM exam WHERE id = 2"; // Replace 1 with the actual exam ID
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$start_time = strtotime($row['start_time']);
$end_time = strtotime($row['end_time']);

// Calculate the remaining time in seconds
$remaining_time = $end_time - time();
?>

<form  method="POST" enctype="multipart/form-data">

            <div id="page-wrapper">
                <div class="container-fluid">
				<h1>
				<h3 id="countdown"></h3>
				</h1>
                    <div class="row">
                        <div class="col-lg-12">
                           
                        </div>
                        
                    
                    </div>
					<!-- <div id="countdown"> -->
					
				<!-- </div> -->
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          
                                            <form role="form">

                                                   <div class="row">

												   



				<h4>
				
					Q.<?php echo $_SESSION['current_que']; echo '  '; echo $_SESSION['qa'][$_SESSION['current_que']]['question'];?>

				</h4>
				
			</div>

			<div class="form-group" id="checkbox_div">

				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="answer" value="option_a" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['ans']) && $_SESSION['qa'][$_SESSION['current_que']]['ans'] == 'option_a') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['option_a']; ?></span>
							</label>
						</div> 
					</div>

					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="answer" value="option_b" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['ans']) && $_SESSION['qa'][$_SESSION['current_que']]['ans'] == 'option_b') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['option_b']; ?></span>
							</label>
						</div> 
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="answer" value="option_c" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['ans']) && $_SESSION['qa'][$_SESSION['current_que']]['ans'] == 'option_c') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['option_c']; ?></span>
							</label>
						</div> 
					</div>

					<div class="col-md-5">
						<div class="radio">
							<label>
								<input type="radio" name="answer" value="option_d" <?php if(!empty($_SESSION['qa'][$_SESSION['current_que']]['ans']) && $_SESSION['qa'][$_SESSION['current_que']]['ans'] == 'option_d') { echo 'checked="checked"'; } ?>>
								<span class="label-text"><?php echo $_SESSION['qa'][$_SESSION['current_que']]['option_d']; ?></span>
							</label>
						</div> 
					</div>
				</div>

			</div>

			<input type="hidden" id="current_que" value="<?php echo $_SESSION['current_que']; ?>" />

			<div class="col-md-6 col-md-offset-3">
				
				<?php if($_SESSION['current_que'] != 1){ ?>
				<button type="" id="prev_button" onclick="getPrevQue(); return false;" class="btn btn-success"><i class="fa fa-fw fa-arrow-left"></i>Previous</button>
				<?php } ?>

				<?php if($_SESSION['current_que'] != 10){ ?>
				<button type="" id="next_button" onclick="getNextQue(); return false;" class="btn btn-success">Next<i class="fa fa-fw fa-arrow-right"></i></button>
				<?php } ?>

				

			</div>

		</div>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="css/timeTo.css">
<script>
function countdown(remaining_time) {
	var hours = Math.floor(remaining_time / 3600);
  var minutes = Math.floor((remaining_time - (hours * 3600)) / 60);
  var remainingSeconds = remaining_time - (hours * 3600) - (minutes * 60);
    // var minutes = Math.floor(remaining_time / 60);
    // var seconds = remaining_time % 60;
    document.getElementById("countdown").innerHTML = hours + "hr " + minutes + "m " + remainingSeconds + "s";
    remaining_time--;
    if (remaining_time >= 0) {
        setTimeout(function() {
            countdown(remaining_time);
        }, 1000);
    } else {
        alert("Time's up!");
    }
}
countdown(<?php echo $remaining_time; ?>);
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


