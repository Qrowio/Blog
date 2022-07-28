<?php
include "includes/handler.inc.php";
$database = new Database();
$row = $database->searchAjax();

if(isset($_GET['name'])){
    foreach($row as $r){
        echo '<div class="blog-searchh-div">';
        echo '<a href="blog.php?id=' . $r["id"] . '"><h1 class="blog-search-title" style="font-weight: 300">' . $r["title"] . '</h1>';
        echo "</div>";
    }
}
?>