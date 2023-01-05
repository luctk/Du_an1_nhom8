<?php
    require "../../model/pdo.php";
    require "../../model/news.php";

    $ds_news = news_selectAll();
?>