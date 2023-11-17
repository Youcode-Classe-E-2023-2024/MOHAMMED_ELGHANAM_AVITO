<?php
    $connect = mysqli_connect('localhost','root','');
    $CREATE_DB = "CREATE DATABASE IF NOT EXISTS AVITO";
    $query = mysqli_query($connect,$CREATE_DB);
    mysqli_select_db($connect, 'AVITO');
    $seq = "CREATE TABLE IF NOT EXISTS MED (id INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(255) NOT NULL,description VARCHAR(255) NOT NULL,prix INT NOT NULL)";
    $query1 = mysqli_query($connect,$seq);
    
?>