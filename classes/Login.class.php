<?php

class Login extends Database {
    private $username;
    private $password;
    private $sql;

    function __construct() {
        if(isset($_POST['submit'])){
            parent::__construct();
            $this->username = filter_var($_POST['username'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $this->password = strip_tags($_POST['password']);
            if(empty($this->username)){
                echo "Please submit a username";
            } else if (empty($this->password)){
                echo "Please submit a password";
            } else {
                try {
                    $this->sql = $this->connection->prepare("SELECT * FROM user WHERE username = :username");
                    $this->sql->execute([':username' => $this->username]);
                    $row = $this->sql->fetch(PDO::FETCH_ASSOC);
                    if($this->sql->rowCount() > 0){
                        if(password_verify($_POST['password'], $row['password'])){
                            $_SESSION['blogger']['username'] = $row['username'];
                            $_SESSION['blogger']['id'] = $row['id'];
                            $_SESSION['blogger']['blogs'] = $row['blogs'];
                            header('location: ../Blog/dashboard/index.php');
                        } else {
                            echo "Wrong credentials!";
                        }
                    } else {
                        echo "Wrong credentials!";
                    }
                } catch(PDOException $e) {
    
                }
            }
        }
    }
}

?>