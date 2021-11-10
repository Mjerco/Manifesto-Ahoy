<?php
include("./scripts/connect_db.php");
?>

<div class="news-page">
    <div class="banner">
        <div class="header">
            <h1>Nieuwsberichten</h1>
            <br>
            <div class="row">
                <!-- <img src="../img/streep.svg" alt="streep" class="streep img-fluid" draggable="false"> -->
            </div>
        </div>
    </div>
    <div class="container articles">
        <!-- <div class="row categories sticky-top">
            <div class="col-4 col-md-3 categories-tab"><a href="#" class="categories-button">Alle artikelen </a></div>
            <?php
            // Make connection with database.
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn, $sql);

            while ($record = mysqli_fetch_assoc($result)) {
                echo "<div class='col-4 col-md-3 categories-tab'><a href='#' class='categories-button'>" . $record['category_name'] . "</a></div>";
            } 
            if (mysqli_num_rows($result) > 5) {
               
            }?>
        </div> -->
        <!-- <div class='row' style='background-color:white;'><a href="./index.php?content=admin_nieuwsberichten">admin pagina</a></div> -->
        <div class="row articles-container">
            <div class='custom-hr'></div>

            <?php
            // Make connection with database.
            $sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id ORDER BY news_date DESC";
            $result = mysqli_query($conn, $sql);

            while ($record = mysqli_fetch_assoc($result)) {
                // Check if image is uploaded.
                if ($record['news_image'] != NULL) {
                    $news_image = "news_uploads/" . $record['news_image'];
                } else {
                    $news_image = 'default-placeholder.png';
                }

                // Compile datetime format.
                $news_date = date("d M Y", strtotime($record['news_date']));
                $news_time = date("H:i", strtotime($record['news_date']));
                $news_datetime = $news_date . " om " . $news_time;

                // Echo all articles.
                echo "<div class='row info-row'>
                        <h6 class='datetime'>Laatst bewerkt op " . $news_datetime . "</h6>
                        " // <h6 class='category'>Categorie: " . $record['category_name'] . "</h6> 
                    . "</div>
                    <div class='col-12 col-md-3 image-row'>
                        <img src='../img/" . $news_image . "' draggable='false'>
                    </div>
                    <div class='col-12 col-md-9 article-row'> 
                        <div class='row'>  
                            <div class='col-12 title'>
                                <a href='index.php?content=artikel&id={$record["news_id"]}'>" . $record['news_title'] . "</a>
                            </div>
                            </div>
                            <div class='row'>  
                                <div class='col-12 col-md-8 introduction'>" . $record['news_introduction'] . "</div>
                                <div class='col-12 col-md-4 read-more'>
                                    <a href='index.php?content=artikel&id={$record["news_id"]}'>Lees meer...</a>
                                </div>
                            </div>
                        </div>
                    <div class='custom-hr'></div>";
            }
            ?>
        </div>
        <!-- <div class="row" style="height:100px;text-align:center;background-color:white;">
            <p>< 1 2 3 4 ></p>
        </div> -->
    </div>
</div>