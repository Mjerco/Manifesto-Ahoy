<?php
include("./scripts/functions.php");
//    is_autorized(["1"]);
?>

</div>
</div>
<div class="add-category-page">
    <div class="header">
        <h1>Categorieën beheren</h1>
        <br>
        <div class="row">
            <!-- <img src="../img/streep.svg" alt="streep" class="streep img-fluid" draggable="false"> -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <form class="row" action="./scripts/add_category_script.php" method="post">
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label">Categorie</label>
                        <div class="col-lg-9">
                            <input name="category" type="text" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn p-4">Toevoegen</button>
                </form>
            </div>
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-lg-5">
                <h1>Categorieën</h1>
                <?php
                include("./scripts/connect_db.php");

                $sql = "SELECT * FROM categories ORDER BY category_id DESC";
                $result = mysqli_query($conn, $sql);
                while ($record = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-12'>
                            <span>" . $record['category_name'] . "</span>
                            <a href='./index.php?content=delete_category_script&id={$record["category_id"]}' style='color:#333'><i class='bi bi-trash-fill'></i></a>
                        </div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>