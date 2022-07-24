<?php
class Database {
    private $host = 'localhost';
    private $database = 'blog';
    private $username = 'root';
    private $password = '';
    protected $connection;

    function __construct() {
        try {
            $this->connection = new PDO("mysql:host={$this->host};",$this->username,$this->password);
            
            $this->connection->exec("CREATE DATABASE IF NOT EXISTS $this->database");
            $this->connection->exec("use $this->database");
            $this->connection->exec("CREATE TABLE IF NOT EXISTS blogs(
                        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        title VARCHAR(255) NULL,
                        description VARCHAR(1000) NULL,
                        createdAt VARCHAR(50) NULL,
                        image VARCHAR(1000) NULL
            )");

            $this->connection->exec("CREATE TABLE IF NOT EXISTS user(
                        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        username VARCHAR(50) NOT NULL,
                        password VARCHAR(60) NOT NULL,
                        blogs INT(11) NOT NULL default '0'
            )");

        } catch(PDOException $err){
            echo $err->getMessage();
        }
    }

    public function selectRows() {
        $sql = $this->connection->prepare("SELECT * FROM blogs");
        $sql->execute();
        $row =  $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectIDDesc() {
    $sql = $this->connection->prepare("SELECT * FROM blogs ORDER BY id DESC");
    $sql->execute();
    }
}

?>