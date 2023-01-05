<?php
require "../../model/pdo.php";
require "../../model/tour_type.php";
require "../../model/library.php";
include('../header/layout.php');

//lấy ds loại tour
$dsloai = tourType_selectall();

$ds_library = library_selectAll();

if(isset($_POST['btn_add'])){
    $file = $_FILES['image'];
    $image = $file['name'];

    if($file['size'] > 0){
        move_uploaded_file($file['tmp_name'], '../../img/'.$image);

        library_insert($image,$_POST['id_type']);
        header("location: list.php");
        exit();
    }
}
?>


<body>
    <div id="list">
        <h1>DANH SÁCH ẢNH</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <p>Thêm ảnh mới</p>
            <input type="file" name="image" required><br>
            <select name="id_type" id="address" required>
                <option type="hidden" value="">Chọn album</option>
                <?php foreach ($dsloai as $loai) : ?>
                    <?= extract($loai) ?>
                    <option value="<?= $id_type ?>"><?= $name_type ?></option>
                <?php endforeach ?>
            </select><br>
            <input class="button" type="submit" value="Thêm" name="btn_add">
        </form>


        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>ALBUM</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_library as $library) : ?>
                    <?php extract($library) ?>
                    <tr>
                        <td><?= $id_library ?></td>
                        <td>
                            <img style="width:100px" src="../../img/<?= $image ?>" alt="">
                        </td>
                        <td>
                        <?php if (isset($id_type)) : ?>
                                <?= tourType_getInfo($id_type)['name_type'] ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <a onclick="return confirm('Bạn có muốn xóa ?')" href="../library_img/delete.php?id_library=<?= $id_library ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>
</body>

</html>