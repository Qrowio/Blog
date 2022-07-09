<?php
require_once 'connection.php';

$statement = $connection->prepare("SELECT * FROM blogs ORDER BY ID DESC");
$statement->execute();
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Clamp.js/0.5.1/clamp.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/ethereal.png"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">Blogs</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">Discord</a></li>
                    </ul><button class="button">Discord</button>
                </div>
            </div>
        </nav>
        <h1 class="page-title">Ethereal Blog</h1>
        <p class="page-desc grey">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.<br></p>
    </div>
    <div class="container" style="margin-top: 4rem;">
        <div class="row">
            <div class="col-md-7 col-lg-8 col-xl-8 col-xxl-8">
                   <?php
                   $int = 0;
                    while($int < 3 && $row =  $statement->fetch(PDO::FETCH_ASSOC)){
                    ?>
                <div class="blog-main-div">
                    <h1 class="blog-main-title"><?php echo $row['title'];?></h1>
                    <h1 class="blog-main-date grey">December 25, 2020</h1>
                    <hr class="blog-main-hr">
                    <?php $description = mb_strimwidth($row['description'], 0, 300);
                    ?>
                    <h1 class="blog-main-desc"><?php echo $description ?><br></h1><a href='blog.php?id=<?php echo $row['id']?>'><button class="continue-button" type="button">Continue Reading</button></a>
                </div>
                     <?php
                    $int++;    
                   };
                    ?>
                <nav style="max-width: 800px;">
                    <ul class="pagination" style="justify-content: center;">
                        <li class="page-item"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 offset-xl-0 offset-xxl-0">
                <div class="recent-div">
                    <h1 class="section-title">Ethereal Hosting</h1>
                    <h1 class="section-desc grey">Ethereal Hosting is a professional hosting company with the intent to educate it’s community on what they’re receiving, servers and technology.<br></h1>
                    <h1 class="section-title bottom">Recent Articles</h1>
                    <?php
                    $count = 0;
                    while($count < 5 && $row =  $statement->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <div class="name-div"><a class="section-article-name" href="blog.php?id=<?php echo $row['id']?>"><?php echo $row['title'];?></a>
                        <hr class="section-hr">
                    </div>

                    <?php
                    $count++;
                    };
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>