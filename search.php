<?php
include "includes/handler.inc.php";
$database = new Database();
$row = $database->searchAjax();

if(isset($_GET['name'])){
    foreach($row as $r){
        echo '<div class="blog-searchh-div">';
        echo '<a href="blog.php?id=' . $r["id"] . '"><h1 class="blog-search-title">' . $r["title"] . '</h1>';
        $description = mb_strimwidth($r["description"], 0, 200);
        echo '<h1 class="blog-search-desc">' . $description . '<br></h1></a>';
        echo "</div>";
    }
}
?>