
<?php

include("header.php");

?>

<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'final');
 
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);

}


// getting committee information
$coursename=$_SESSION["coursename"];

$sql1="SELECT * FROM committeeacc WHERE coursename='$coursename'";
$result=$conn->query($sql1);

$row = $result->fetch_assoc();
//$result=$conn->query($sql);
 

    $semester=$row['semester'];
    $branch=$row['branch'];
    $status=$row['status'];
   

//adding question

   

if(isset($_POST['btn']))
{

    

    $question=$_POST['question'];
    $option_a=$_POST['option_a'];
    $option_b=$_POST['option_b'];
    $option_c=$_POST['option_c'];
    $option_d=$_POST['option_d'];
    $answer=$_POST['answer'];
     



    if($status !=='inactive'){
        
$q = "select coursename from question where coursename='$coursename' order by id desc";
$result =$conn->query($q);

          
      if($result->num_rows<5){
               $year = date("y"); 
  $sql="INSERT INTO question(branch,sem,coursename,question,option_a,option_b,option_c,option_d,answer,status,year)
                    values('$branch','$semester','$coursename','$question','$option_a','$option_b','$option_c','$option_d','$answer','inactive','$year')";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('question is added! \n');
        window.location='addquestion.php';
      </script>
  <?php
  }
  else
  {
    echo "Something Wrong" . $conn->error;
  }

}
 else{
    ?>
        <script>
        alert('question is is not added! you are allowed to add only five questions! \n');
        window.location='managequestion.php';
      </script>
    <?php
 }

}





else{
    ?>
        <script>
        alert('you can not add question now!');
        window.location='addquestion.php';
      </script>
  <?php
}
}


?>
 <html>
 <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">   
  <style>
   
  </style>
 </head><body style="margin-top:100px;">
     <form  method="POST" enctype="multipart/form-data">
           <div class="container border">
                    <P>  Add  <b> <?php echo $_SESSION["coursename"]?></b> questions for students  </P>
                    <P>  you can only add 5 questions  </P>
                 <div class="form-group">
                <label >Enter Question </label>
                   
                        <textarea rows="5" cols="75" class="form-control" name="question" id="questionInput" placeholder="Question" required autofocus></textarea>
                    </div>
                
                <div class="form-group">
                <label >Option A </label>
                    
                        <input type="text" name="option_a" class="form-control" id="optionA" placeholder="Option A" required>
                    </div>
                
                <div class="form-group">
                <label >Option B </label>
                    
                        <input type="text" name="option_b" class="form-control" id="optionB" placeholder="Option B" required>
                    </div>
                

                <div class="form-group">
                    <label >Option C </label>
                    
                        <input type="text" name="option_c" class="form-control" id="optionC" placeholder="Option C" required>
                    
                </div>

                <div class="form-group">
                    <label>Option D </label>
                    
                        <input type="text" name="option_d" class="form-control" id="optionD" placeholder="Option D" required>
                  </div>
                <div class="form-group  ">
                    <label >Answer </label>
                    
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_a" required/>
                                <span class="label-text">A</span>
                            </div>
                        </label>
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_b" required/>
                                <span class="label-text">B</span>
                            </div>
                        </label>

                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_c" required/>
                                <span class="label-text">C</span>
                            </div>
                        </label>
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_d" required/>
                                <span class="label-text">D</span>
                            </div>
                        </label>

                    </div>
               
                <div>
               
                    <button type="submit" name="btn" class="btn btn-primary">Add Question</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div> 
                             
</form>
 
    </div>    

</body>
</html>