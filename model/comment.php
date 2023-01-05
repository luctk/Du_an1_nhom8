<?php 
    function comment_selectAll(){
        $sql = "SELECT * FROM `comment`";
        return pdo_query($sql);
    }

    function comment_hide($id_comment,$status){
        $sql = "UPDATE `comment` SET status=? WHERE id_comment=?";
        pdo_execute($sql,$status,$id_comment);
    }

    function comment_insert($full_name, $email, $content, $date_comment, $id_member, $id_tour, $status){
        $sql = "INSERT INTO `comment`(`full_name`, `email`, `content`, `date_comment`, `id_member`, `id_tour`, `status`) VALUES (?,?,?,?,?,?,?)";
        pdo_execute($sql, $full_name, $email, $content, $date_comment, $id_member, $id_tour, $status);
    }

    function comment_getInfo($id_comment){
        $sql = "SELECT * FROM comment WHERE id_comment=?";
        return pdo_query_one($sql,$id_comment);
    }
?>