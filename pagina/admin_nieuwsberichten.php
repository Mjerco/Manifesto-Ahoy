<?php
include("./scripts/functions.php");
//    is_autorized(["1"]);
?>

</div>
</div>
<div class="admin-news-page">
    <div class="header">
        <h1>Admin pagina</h1>
        <br>
        <div class="row">
            <!-- <img src="../img/streep.svg" alt="streep" class="streep img-fluid" draggable="false"> -->
        </div>
    </div>
    <div class="container container-button">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-5">
                <a href="index.php?content=toevoegen_nieuwsberichten" class="button">Voeg artikel toe</a>
            </div>
            <div class="col-12 col-md-6 col-xl-5">
                <a href="index.php?content=admin_categorie" class="button">Categorieën beheren</a>
            </div>
        </div>
    </div>
    <div class="container articles-container">
        <div class='custom-hr'></div>
        <?php
        include("./scripts/connect_db.php");

        // $sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id ORDER BY news_date DESC";
        // $result = mysqli_query($conn, $sql);
        // while ($record = mysqli_fetch_assoc($result)) {
        //     // Check if image is uploaded.
        //     if ($record['news_image'] != NULL) {
        //         $news_image = "news_uploads/" . $record['news_image'];
        //     } else {
        //         $news_image = 'default-placeholder.png';
        //     }

        //     echo "<div class='container container-article'>
        //             <div class='row'>
        //                 <span>Laatst bewerkt op: " . $record['news_date'] . "</span>
        //                 <span>Categorie: " . $record['category_name'] . "</span>
        //                 <div class='col-3'><img src='../img/" . $news_image . "' style='width:300px;' draggable='false'></div>
        //                 <div class='col-3'>    
        //                     <div class=''>" . $record['news_title'] . "</div>
        //                     <div class=''>" . $record['news_introduction'] . "</div>
        //                 </div>
        //                 <div class='col-5'>" . $record['news_article'] . "</div>
        //                 <div class='col-1'>
        //                     <div class='row'>
        //                         <a href='./index.php?content=aanpassen_nieuwsberichten&id={$record["news_id"]}'><i class='bi bi-pencil-fill'></i></a>
        //                     </div>
        //                     <div class='row'>
        //                         <a href='./index.php?content=delete_news_script&id={$record["news_id"]}'><i class='bi bi-trash-fill'></i></a>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     <br>";
        // }
        // 
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
                        <h6 class='category'>Categorie: " . $record['category_name'] . "</h6> 
                        <div class='col-12 col-md-3 image-row'>
                            <img src='../img/" . $news_image . "' draggable='false'>
                        </div>
                        <div class='col-12 col-md-9 article-row'> 
                            <div class='row'>  
                                <div class='col-12 title'>
                                    <a href='./index.php?content=aanpassen_nieuwsberichten&id={$record["news_id"]}'>" . $record['news_title'] . "</a>
                                </div>
                            </div>
                            <div class='row'>  
                                <div class='col-12 col-md-8 introduction'>" . $record['news_introduction'] . "</div>
                                <div class='col-12 col-md-2 read-more'>
                                    <a href='./index.php?content=aanpassen_nieuwsberichten&id={$record["news_id"]}'><i class='bi bi-pencil-fill'></i></a>
                                    <a href='./index.php?content=delete_news_script&id={$record["news_id"]}'><i class='bi bi-trash-fill'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='custom-hr'></div>";
        }
        ?>
    </div>
</div>