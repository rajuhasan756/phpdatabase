<?php
    $server = "localhost";
    $userName = "root";
    $password = "";

    $mysqli = new mysqli($server, $userName, $password);
    
    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }else {
        echo "Connection established <br>";
    }

    $sql = "CREATE database if not exists movies";

    if($mysqli->query($sql)){
        echo "Database created successfully";
    } else {
        echo "Error creating database".$mysqli->error;
    }
    $mysqli->close();
?>