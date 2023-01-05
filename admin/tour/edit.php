<?php
require "../../model/pdo.php";
require "../../model/tour.php";
require "../../model/tour_type.php";
include('../header/layout.php');

if (isset($_GET['id_tour'])) {
    $tour = tour_getInfo($_GET['id_tour']);
    extract($tour);

    $dsloai = tourType_selectall();

    $selected = tourType_getInfo($tour['id_type']);
    extract($selected);
}



if (isset($_POST['btn_update'])) {

    $file = $_FILES['image'];
    $image = $file['name'];

    if ($file['size'] > 0) { 
        move_uploaded_file($file['tmp_name'], '../../img/' . $image);

        tour_update($_POST['id_tour'],$_POST['name_tour'], $image, $_POST['mo_ta'], $_POST['price'], $_POST['id_type']);
    } else {
        tour_update($_POST['id_tour'],$_POST['name_tour'], $tour['image'], $_POST['mo_ta'], $_POST['price'], $_POST['id_type']);
    }



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
        <h1>Update tour</h1>


            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_tour" value="<?= $id_tour ?>">
                Tour name
            <input type="text" name="name_tour" value="<?= $name_tour ?>"><br>
            Image
            <input type="hidden" name="image" value="<?= $image ?>">
            <input type="file" name="image"><br>
            Description
            <textarea name="mo_ta" id="" cols="65" rows="10" ><?= $mo_ta ?></textarea><br>
            Price
            <input type="number" name="price" value="<?= $price ?>"><br>
            Mã loại
            <select name="id_type" id="address">
                <?php foreach ($dsloai as $loai) : ?>
                    <?= extract($loai) ?>
                    <option value="<?= $id_type ?>" <?= ($selected['id_type'] == $id_type)?'selected': '' ?>> <?= $name_type ?></option>
                <?php endforeach ?>
            </select><br>
            

             
                <input class="update" type="submit" value="UPDATE" name="btn_update">
            </form>

    </div>
</body>

</html>