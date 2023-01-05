<div class="main_news">
    <h1>TIN TỨC HOT NHẤT</h1>
    <div class="news">
        <?php foreach ($ds_news as $news) : ?>
            <?php extract($news) ?>
            <a href="../../view/main/v_newsct.php?id_news=<?= $id_news ?>" class="news-item">
                <div class="news-item__img">
                    <img src="../../img/<?= $image ?>" alt="">
                </div>
                <div class="title-desc">
                    <h2><?= $title_news ?></h2>
                    <span><?= $desc_news ?></span>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</div>