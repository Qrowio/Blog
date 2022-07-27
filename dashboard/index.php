<?php 
include "../includes/handler.inc.php";
$database = new Database();
session_start();
$session = new Session();
$session->dashboard();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ethereal Blog</title>
    <link rel="icon" type="image/png" href="../assets/img/ethereal-notext.svg">
    <meta name="title" content="Ethereal Blog">
    <meta name="description" content="Get all the up to date information on the Ethereal Blogging system!">
    <meta name="keywords" content="blog, technology, cool, php, template">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.1/ckeditor.js"></script>
</head>

<body>
    <div class="container" style="margin-top: 3rem;padding: 0px;max-width: 960px;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="index-heading">Heyyo! 👋<br></h1>
                <h1 class="index-desc grey">Welcome to the Ethereal Blog software! This is an open source project that I hope you enjoy. I have been working on this to increase my PHP ability and it has come along well. If you need help, please check out the links below. Have fun!<br></h1>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 2rem;max-width: 960px;">
        <div class="row">
        <div class="col-md-12" style="padding: 0px;margin-bottom: 1rem;"><a class="quick-link" href="https://github.com/Qrowio/Blog">
                    <div class="index-main-sec-div">
                        <div class="left-div"><img src="../assets/img/69book.svg"></div>
                        <div style="width: 100%;padding-left: 20px;display: flex;align-items: center;">
                            <div class="div-2">
                                <h1 class="quick-title">Read the GitHub Page</h1>
                                <h1 class="quick-desc grey">Get a basic understanding of how to go around using this blog system.<br></h1>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="col-md-12" style="padding: 0px;margin-bottom: 1rem;"><a class="quick-link" href="create.php">
                    <div class="index-main-sec-div">
                        <div class="left-div orange"><img src="../assets/img/writing.svg"></div>
                        <div style="width: 100%;padding-left: 20px;display: flex;align-items: center;">
                            <div class="div-2">
                                <h1 class="quick-title">Create a blog</h1>
                                <h1 class="quick-desc grey">Use our panel to make a blog for your website.<br></h1>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="col-md-12" style="padding: 0px;margin-bottom: 1rem;"><a class="quick-link" href="view.php">
                    <div class="index-main-sec-div">
                        <div class="left-div purple"><img src="../assets/img/blog.svg"></div>
                        <div style="width: 100%;padding-left: 20px;display: flex;align-items: center;">
                            <div class="div-2">
                                <h1 class="quick-title">See your blogs</h1>
                                <h1 class="quick-desc grey">View all the blogs you have created.<br></h1>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="col-md-12" style="padding: 0px;margin-bottom: 1rem;"><a class="quick-link" href="https://discord.gg/qrow">
                    <div class="index-main-sec-div">
                        <div class="left-div green"><img src="../assets/img/heart.svg"></div>
                        <div style="width: 100%;padding-left: 20px;display: flex;align-items: center;">
                            <div class="div-2">
                                <h1 class="quick-title">Support Server</h1>
                                <h1 class="quick-desc grey">My Discord community for other templates and support!<br></h1>
                            </div>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.js"></script>
</body>

</html>