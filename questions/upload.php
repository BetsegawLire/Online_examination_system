<?php
 include 'filesLogic.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>send exam </title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data" >
          <h3>Send File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">send</button>
        </form>
      </div>
    </div>
  </body>
</html>
