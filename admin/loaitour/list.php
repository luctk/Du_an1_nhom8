<?php
require "../../model/pdo.php";
require "../../model/tour_type.php";
include('../header/layout.php');

//lấy ds loại tour
$dsloai = tourType_selectall();

if(isset($_POST['btn_add'])){
    tourType_insert($_POST['ten_loai'],$_POST['ky_hieu']);

    header("location: ./list.php");
    exit();
}
?>


<body>
    <div id="list">
        <h1>CÁC LOẠI TOUR</h1>

        <form action="" method="post">
            <p>Thêm loại mới</p>
            <input class="text" type="text" name="ten_loai" required placeholder="Tên loại"><br>
            <input class="text" type="text" name="ky_hieu" require placeholder="Ký hiệu"><br>
            <input class="button" type="submit" value="Thêm" name="btn_add">
        </form>


        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên loại</th>
                    <th>Ký hiệu</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dsloai as $loai) : ?>
                    <?php extract($loai) ?>
                    <tr>
                        <td><?= $id_type ?></td>
                        <td><?= $name_type ?></td>
                        <td><?= $ky_hieu ?></td>
                        <td>
                            <a href="../loaitour/edit.php?id_type=<?= $id_type ?>">Edit</a>
                            <a onclick="return confirm('Bạn có muốn xóa ?')" href="../loaitour/delete.php?id_type=<?= $id_type ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>
</body>

</html>