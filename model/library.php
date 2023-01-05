<?php 
    //library
    function library_insert($image,$id_type){
        $sql = "INSERT INTO `library`(`image`,id_type) VALUES (?,?)";
        pdo_execute($sql,$image,$id_type);
    }

    function library_selectAll(){
        $sql = "SELECT * FROM `library`";
        return pdo_query($sql);
    }

    function library_delete($id_library){
        $sql = "DELETE FROM `library` WHERE id_library=$id_library";
        pdo_execute($sql,$id_library);
    }

?>