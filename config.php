<?php
    $server = "localhost";
    $userName = "root";
    $password = "";
    $database = "movies";

    $mysqli = new mysqli($server, $userName, $password, $database);

    if($mysqli->connect_errno){
        echo "Fail to connect with database: ".$mysqli->connect_error;
    } else {
        echo "Connection established.<br>";
    }
?>