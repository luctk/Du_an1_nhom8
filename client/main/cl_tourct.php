<div class="main_tourct">
    <h1><?= $tour['name_tour'] ?></h1>
    <div class="main">
        <div class="thongtinct">
            <img src="../../img/<?= $tour['image'] ?>" alt="">
            <div class="mo_ta">
                <h3>Mô tả</h3>
                <p><?= $tour['mo_ta'] ?></p>
            </div>
            <h3>Giá vé trên 1 người: <?= $tour['price'] ?> VND</h3>
        </div>

        <div class="dat_tour">
            <div class="box">
                <h3>LỊCH TRÌNH & GIÁ CẢ</h3>

                <form action="" method="post">
                    <div class="item">
                        <p>Lịch khởi hành<?php if (isset($err_date)) : ?>
                            <span style="font-size: 15px;color:red;">
                                (<?= $err_date ?>)
                            </span>
                        <?php endif ?>
                        </p>

                        <input type="date" name="date" id="" value="<?= $date ??= '' ?>" required>
                    </div>

                    <div class="item">
                        <p>Số người</p>
                        <div class="number_guest">
                            <button type="button" class="peoplesMinus" onclick="peoplesMinus()">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                </svg>
                            </button>
                            <input type="number" name="peoples" id="peoples" required>
                            <button type="button" class="peoplesPlus" onclick="peoplesPlus()">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="item">
                        <p>Trẻ em (-50% giá vé)</p>
                        <div class="number_guest">
                            <button type="button" class="childrenMinus" onclick="childrenMinus()">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                </svg>
                            </button>
                            <input type="number" name="children" id="children" value="0">
                            <button type="button" class="childrenPlus" onclick="childrenPlus()">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="item">
                        <input type="hidden" name="price" class="price" value="<?= $tour['price'] ?>">
                        <p>Tổng tiền</p><span id="total" name="total"></span><input type="hidden" id="total_price" name="total_price" value="">
                    </div>
                    <button name="book-btn">ĐẶT NGAY</button>
                </form>

            </div>
        </div>
    </div>
    <div class="comment">
        <h4>BÌNH LUẬN</h4>
        <form class="comment__form" action="" method="post">
            <?php if (!isset($_SESSION['username'])) : ?>
                <div class="comment__info">
                    <input type="text" name="full_name" class="comment__info-input" placeholder="Full name">
                    <input type="text" name="email" class="comment__info-input" placeholder="Email">
                </div>
            <?php endif ?>

            <?php if (isset($_SESSION['username'])) : ?>
                <div class="comment__info">
                    <input type="hidden" name="full_name" value="<?= $_SESSION['username']['full_name'] ?>">
                    <input type="hidden" name="email" value="<?= $_SESSION['username']['email'] ?>">
                </div>
            <?php endif ?>

            <div class="comment__style">
                <textarea name="content" id="" cols="60" rows="10" placeholder="Phản hồi..."></textarea>
                <button class="comment__btn" name="comment__btn">Bình luận</button>
            </div>
        </form>
        <?php foreach ($ds_comment as $comment) : ?>
            <?php if ($tour['id_tour'] == $comment['id_tour'] && $comment['status'] == 0) : ?>
                <div class="comment_content">
                    <div class="comment__fullname"><strong><?= $comment['full_name'] ?></strong></div>
                    <span class="comment__date"><?= $comment['date_comment'] ?></span>
                    <div class="comment__paragraph"><?= $comment['content'] ?></div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</div>
<script>
    var peoplesElement = document.getElementById('peoples');
    var peoples = peoplesElement.value;
    var childrenElement = document.getElementById('children');
    var children = childrenElement.value;
    var total = document.getElementById('total')
    var total_price = document.getElementById('total_price')
    var price = document.getElementsByClassName('price').price.defaultValue

    tong = 0

    function renderPeoples(peoples) {
        peoplesElement.value = peoples
    }

    function renderChildren(children) {
        childrenElement.value = children
    }

    function renderTotal() {
        tong = (peoples * price) + (children * price * 0.5)
        total.innerHTML = tong + "VND"
        total_price.value = tong
    }
    //handlePlus
    function peoplesPlus() {
        peoples++;
        renderPeoples(peoples);
        renderTotal(peoples)
    }
    //handleMinus
    function peoplesMinus() {
        if (peoples > 1) {
            peoples--;
        };
        renderPeoples(peoples);
        renderTotal(peoples)
    }

    //handlePlus
    function childrenPlus() {
        children++;
        renderChildren(children);
        renderTotal(children)
    }
    //handleMinus
    function childrenMinus() {
        if (children > 0) {
            children--;
        };
        renderChildren(children);
        renderTotal(children)
    }
</script>