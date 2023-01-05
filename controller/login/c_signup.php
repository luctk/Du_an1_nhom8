<?php
require "../../model/pdo.php";
require "../../model/member.php";

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $comfirm_pass = $_POST['comfirm_pass'];

    $user = member_username($username);

    if ($user) {
        $err_username = "Tài khoản này đã tồn tại";
    } else {
        if ($username == '') {
            $err_username = "Không được để trống";
        }
        if ($full_name == '') {
            $err_full_name = "Không được để trống";
        }
        if ($email == '') {
            $err_email = "Không được để trống";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_email = "Không đúng định dạng, mời nhập lại";
        }
        if ($password == '') {
            $err_password = "Không được để trống";
        }
        if ($comfirm_pass == '') {
            $err_repass = "Không được để trống";
        } elseif ($comfirm_pass != $password) {
            $err_repass = "Không trùng khớp, mời nhập lại";
        }

        if (!isset($err_username) && !isset($err_email) && !isset($err_full_name) && !isset($err_repass) && !isset($err_password)) {

            member_insert($full_name, $username, $password, $email, '');

            $thongbao = "Đăng ký thành công !";
        }
    }
}
