<?php
    // Database credentials
    $servername = "localhost";
    $username = "manager";
    $password = "@Ahoy";
    $dbname = "manifestoahoy";
    
    //met deze functie maak je contact met de msql-server
    $conn = mysqli_connect($servername, $username , $password , $dbname) or die ("Error");
?>