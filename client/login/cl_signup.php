<div class="main_signup">

    <div class="table-signin">
        <div class="signin">
            <h1>ĐĂNG KÝ</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <?php if (isset($thongbao)) : ?>
                    <div style="color:green;">
                        <?= $thongbao ?>
                    </div>
                <?php endif ?>
                <div class="pass">
                    <?php if (isset($err_full_name)) : ?>
                        <span style="color:red;">
                            (<?= $err_full_name ?>)
                        </span>
                    <?php endif ?>
                    <input type="text" id="full_name" value="<?= $full_name ??= '' ?>" name="full_name" placeholder="full_name">

                </div>

                <div class="pass">
                    <?php if (isset($err_username)) : ?>
                        <span style="color:red;">
                            (<?= $err_username ?>)
                        </span>
                    <?php endif ?>
                    <input type="text" id="username" value="<?= $username ??= '' ?>" name="username" placeholder="username">

                </div>

                <div class="pass">
                    <?php if (isset($err_password)) : ?>
                        <span style="color:red;">
                            (<?= $err_password ?>)
                        </span>
                    <?php endif ?>
                    <input type="password" id="pass" value="<?= $password ??= '' ?>" name="password" placeholder="password">

                </div>

                <div class="pass">
                    <?php if (isset($err_repass)) : ?>
                        <span style="color:red;">
                            (<?= $err_repass ?>)
                        </span>
                    <?php endif ?>
                    <input type="password" vvalue="<?= $comfirm_pass ??= '' ?>" name="comfirm_pass" placeholder="comfirm_pass">

                </div>

                <div class="pass">
                    <?php if (isset($err_email)) : ?>
                        <span style="color:red;">
                            (<?= $err_email ?>)
                        </span>
                    <?php endif ?>
                    <input type="text" id="" value="<?= $email ??= '' ?>" name="email" placeholder="email">

                </div>

                <!-- <div class="pass">
                    <select name="gioitinh" id="">
                        <option value="">Giới tính</option>
                        <option value="">Nam</option>
                        <option value="">Nữ</option>
                    </select>
                
                </div> -->

                <div class="button">
                    <button name="signup">Đăng ký</button>
                </div>
            </form>

            <div class="a">
                <a href="../../view/login/v_signin.php">Đăng nhập</a>
            </div>

        </div>
    </div>

</div>