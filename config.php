<?php
$ip = 'localhost';
$name = 'blog';
$username = 'root';
$password = '';

try {
    $connection = new PDO("mysql:host={$ip};", $username, $password);

    $connection->exec("CREATE DATABASE IF NOT EXISTS $name");
    $connection->exec("use $name");

    $connection->exec("CREATE TABLE IF NOT EXISTS blogs(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NULL,
        description VARCHAR(1000) NULL,
        createdAt VARCHAR(50) NULL,
        image VARCHAR(1000) NULL
    )");

    $connection->exec("CREATE TABLE IF NOT EXISTS user(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(60) NOT NULL,
        blogs INT(11) NOT NULL default '0'
    )");

} catch(PDOException $err){
        echo $err->getMessage();
}

$url = '';
?>