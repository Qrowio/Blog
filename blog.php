<?php
require_once 'config.php';

$ID = $_GET['id'];
$statement = $connection->prepare("SELECT * FROM blogs WHERE id = :id ORDER BY ID DESC");
$statement->execute([':id' => $ID]);
$row =  $statement->fetch(PDO::FETCH_ASSOC);

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
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/ethereal.png"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="index.php">Blogs</a></li>
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
            <div class="col-md-7 col-lg-8 col-xl-8 col-xxl-12">
                <div class="blog-main-div second">
                    <h1 class="blog-main-title"><?php echo $row['title']?></h1>
                    <h1 class="blog-main-date grey"><?php echo $row['createdAt'];?></h1>
                    <hr class="blog-main-hr">
                    <h1 class="blog-main-desc"><?php echo $row['description']?></h1>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>