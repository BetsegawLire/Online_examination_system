<?php

 


include("db.php");
include("header.php");

?>
<?php


     
   

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

      <div class="row justify-content">
         <div class="col-md-3">
             <div class="card">
                <div class="card-header">
               <label> Enter intake capacity for natural science/label>
                </div>
                <div class="card-body">

                    <form action="manageplacement.php" method="post">

                   <div class="form-group">
                        <label>Enter for medicine </label>
                       <input type="number" name="medicine" class="form-control" > 
                    </div>

                   <div class="form-group  mb-3">
                        <label>enter for Engineering </label>
                       <input type="number" name="engineering" class="form-control" > 
                    </div>

                   <div class="form-group  mb-3">
                        <label>enter for pharmacy </label>
                       <input type="number" name="instruction" class="form-control" > 
                    </div>

                   <div class="form-group  mb-3">
                        <label>enter for other natural science </label>
                       <input type="number" name="other" class="form-control" > 
                    </div>
                       <div class="form-group  mb-3">
                        <label>enter for other Veternary medicine </label>
                       <input type="number" name="veternary" class="form-control" > 
                    </div>



                    
                        <div class="form-group mb-3">
                         <button type="submit" name="submit" class="btn-primary" class="text-light">submit</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="container">
    <div class="row justify-content">
    <div class="col-md-3">
         <div class="card mt-5">
            <div class="card-header">
                   <label>enter college intake capacity for social science </label>
             </div>

              <div class="card-body">

                    <form action="manageplacement.php" method="post">

                   <div class="form-group  mb-3">
                        <label>enter for law </label>
                       <input type="number" name="law" class="form-control" > 
                    </div>
                
                    </div>
                        <div class="form-group mb-3">
                        <button type="submit" name="btn" class="btn-primary" class="text-light">submit</button>
                      
                       
                        </div>

                  </form>
                   
                </div>

         </div>

     </div>
 </div>
 </div>    
</body>
</html>

     
            
       