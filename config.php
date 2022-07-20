<?php
$ip = 'localhost';
$name = 'blog';
$username = 'root';
$password = '';

$connection = new PDO("mysql:host={$ip};dbname={$name}", $username, $password);

$url = '';
?>