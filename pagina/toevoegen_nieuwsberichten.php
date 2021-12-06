<?php
include("./scripts/functions.php");
?>

</div>
</div>
<div class="add-news-page">
    <div class="header">
        <h1>Artikel toevoegen</h1>
        <br>
        <div class="row">
            <!-- <img src="../img/streep.svg" alt="streep" class="streep img-fluid" draggable="false"> -->
        </div>
    </div>
    <div class="container">
        <form class="row" action="./scripts/add_news_script.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Titel</label>
                <div class="col-sm-9 col-lg-10">
                    <textarea name="title" type="text" class="form-control" maxlength="100" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Inleiding</label>
                <div class="col-sm-9 col-lg-10">
                    <textarea name="introduction" type="text" class="form-control" rows="2" maxlength="200" required></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-lg-2 col-form-label">Artikel</label>
                <div class="col-sm-9 col-lg-10">
                    <textarea name="article" type="text" class="form-control" rows="4" required></textarea>
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
            <button type="submit" class="btn p-4">Toevoegen</button>
        </form>
    </div>
</div>