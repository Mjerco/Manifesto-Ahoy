<?php
include("./scripts/connect_db.php");

$id = $_GET['id'];
$sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id WHERE id = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);

if ($record['image'] != NULL) {
    $image = "img/" . $record['image'];
} else {
    $image = 'default-placeholder.png';
}
?>
<link href="./CSS/Nick.css" rel="stylesheet">

<div class="article-page">
    <div class="container article-container">
        <div class="row banner p-2">
            <img src="./<?php echo $image; ?>" draggable="false" class="artikle-img">
            <div class="custom-hr"></div>
        </div>
        <div class="container article">
            <h1><?php echo $record['title']; ?></h1>
            <p><?php echo $record['introduction']; ?></p>
            <p><?php echo $record['article']; ?></p>
        </div>
    </div>
</div>