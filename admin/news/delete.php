<?php
    
require "../../model/pdo.php";
require "../../model/news.php";
include('../header/layout.php');

if(isset($_GET['id_news'])){
    news_detele($_GET['id_news']);
}
header("location: list.php");
exit();
?>