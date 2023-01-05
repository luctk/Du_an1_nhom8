<?php
    function news_selectAll(){
        $sql = "SELECT * FROM `news`";
        return pdo_query($sql);
    }

    function news_getInfo($id_news){
        $sql = "SELECT * FROM `news` WHERE id_news=?";
        return pdo_query_one($sql,$id_news);
    }

    function news_insert($image,$title_news,$desc_news,$content_news){
        $sql = "INSERT INTO `news`(image,`title_news`, `desc_news`, `content_news`) VALUES (?,?,?,?)";
        pdo_execute($sql,$image,$title_news,$desc_news,$content_news);
    }

    function news_update($id_news,$image,$title_news,$desc_news,$content_news){
        $sql = "UPDATE `news` SET image=?,`title_news`=?,`desc_news`=?,`content_news`=? WHERE id_news=?";
        pdo_execute($sql,$image,$title_news,$desc_news,$content_news,$id_news);
    }

    function news_detele($id_news){
        $sql = "DELETE FROM `news` WHERE id_news=?";
        pdo_execute($sql,$id_news);
    }
?>