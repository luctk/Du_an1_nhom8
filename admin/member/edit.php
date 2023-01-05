<?php
require "../../model/pdo.php";
require "../../model/member.php";
include ('../header/layout.php');

if (isset($_GET['id_member'])) {
    $khachhang = member_getInfo($_GET['id_member']);
    extract($khachhang);
}

if (isset($_POST['btn_update'])) {
    member_update($_POST['id_member'],$_POST['full_name'],$_POST['username'],$_POST['password'],$_POST['email'] ,$_POST['vai_tro']);

    header("location: list.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="edit">
        <h1>Update khách hàng</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_member" value="<?= $id_member ?>">
            <input type="hidden" name="full_name" value="<?= $full_name ?>">
            <input type="hidden" name="username" id="" value="<?= $username ?>">
            <input type="hidden" name="password" value="<?= $password ?>">
            <input type="hidden" name="email" id="" value="<?= $email ?>">
            Vai trò<br>
            <input type="number" name="vai_tro" id="" value="<?= $vai_tro ?>">

            <input class="update" type="submit" value="UPDATE" name="btn_update">
        </form>

    </div>
    </div>
</body>

</html>