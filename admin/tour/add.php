<?php
require "../../model/pdo.php";
require "../../model/tour.php";
require "../../model/tour_type.php";
include('../header/layout.php');

$dsloai = tourType_selectall();
$TNN = tourType_kyHieu('TNN')['id_type'];

if (isset($_POST['btn_add'])) {
    $file = $_FILES['image'];
    $image = $file['name'];

    if ($file['size'] > 0) {
        move_uploaded_file($file['tmp_name'], '../../img/' . $image);
    }
    if($_POST['id_type'] == ''){
        $err='Chưa chọn địa điểm';
    }else{
        if($_POST['id_type'] == $TNN){
            tour_insert($_POST['name_tour'],$image,$_POST['mo_ta'],$_POST['price'],$_POST['id_type'],1);
        }else{
            tour_insert($_POST['name_tour'],$image,$_POST['mo_ta'],$_POST['price'],$_POST['id_type'],0);
        }

        header("location: list.php");
        exit();
    }
    
    


    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <div class="add">
        <h1>Thêm tour</h1>
        <form action="" method="post" enctype="multipart/form-data">
            Tour name
            <input type="text" name="name_tour"><br>
            Image
            <input type="file" name="image"><br>
            Description
            <textarea name="mo_ta" id="" cols="65" rows="10"></textarea><br>
            Price
            <input type="number" name="price"><br>
            Mã loại <?php if(isset($err)): ?>
                        <span style="color: red;">
                            (<?= $err ?>)
                        </span>
                    <?php endif ?><br>
            <select name="id_type" id="address">
                <option value="">Chọn địa điểm</option>
                <?php foreach ($dsloai as $loai) : ?>
                    <?= extract($loai) ?>
                    <option value="<?= $id_type ?>"><?= $name_type ?></option>
                <?php endforeach ?>
            </select><br>

            <button type="submit" name="btn_add">ADD</button>
        </form>
    </div>
</body>

</html>