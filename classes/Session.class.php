<?php

class Session {
    function logIn(){
        if(isset($_SESSION['blogger'])){
            header('location: ../Blog/dashboard/index.php');
        } else {

        }
    }

    function dashboard(){
        if(!isset($_SESSION['blogger'])){
            header('location: ../index.php');
        }
    }
}

?>