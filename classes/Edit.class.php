<?php

class Edit extends Database {
    private $id;
    private $image;
    private $row;
    private $title;
    private $description;

    function info() {
        return $this->row;
    }
    
    function __construct() {
        parent::__construct();
        $this->sql = $this->connection->prepare("SELECT * FROM blogs WHERE id = :id");
        $this->sql->execute([':id' => $_GET['id']]); 
        $this->row = $this->sql->fetch(PDO::FETCH_ASSOC);
        if(isset($_POST['delete'])){
            $this->image = $this->row['image'];
            echo $this->image;
            unlink($this->image);
            $this->sql = $this->connection->prepare("DELETE FROM blogs WHERE id = :id");
            $this->sql->execute([':id' => $_GET['id']]); 
            $this->row = $this->sql->fetch(PDO::FETCH_ASSOC);
            header('location: view.php');
        }

        if(isset($_POST['edit'])){
            $this->title = filter_var($_POST['blog_title'], FILTER_SANITIZE_STRING);
            $this->description = $_POST['editor1'];
            $this->image = $_FILES["file"];
            if(!empty($this->title && $this->description && $this->image)){
                $this->sql = $this->connection->prepare("UPDATE blogs SET title = '$this->title', description = '$this->description' WHERE id = :id");
                $this->sql->execute([':id' => $_GET['id']]);
                header("Refresh:0");
            }
        }
    }
}