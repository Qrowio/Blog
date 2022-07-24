<?php 
include "../includes/handler.inc.php";
$database = new Database();
session_start();
$session = new Session();
$session->dashboard();

$statement = $connection->prepare("SELECT * FROM blogs ORDER BY id DESC");
$statement->execute();
?><!DOCTYPE html>
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
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/60.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.1/ckeditor.js"></script>
</head>

<body>
    <div class="container" style="margin-top: 3rem;padding: 0px;max-width: 960px;">
        <div class="row">
           <div class="col-md-12" style="padding: 0px;"><a href="../dashboard/index.php"><button class="btn btn-primary goback" type="button" style="margin-bottom: 4rem;">Go Back</button></a>
                <h1 class="index-heading">View All Blogs<br></h1>
                <h1 class="index-desc grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo sollicitudin eu volutpat aliquam mauris, pellentesque sit placerat urna. Vitae dictum tincidunt ut ornare facilisis sed magna pulvinar elementum.<br></h1>
                <hr class="create-hr">
            </div>
        </div>
    </div>
    <div class="container" style="padding: 0px;max-width: 960px;margin-top: 1rem;">
        <div class="row">
            <?php
            $int = 0;
            while($int < 8 && $row =  $statement->fetch(PDO::FETCH_ASSOC)){
            $description = mb_strimwidth($row['description'], 0, 150);
            ?>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="padding: 5px;">
            <a href="./blog.php?id=<?php echo $row['id']?>">
                <div class="view-blog-div"><img class="blog-image-view" src="<?php echo $row['image'];?>">
                    <div style="display: grid;">
                        <h1 class="blog-view-title"><?php echo $row['title']?></h1>
                        <h1 class="blog-view-desc grey"><?php echo $description;?></h1>
                    </div>
                </div>
                </a>
            </div>
            <?php
            $int++;
            };
            ?>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>