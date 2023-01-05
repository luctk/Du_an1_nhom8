<?php 
    require "../../model/pdo.php";
    require "../../model/news.php";

    if(isset($_GET['id_news'])){
        $news = news_getInfo($_GET['id_news']);
    }
?>


<div class="main-news_detail">
        <div class="news_detail">
            <div class="detail__title">
                <h1><?= $news['title_news'] ?></h1>
            </div>
            <div class="detail__img">
                <img src="../../img/<?= $news['image'] ?>" alt="">
            </div>
            <div class="detail__content">
                <p><?= $news['content_news'] ?></p>
            </div>
        </div>
    </div>