<?php
require "../../model/pdo.php";
require "../../model/news.php";
include('../header/layout.php');

if (isset($_POST['btn_add'])) {
    $title_news = $_POST['title_news'];
    $desc_news = $_POST['desc_news'];
    $content_news = $_POST['content_news'];

    $file = $_FILES['image'];
    $image = $file['name'];

    if ($file['size'] > 0) {
        move_uploaded_file($file['tmp_name'], '../../img/' . $image);

        news_insert($image, $title_news, $desc_news, $content_news);

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
    <title>Thêm Tin Tức</title>
</head>

<body>
    <div class="add">
        <h1>Thêm news</h1>
        <form action="" method="post" enctype="multipart/form-data">
            Image
            <input type="file" name="image" require><br>
            Tiêu đề
            <input type="text" name="title_news" required placeholder="Tiêu đề news..."><br>
            Mô tả
            <textarea name="desc_news" id="" cols="20" rows="5" required placeholder="Mô tả..."></textarea><br>
            Content
            <textarea name="content_news" id="" cols="30" rows="15" required placeholder="Nội dung..."></textarea><br>

            <button type="submit" name="btn_add">ADD</button>
        </form>
    </div>
</body>

</html>