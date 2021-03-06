<?php
include "includes/handler.inc.php";
session_start();
$database = new Database();
$session = new Session();
$login = new Login();
$session->logIn();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ethereal Blog</title>
    <link rel="icon" type="image/png" href="./assets/img/ethereal-notext.svg">
    <meta name="title" content="Ethereal Blog">
    <meta name="description" content="Get all the up to date information on the Ethereal Blogging system!">
    <meta name="keywords" content="blog, technology, cool, php, template">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.1/ckeditor.js"></script>
</head>

<body class="background">
    <div class="login-div">
        <h1 class="login-name">Login</h1>
        <h1 class="login-under grey">Welcome back! Please login.</h1>
        <form action="login.php" method="post">
            <div class="input-div">
                <h1 class="input-head grey">Username</h1><i class="fas fa-user icon"></i><input class="form-control input" name="username" type="username" placeholder="Killua">
            </div>
            <div class="input-div">
                <h1 class="input-head grey">Password</h1><i class="fas fa-lock icon"></i><input class="form-control input" name="password" type="password" placeholder="Password">
            </div><button class="btn btn-primary form-button" name="submit" type="submit" style="margin-top: 2rem;">Sign in</button>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</body>

</html>