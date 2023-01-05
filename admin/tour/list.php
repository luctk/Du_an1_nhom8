<?php
require "../../model/pdo.php";
require "../../model/tour.php";
require "../../model/tour_type.php";
include('../header/layout.php');
//danh sách tour
$dstour = tour_selectall();


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
    <div id="list">
        <h1>DANH SÁCH TOUR</h1>

        <a href="../tour/add.php">Thêm mới</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tour name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>ID_type</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dstour as $tour) : ?>
                    <?php extract($tour) ?>
                    <tr>
                        <td><?= $id_tour ?></td>
                        <td><?= $name_tour ?></td>
                        <td>
                            <img style="width:100px" src="../../img/<?= $image ?>" alt="">
                        </td>
                        <td><?= $mo_ta ?></td>
                        <td><?= $price ?></td>
                        <td>
                            <?php if (isset($id_type)) : ?>
                                <?= tourType_getInfo($id_type)['name_type'] ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <a href="../tour/edit.php?id_tour=<?= $id_tour ?>">Edit</a>
                            <a onclick="return confirm('Bạn có muốn xóa ?')" href="../tour/delete.php?id_tour=<?= $id_tour ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>
</body>

</html>