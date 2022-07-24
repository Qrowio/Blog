<?php

class Create extends Database {
    private $title;
    private $description;
    private $created;
    private $username;
    private $dir;
    private $file;
    private $type;
    private $sql;
    
    function __construct() {
        parent::__construct();
        if(isset($_POST['submit'])){
            $this->title = filter_var($_POST['blog_title'], FILTER_SANITIZE_STRING);
            $this->description = $_POST['editor1'];
            $this->created = new DateTime();
            $this->created = $this->created->format('l d M Y');
            $this->username = $_SESSION['blogger']['username'];
            $this->dir = '../assets/img/uploads/';
            $this->file = $this->dir . basename($_FILES["file"]["name"]);
            $this->type = strtolower(pathinfo($this->file,PATHINFO_EXTENSION));

            if(empty($_POST['blog_title'])){
                echo "Please enter a blog title";
            } else if (empty($_POST['editor1'])){
                echo "Please enter a description";
            } else {
                try {
                    if(file_exists($this->file)) {
                        echo "Sorry, file already exists.";
                    } else if($this->type != "jpg" && $this->type != "png" && $this->type != "gif" && $this->type != "jpeg"){
                        echo "Please upload a file type that is JPG, PNG, GIF or Jpeg.";
                    } else {
                        move_uploaded_file($_FILES["file"]["tmp_name"], $this->file);
                        $this->sql = $this->connection->prepare("INSERT INTO blogs (title,description,createdAt,image) VALUES (:title,:desc,:created,:image)");
                        $this->sql->execute([
                        ':title' => $this->title,
                        ':desc' => $this->description,
                        ':created' => $this->created,
                        ':image' => $this->file,
                        ]);

                        $this->sql = $this->connection->prepare("UPDATE user SET blogs = blogs + 1 WHERE username = :username");
                        $this->sql->execute([':username' => $this->username]);
                    } 
                } catch(PDOException $e) {
                    echo $e;
                }
            }
        }
    }
}