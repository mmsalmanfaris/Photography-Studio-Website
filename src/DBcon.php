<?php 
    $con = new mysqli('Localhost', 'root', '', 'malcolmlismore_db');

    if ($con->connect_error) {
        die("Connection Failed");
    }
?>