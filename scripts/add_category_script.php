<?php
include("../scripts/connect_db.php");
include("../scripts/functions.php");

// Sanitize POST arrays
$category = sanitize($_POST['category']);

// Insert into table news
$sql = "INSERT INTO `categories` (`category_id`, `name`) 
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

// Error Code: 1452. Cannot add or update a child row: a foreign key constraint fails (`manifestoahoy`.`news`, CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`))
