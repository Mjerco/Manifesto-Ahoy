<?php
    // session id controleren

    include("./scripts/connect_db.php");

    //intval haalt de int uit de url
    $news_id = intval($_GET['id']);

    $sql = "DELETE FROM news WHERE news_id = $news_id";
    if ($result = mysqli_query($conn, $sql)) {
    header("Location: ../index.php?content=admin_nieuwsberichten");
    } else {

    }
?>