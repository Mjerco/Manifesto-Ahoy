<?php
include("./scripts/connect_db.php");
?>
<link href="./CSS/Nick.css" rel="stylesheet">

<div class="custom-">
    <div class="">
        <div class="">
            <h1>Nieuwsberichten</h1>
            <br>
            <div class="row">
            </div>
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
                        <h6 class='artikele'>aangemaakt op " . $datetime . "</h6>
                        " 
                    . "</div>
                    <div class='col-12 col-md-3 image'>
                        <img src='./" . $image . "' draggable='false'>
                    </div>
                    <div class='col-12 col-md-9'> 
                        <div class='row'>  
                            <div class='col-12'>
                                <a href='index.php?content=artikel&id={$record["id"]}'>" . $record['title'] . "</a>
                            </div>
                            </div>
                            <div class='row'>  
                                <div class='col-12 col-md-8'>" . $record['introduction'] . "</div>
                                <div class='col-12 col-md-4 read-more'>
                                    <a href='index.php?content=artikel&id={$record["id"]}'>Lees meer...</a>
                                </div>
                            </div>
                        </div>";
            }
            ?>
        </div>

    </div>
</div>