<?php
    include 'config.php';

    $tableSql_std ="CREATE TABLE IF NOT EXISTS movies(
        id INT(5) AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        year int(20) NOT NULL
    )";
    $tableSql_dept ="CREATE TABLE IF NOT EXISTS directors(
        id INT(5) PRIMARY KEY,
        name VARCHAR(20) NOT NULL
    )";
    $tableSql_course ="CREATE TABLE IF NOT EXISTS stars(
        id INT(5) PRIMARY KEY,
        name VARCHAR(20) NOT NULL
    )";
    $tableSql_std_course ="CREATE TABLE IF NOT EXISTS movies_directors(
        movies_id INT,
        directors_id INT,
        FOREIGN KEY (movies_id) REFERENCES movies (id),
        FOREIGN KEY (directors_id) REFERENCES directors  (id)
    )";
    $tableSql_std_dept ="CREATE TABLE IF NOT EXISTS movies_stars(
        movies_id INT,
        stars_id INT,
        FOREIGN KEY (movies_id) REFERENCES movies (id),
        FOREIGN KEY (stars_id) REFERENCES stars (id)
    )";

    if($mysqli->query($tableSql_std)){
        echo "<br>Movies Table Created Successfully<br>";
    } else {
        echo "<br>Movies table cannot be created: ".$mysqli->error;
    }
    if($mysqli->query($tableSql_course)){
        echo "<br>Directors Table Created Successfully<br>";
    } else {
        echo "<br>Directors table cannot be created: ".$mysqli->error;
    }
    if($mysqli->query($tableSql_dept)){
        echo "<br>stars Table Created Successfully<br>";
    } else {
        echo "<br>stars table cannot be created: ".$mysqli->error;
    }
    if($mysqli->query($tableSql_std_course)){
        echo "<br>movies_directors Table Created Successfully<br>";
    } else {
        echo "<br>movies_directors table cannot be created: ".$mysqli->error;
    }
    if($mysqli->query($tableSql_std_dept)){
        echo "<br> movies_stars Table Created Successfully<br>";
    } else {
        echo " movies_stars table cannot be created: ".$mysqli->error;
    }

    $mysqli->close();

?>