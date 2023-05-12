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
 $id=$_GET['updateid'];

$sql="select * from question where id=$id";
$result=$conn->query($sql);

$row=mysqli_fetch_assoc($result);


$question=$row['question'];
    $option_a=$row['option_a'];
    $option_b=$row['option_b'];
    $option_c=$row['option_c'];
    $option_d=$row['option_d'];
    $answer=$row['answer'];





if(isset($_POST['btn']))
{
   
 
    

    $question=$_POST['question'];
    $option_a=$_POST['option_a'];
    $option_b=$_POST['option_b'];
    $option_c=$_POST['option_c'];
    $option_d=$_POST['option_d'];
    $answer=$_POST['answer'];

  $sql="update  question set id='$id',question='$question',option_a='$option_a',option_b='$option_b',option_c='$option_c',option_d='$option_d', answer='$answer' where id=$id";
  if($conn->query($sql)==TRUE)
  {   
  ?>
        <script>
        alert('question is updated! \n');
        window.location='managequestion.php';
      </script>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}

?>
 <html>
 <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">   
  <style>
    .container{
          padding-top: 50px;
    }
  </style>
 </head><body>
     <form  method="POST" enctype="multipart/form-data">
           <div class="container">

                 <div class="form-group">
                <label > Question </label>
                  
                        <textarea rows="5" cols="75" class="form-control" name="question" id="questionInput" >  <?php echo " $question " ?></textarea>
                   
                        
                    </div>
                
                <div class="form-group">
                <label >Option A </label>
                    
                        <input type="text" name="option_a" class="form-control" id="optionA"  value=<?php echo $option_a;?> >
                    </div>
                
                <div class="form-group">
                <label >Option B </label>
                    
                        <input type="text" name="option_b" class="form-control" id="optionB"value=<?php echo $option_b;?> >
                    </div>
                

                <div class="form-group">
                    <label >Option C </label>
                    
                        <input type="text" name="option_c" class="form-control" id="optionC"value=<?php echo $option_c;?> >
                    
                </div>

                <div class="form-group">
                    <label>Option D </label>
                    
                        <input type="text" name="option_d" class="form-control" id="optionD" value=<?php echo $option_d;?> >
                  </div>
                <div class="form-group  ">
                    <label >Answer </label>
                    
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_a" <?php echo ($answer =='option_a')? 'checked':'' ?> />
                                <span class="label-text">A</span>
                            </div>
                        </label>
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_b"<?php echo ($answer =='option_b')? 'checked':'' ?>  />
                                <span class="label-text">B</span>
                            </div>
                        </label>

                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_c" <?php echo ($answer =='option_c')? 'checked':'' ?>/>
                                <span class="label-text">C</span>
                            </div>
                        </label>
                        
                        <label>
                            <div class="radio radio-inline">                    
                                <input type="radio" name="answer" value="option_d" <?php echo ($answer =='option_d')? 'checked':'' ?>/>
                                <span class="label-text">D</span>
                            </div>
                        </label>

                    </div>
               
                <div>
               
                    <button type="submit" name="btn" class="btn btn-primary">Update Question</button>
                 
                </div> 
                             
</form>
 
    </div>    

</body>
</html>