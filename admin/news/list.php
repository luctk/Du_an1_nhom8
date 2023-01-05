<?php
require "../../model/pdo.php";
require "../../model/news.php";
include('../header/layout.php');

$ds_news = news_selectAll();

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
        <h1>DANH SÁCH TIN TỨC</h1>

        <a href="../news/add.php">Thêm mới</a>

        <table>
            <thead>
                <tr>
                    <th>ID_NEWS</th>
                    <th>IMAGE</th>
                    <th>TITLE</th>
                    <th>MÔ TẢ</th>
                    <th>CONTENT</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ds_news as $news) : ?>
                    <?php extract($news) ?>
                    <tr>
                        <td><?= $id_news ?></td>
                        <td>
                            <img src="../../img/<?= $image ?>" style="width:100px;" alt="">
                        </td>
                        <td><?= $title_news ?></td>
                        <td><?= $desc_news ?></td>
                        <td><?= $content_news ?></td>
                        <td>
                            <a href="../news/edit.php?id_news=<?= $id_news ?>">Edit</a>
                            <a onclick="return confirm('Bạn có muốn xóa ?')" href="../news/delete.php?id_news=<?= $id_news ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>
</body>

</html>