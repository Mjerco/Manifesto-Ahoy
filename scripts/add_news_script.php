<?php
include("../scripts/connect_db.php");
include("../scripts/functions.php");

// Sanitize POST arrays
$title = sanitize($_POST['title']);
$introduction = sanitize($_POST['introduction']);
$article = sanitize($_POST['article']);
$category = sanitize($_POST['category']);

// Get date-time
date_default_timezone_set("Europe/Amsterdam");
$datetime = date("Y-m-d H:i:s");

$image_name = null;

// Check if POST arrays are not empty
if ($title != null && $introduction != null && $article != null && $category != null) {

  // Upload image
  $target_dir = "../img/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $image_name = $_FILES['image']["name"];
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  // Insert into table news
  $sql = "INSERT INTO `news` (`id`, `title`, `image`, `creation_date`, `introduction`, `article`, `category_id`) 
        VALUES (NULL, '$title', '$image_name', '$datetime', '$introduction', '$article', '$category');";
  var_dump($sql);
  // Run query on database
  if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php?content=home");
  }
} else {
  header("Location: ../index.php?content=toevoegen_nieuwsberichten");
}

