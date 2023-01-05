<div class="main_home">
    <h1>KHÁM PHÁ CÁC TOUR DU LỊCH <br>CÙNG <strong style="color: #FB722F;">GO TRAVEL</strong></h1>
    <div class="box_tour">
        <div class="tour">
            <h2>TOUR PHỔ BIẾN</h2>
            <div class="box_item">
                <?php foreach($dstour as $tour): ?>
                <?php extract($tour) ?>
                    <div class="item_tour">
                        
                        <a href="../../view/main/v_tourct.php?id_tour=<?= $id_tour ?>">
                            <img src="../../img/<?= $image ?>" alt="">
                            <h3><?= $name_tour ?></h3>
                            <span>VND <?= $price ?></span>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tour">
            <h2>TOUR TRONG NƯỚC</h2>
            <div class="box_item">
                <?php foreach($dsTrongNuoc as $tour): ?>
                <?php extract($tour) ?>
                    <div class="item_tour">
                        
                        <a href="../../view/main/v_tourct.php?id_tour=<?= $id_tour ?>">
                            <img src="../../img/<?= $image ?>" alt="">
                            <h3><?= $name_tour ?></h3>
                            <span>VND <?= $price ?></span>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tour">
            <h2>TOUR NƯỚC NGOÀI</h2>
            <div class="box_item">
                <?php foreach($dsNuocNgoai as $tour): ?>
                <?php extract($tour) ?>
                    <div class="item_tour">
                        
                        <a href="../../view/main/v_tourct.php?id_tour=<?= $id_tour ?>">
                            <img src="../../img/<?= $image ?>" alt="">
                            <h3><?= $name_tour ?></h3>
                            <span>VND <?= $price ?></span>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <div class="box_tienich">
        <h1>TIN TỨC MỚI NHẤT</h1>
        <p>Kì nghỉ đầy cảm xúc với loạt trải nghiệm giải trí, làm đẹp, thể thao, nghệ thuật đẳng cấp và hấp dẫn
        </p>
        <a href="">Khám phá tất cả</a>

        <div class="box_item">
            <div class="tienich">
                <div class="item_tienich">
                    <a href="">Tên tiện ích</a>
                </div>
                <div class="item_tienich">
                    <a href="">Tên tiện ích</a>
                </div>
                <div class="item_tienich">
                    <a href="">Tên tiện ích</a>
                </div>
                <div class="item_tienich">
                    <a href="">Tên tiện ích</a>
                </div>
            </div>
        </div>
    </div>

    <div class="uudai">
        <h1>ƯU ĐÃI ĐẶC BIỆT</h1>
        <div class="box_uudai">
            <div class="item_uudai">
                <img src="https://flamingoresorts.vn/sites/default/files/styles/offer_2/public/2022-08/web_630x310_0_1.png?itok=ryVNEJzH" alt="">
                <a href="">Beer Fest - Hai Phong Food tour “Mê bia - Nghiện mồi”</a>
            </div>
            <div class="item_uudai">
                <img src="https://flamingoresorts.vn/sites/default/files/styles/offer_2/public/2022-08/web_630x310_0_1.png?itok=ryVNEJzH" alt="">
                <a href="">Beer Fest - Hai Phong Food tour “Mê bia - Nghiện mồi”</a>
            </div>
            <div class="item_uudai">
                <img src="https://flamingoresorts.vn/sites/default/files/styles/offer_2/public/2022-08/web_630x310_0_1.png?itok=ryVNEJzH" alt="">
                <a href="">Beer Fest - Hai Phong Food tour “Mê bia - Nghiện mồi”</a>
            </div>
        </div>
    </div>
</div>