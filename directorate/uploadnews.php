
<?php
include("header.php");
 
 include("db.php");

?>
<?php

if(isset($_POST['submit'])){
// Get news details from form
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];

// Upload image to server
$target_dir = "uploads/";
$target_file = $target_dir . basename($image);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Insert news details into database
$sql = "INSERT INTO news (title, description, image)
VALUES ('$title', '$description', '$image')";

if (mysqli_query($conn, $sql)) {
  echo "News uploaded successfully";
} else {
  echo "Error uploading news: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>upload news</title>
  </head>
  <body style="margin-top:100px;">
    <div class="card m-5">
      <div class="card-header">
        <h1 class="text-center"> Upload News</h1>

      </div>
      <div class="card-body text-center">
      <form action="uploadnews.php" method="post" enctype="multipart/form-data">
  <div>
    <div>
  <label for="title">Title:</label>

    </div>
  <input type="text" name="title" id="title" required>
  </div>

  <div>
    <div>
  <label for="description">Description:</label>

    </div>
  <textarea name="description" id="description" required></textarea>
  </div>

  <div>
    <div>
  <label for="image">Image:</label>

    </div>
    <div>
  <input type="file" name="image" id="image" required>

    </div>
  </div>

  <input type="submit" class="btn btn-primary m-3" name="submit" value="Upload News">
</form>
      </div>
    </div>
    


   
  </body>
</html>