<?php
include("./scripts/connect_db.php");

$id = $_GET['id'];
$sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id WHERE news_id = $id";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);

if ($record['news_image'] != NULL) {
    $news_image = "news_uploads/" . $record['news_image'];
} else {
    $news_image = 'default-placeholder.png';
}
?>

<div class="article-page">
    <div class="container article-container">
        <div class="row banner p-2">
            <img src="../img/<?php echo $news_image; ?>" draggable="false">
            <div class="custom-hr"></div>
        </div>
        <div class="container article">
            <h1><?php echo $record['news_title']; ?></h1>
            <p><?php echo $record['news_introduction']; ?></p>
            <p><?php echo $record['news_article']; ?></p>
        </div>
    </div>
</div>