<?php
require "../../model/pdo.php";
require "../../model/loai.php";
require "../../model/khachhang.php";
require "../../model/hanghoa.php";
require "../../model/binhluan.php";
include('../header/layout.php');

$dsloai = loai_selectall();
$dshanghoa = hanghoa_selectAll();
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
        <h1>Thống kê sản phẩm theo loại</h1>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <?php foreach ($dsloai as $loai) : ?>
                        <?php extract($loai) ?>

                        <th><?= $loai['ten_loai'] ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Số lượng</td>
                    <?php foreach($dsloai as $loai): ?>
                        <?php foreach(hanghoa_count($loai['ma_loai']) as $count) :?>
                            <td><?= $count[0] ?></td>
                        <?php endforeach ?>
                    <?php endforeach ?>
                </tr>

            </tbody>
        </table>

        <?php foreach ($dsloai as $loai) : ?>
            <?php extract($loai) ?>
            <h2><?= $loai['ten_loai'] ?></h2>
            <table>
                <thead>
                    <tr>
                        <th>Mã hàng hóa</th>
                        <th>Tên hàng hóa</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Hình</th>
                        <th>Ngày nhập</th>
                        <th>Mô tả</th>
                        <th>Đặc biệt</th>
                        <th>Số lượt xem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dshanghoa as $hanghoa) : ?>
                        <?php extract($hanghoa) ?>
                        <?php if ($hanghoa['ma_loai'] == $loai['ma_loai']) : ?>
                            <tr>
                                <td><?= $ma_hh ?></td>
                                <td><?= $ten_hh ?></td>
                                <td><?= $don_gia ?></td>
                                <td><?= $giam_gia ?></td>
                                <td>
                                    <img style="width:50px" src="../../content/img/anh_hh/<?= $hinh ?>" alt="">
                                </td>
                                <td><?= $ngay_nhap ?></td>
                                <td><?= $mo_ta ?></td>
                                <td><?= $dac_biet ?></td>
                                <td><?= $so_luot_xem ?></td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endforeach ?>


    </div>
</body>

</html>