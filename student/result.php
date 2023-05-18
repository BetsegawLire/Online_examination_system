<?php

include("header.php");
?>
<?php 
//include("header.php");
include("connect.php");
$sql ="select * from result  WHERE user_id='".$_SESSION['id']."'  ";
$result=$conn->query($sql);

if(mysqli_num_rows($result)<=0)   
     {
        ?>
        <script>
        alert('There is no result');
        window.location='../page student.php';
      </script>
    <?php
     }
 
?>

<html>
<head>  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
 </head>
    <body>

        <div class="container" style="margin-top:200px;">
        <table class="table">
          
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>branch </th>
                    <th>Total</th>
                   
                    <th>Attended Question</th>
                    <th>Result</th>
                    
                     <th>Date</th>
                   
                </tr>
            </thead>
            <tbody>
                                        <?php
                                            $count = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                        ?>

                                        <!-- script -->
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                    
                                                $('#e<?php echo $id; ?>').tooltip('show')
                                                $('#e<?php echo $id; ?>').tooltip('hide')
                                            });
                                        </script>
                                        <!-- end script -->
                                        <!-- script -->
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                    
                                                $('#d<?php echo $id; ?>').tooltip('show')
                                                $('#d<?php echo $id; ?>').tooltip('hide')
                                            });
                                        </script>
                                        


<?php
foreach ($result as $row) {
     
    ?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['branch']; ?></td>
         <td>5</td>
        <td><?php echo $row['attend_que']; ?></td>
        <td><?php echo $row['obtained_marks']; ?></td>
        <td><?php echo $row['exam_date']; ?></td>
         <?php $count++; } ?>
        
        </tr>
        
<?php   
}
?>

  </tbody>
    
</table>
                                

</div>
</body>
</html>
