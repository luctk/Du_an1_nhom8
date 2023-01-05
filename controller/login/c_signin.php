<?php
    require "../../model/pdo.php";
    require "../../model/member.php";
    
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    
        if ($password == '') {
            $err_password = "Không được bỏ trống";
        }
    
        $user = member_username($username);
    
        if ($user) {
            if ($user['password'] == $password) {
                $_SESSION['username'] = $user;
                echo "alert('Đăng nhập thành công')";
                header("location: ../../index.php"); //di chuyển đến trang thông tin cá nhân khi đăng nhập thành công
                exit();
            } else {
                $err_password = "Mật khẩu không đúng";
            }
        } else {
            if ($username == '') {
                $err_username = "Không được bỏ trống";
            } else {
                $err_username = "Tài khoản không tồn tại";
            }
        }
    }
?>