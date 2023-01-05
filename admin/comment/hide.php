<?php
    require "../../model/pdo.php";
    require "../../model/comment.php";

    if(isset($_GET['id_comment'])){
        
        $comment = comment_getInfo($_GET['id_comment']);
        if ($comment['status'] == 0){
            comment_hide($comment['id_comment'],1);
        }
        else if ($comment['status'] == 1){
            comment_hide($comment['id_comment'],0);
        }

        header("location: list.php");
        exit();
    }
?>