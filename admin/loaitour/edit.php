<?php
require "../../model/pdo.php";
require "../../model/tour_type.php";
include('../header/layout.php');

if(isset($_GET['id_type'])){
    $loai = tourType_getInfo($_GET['id_type']);
    extract($loai);
}

if (isset($_POST['btn_update'])) {
    tourType_update($_POST['id_type'],$_POST['name_type'],$_POST['ky_hieu']);

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
        <h1>Sửa loại tour</h1>
        <form action="" method="post">
            <input type="hidden" name="id_type" value="<?= $id_type ?>">
            Tên loại<br>
            <input type="text" name="name_type" value="<?= $name_type ?>" required><br>
            Ký hiệu<br>
            <input type="text" name="ky_hieu" value="<?= $ky_hieu ?>" required><br>
            <input class="update" type="submit" value="Sửa" name="btn_update">
        </form>
    </div>
</body>

</html>

</body>

</html>