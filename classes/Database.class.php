<?php
class Database {
    private $host = 'localhost';
    private $database = 'blog';
    private $username = 'root';
    private $password = '';
    private $sql;
    protected $connection;
    private $row;

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

    public function selectIDDesc() {
        $this->sql = $this->connection->prepare("SELECT * FROM blogs ORDER BY id DESC");
        $this->sql->execute();
        return $this->sql;
    }

    public function blogPage() {
        $this->sql = $this->connection->prepare("SELECT * FROM blogs WHERE id = :id ORDER BY ID DESC");
        $this->sql->execute([':id' => $_GET['id']]); 
        $this->row = $this->sql->fetch(PDO::FETCH_ASSOC);
        return $this->row;
    }

    public function search() {
        $this->sql = $this->connection->prepare("SELECT * FROM blogs WHERE title LIKE :name");
        $this->sql->execute([":name" => '%'.$_POST['search'].'%']);
        $this->row = $this->sql->fetchAll(PDO::FETCH_ASSOC);
        return $this->row;
    }
}

?>