<?php 

    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "malcolmlismore_db";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
        die("Connection Error:" .mysqli_connect_error());
    }