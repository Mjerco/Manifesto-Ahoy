</div>
</div>
<?php
include("./scripts/connect_db.php");
include("./scripts/functions.php");

$id = sanitize($_GET['id']);

$sql = "SELECT * FROM `news` WHERE `id` = {$id};";
$result = mysqli_query($conn, $sql);
$record = mysqli_fetch_assoc($result);
?>
<div class="change-news-page">
    <div class="header">
        <h1>Artikel wijzigen</h1>
        <br>
        <div class="row">
            <!-- <img src="../img/streep.svg" alt="streep" class="streep img-fluid" draggable="false"> -->
        </div>
    </div>
    <div class="container">
        <form class="row" action="./scripts/change_news_script.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Titel</label>
                <div class="col-sm-9 col-lg-10">
                    <input name="title" type="text" class="form-control" maxlength="100" required value="<?php echo $record['title']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Inleiding</label>
                <div class="col-sm-9 col-lg-10">
                    <input name="introduction" type="text" class="form-control" maxlength="200" required value="<?php echo $record['introduction']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Artikel</label>
                <div class="col-sm-9 col-lg-10">
                    <input name="article" type="text" class="form-control" rows="4" required value="<?php echo $record['article']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Afbeelding</label>
                <div class="col-sm-9 col-lg-10">
                    <input name="image" class="form-control" type="file">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Categorie</label>
                <div class="col-sm-9 col-lg-10">
                    <select class="form-select" name="category">
                        <?php
                        include("./scripts/connect_db.php");

                        $sql = "SELECT * FROM categories";
                        $result = mysqli_query($conn, $sql);
                        while ($record = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $record['category_id'] . "'>" . $record['name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <input name="id" class="form-control" type="hidden" value="<?php echo $id; ?>">
            <button type="submit" class="btn p-4">Wijzigen</button>
        </form>
    </div>
</div>