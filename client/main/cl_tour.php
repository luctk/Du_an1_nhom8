<div class="main_tour">
    <?php if (isset($_POST['id_type'])) { ?>
            <h1><?= tourType_getInfo($_POST['id_type'])['name_type'] ?></h1>
        <?php }else{ ?>
            <h1>TẤT CẢ CÁC TOUR</h1>
        <?php } ?>
    <div class="tim_tour">
        <form action="" method="post">
            <select name="id_type" id="address">
                <option hidden>Chọn địa điểm</option>
                <?php foreach ($dsloai as $loai) : ?>
                    <?= extract($loai) ?>
                    <option value="<?= $id_type ?>"><?= $name_type ?></option>
                <?php endforeach ?>
            </select>
                <button name="btn_timkiem" type="submit">Tìm kiếm</button>
        </form>
    </div>
    <div class="list_tour">

        <?php foreach ($dstour as $tour) : ?>
            <?php extract($tour) ?>
            <?php if (isset($_POST['id_type'])) { ?>
                <?php if ($tour['id_type'] == $_POST['id_type']) : ?>
                    <div class="item">
                        <img src="../../img/<?= $image ?>" alt="">
                        <h2><?= $name_tour ?></h2>
                        <p>VND <?= $price ?></p>
                        <a href="../../view/main/v_tourct.php?id_tour=<?= $id_tour ?>"><button>ĐẶT NGAY</button></a>
                    </div>
                <?php endif ?>
            <?php } else { ?>
                <div class="item">
                        <img src="../../img/<?= $image ?>" alt="">
                        <h2><?= $name_tour ?></h2>
                        <p>VND <?= $price ?></p>
                        <a href="../../view/main/v_tourct.php?id_tour=<?= $id_tour ?>"><button>ĐẶT NGAY</button></a>
                    </div>
            <?php } ?>
        <?php endforeach ?>

    </div>
</div>