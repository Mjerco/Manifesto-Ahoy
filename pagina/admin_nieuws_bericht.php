<?php
include("./scripts/connect_db.php");
?>
<link href="./CSS/Nick.css" rel="stylesheet">
<div class="">
    <div class="">
        <div class="">
            <h1 class="text">Admin Nieuwsberichten</h1>
            <br>
            <div class="row">
                <!-- <img src="../img/streep.svg" alt="streep" class="streep img-fluid" draggable="false"> -->
            </div>
        </div>
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
<div class="container ">
    <div class=''></div>
    <div class="">
        <!-- <div class="row categories sticky-top">
            <div class="col-4 col-md-3 categories-tab"><a href="#" class="categories-button">Alle artikelen </a></div>
            <?php
            // Make connection with database.
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn, $sql);


            while ($record = mysqli_fetch_assoc($result)) {
                echo "<div class='col-4 col-md-3 categories-tab'><a href='#' class='categories-button'>" . $record['name'] . "</a></div>";
            } 
            if (mysqli_num_rows($result) > 5) {
               
                

            }?>
            
        </div> -->
        <!-- <div class='row' style='background-color:white;'><a href="./index.php?content=admin_nieuwsberichten">admin pagina</a></div> -->
        <div class="row ">
            <div class=''></div>

            <?php
            // Make connection with database.
            $sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id ORDER BY creation_date DESC";
            $result = mysqli_query($conn, $sql);

            

            while ($record = mysqli_fetch_assoc($result)) {
                // Check if image is uploaded.
                if ($record['image'] != NULL) {
                    $image = "img/" . $record['image'];
                } else {
                    $image = 'default-placeholder.png';
                }
                
                // Compile datetime format.
                $date = date("d M Y", strtotime($record['creation_date']));
                $time = date("H:i", strtotime($record['creation_date']));
                $datetime = $date . " om " . $time;

               

                // Echo all articles.
                echo "<div class='row '>
                        <h6 class='artikele'>Laatst bewerkt op " . $datetime . "</h6>
                        " // <h6 class='category'>Categorie: " . $record['category_name'] . "</h6> 
                    . "</div>
                    <div class='col-12 col-md-3 image'>
                        <img src='./" . $image . "' draggable='false'>
                    </div>
                    <div class='col-12 col-md-9 '> 
                        <div class='row'>  
                            <div class='col-12 '>
                                <a href='index.php?content=artikel&id={$record["id"]}'>" . $record['title'] . "</a>
                            </div>
                            </div>
                            <div class='row'>  
                                <div class='col-12 col-md-8 introduction'>" . $record['introduction'] . "</div>
                                <div class='col-12 col-md-4 read-more'>
                                    <a href='index.php?content=artikel&id={$record["id"]}'>Lees meer...</a>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                        <a href='index.php?content=aanpassen_nieuwsberichten&id={$record["id"]}'>aanpasen bericht</a>
                    </div>
                    <div class='row'>
                        <a href='index.php?content=delete_news_script&id={$record["id"]}'>delete bericht</a>
                    </div>";
            }
            ?>
        </div>

    </div>
</div>