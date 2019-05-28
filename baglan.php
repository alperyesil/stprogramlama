<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sinema";


    $baglan = new mysqli($servername, $username, $password, $dbname);

    if ($baglan->connect_error) {
        die("Bağlantı Başarısız:  " . $baglan->connect_error);
    }
?>