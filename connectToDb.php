<?php
    $servername = "localhost";
    $server_user = "root";
    $server_password = "";
    
    // $servername = "sql100.epizy.com";
    // $server_user = "epiz_31889662";
    // $server_password = "AXLvqIMgchve";

    // Create connection
    $conn = mysqli_connect($servername, $server_user, $server_password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE if not exists ec_users";
    if (!mysqli_query($conn, $sql)) {
        echo "Error creating database: " . mysqli_error($conn);
    }
    $dbname='ec_users';
    // $dbname='epiz_31889662_ec';

    // Create Table
    $conn = mysqli_connect($servername, $server_user, $server_password,$dbname);
    $sql = "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
        `username` varchar(255) NOT NULL,  
        `email` varchar(50) DEFAULT NULL,
        `password` varchar(255) DEFAULT NULL,
        `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
    )";
    
    if(!mysqli_query($conn, $sql)){
        echo "Error creating table: " . mysqli_error($conn);
    }

?>