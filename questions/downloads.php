<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <title>Download files</title>
</head>
<body>
<div class="container">
<table class="table">
<thead class="thead-dark">
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php $sn=1;?>
  <?php foreach ($files as $file): ?>
    <!-- <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a class="btn btn-primary" href="downloads.php?file_id='<?php echo $file['id'] ?>'" class="text-light">Download</a></td>
    </tr> -->
<?php
    echo'<tr>
    
        <td>'. $sn++.'</td>
        <td>'.$file['name'].'</td>
        <td>'.floor($file['size']/1000).'</td>
       
        <td>'.$file['downloads'].'</td>
        
        <td>
           <button class="btn btn-primary"><a href="downloads.php? file_id='.$file['id'].'" class="text-light">Download</a></button>

           </td>
    </tr>';
    ?>
  <?php endforeach;?>

</tbody>
</table>
</div>
</body>
</html>

