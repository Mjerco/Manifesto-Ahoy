<?php
include("../scripts/connect_db.php");
include("../scripts/functions.php");

// Sanitize POST arrays
$category = sanitize($_POST['category']);

// Insert into table news
$sql = "INSERT INTO `categories` (`category_id`, `category_name`) 
        VALUES (NULL, '$category');";

// Check if POST array is empty 
if ($category != null) {
    // If POST array is not empty
    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php?content=admin_categorie");
    }
} // If POST array is empty 
else {
    header("Location: ../index.php?content=admin_categorie");
}