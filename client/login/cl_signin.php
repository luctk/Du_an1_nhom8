<div class="main_signin">

    <div class="table-signin">
        <div class="signin">
            <h1>ĐĂNG NHẬP</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="name">
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

                <div class="button">
                    <button name="signin">Đăng nhập</button>
                </div>
            </form>

            <div class="a">
                <a href="../../view/login/v_signup.php">Tạo tài khoản mới</a>
            </div>

        </div>
    </div>

</div>