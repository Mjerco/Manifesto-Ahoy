<?php
    include("./scripts/connect_db.php");

    //intval haalt de int uit de url
    $category_id = intval($_GET['id']);

    $sql = "DELETE FROM categories WHERE category_id = $category_id";
    if ($result = mysqli_query($conn, $sql)) {
    header("Location: ../index.php?content=admin_categorie");
    } else {

    }
?>