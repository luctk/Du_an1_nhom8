<?php
    //truy vấn danh sách loại tour

    //lấy thông tin tất cả loại
    function tourType_selectall(){
        $sql = "SELECT * FROM tour_type";
        return pdo_query($sql);
    }


    //thêm loại
    function tourType_insert($name_type,$ky_hieu){
        $sql = "INSERT INTO tour_type(name_type,ky_hieu) VALUES (?,?)";
        pdo_execute($sql,$name_type,$ky_hieu);
    }

    //xóa
    function tourType_delete($id_type){
        $sql = "DELETE FROM tour_type WHERE id_type=?";
        pdo_execute($sql,$id_type);
    }

    //lấy thông tin 1 mã loại
    function tourType_getInfo($id_type){
        $sql = "SELECT * FROM tour_type WHERE id_type=?";
        return pdo_query_one($sql,$id_type);
    }

    //lấy thông tin 1 tên loại
    function tourType_kyHieu($ky_hieu){
        $sql = "SELECT * FROM tour_type WHERE ky_hieu=?";
        return pdo_query_one($sql,$ky_hieu);
    }

    //Cập nhật dữ liệu
    function tourType_update($id_type,$name_type,$ky_hieu){
        $sql = "UPDATE tour_type SET name_type=?,ky_hieu=? WHERE id_type=?";
        pdo_execute($sql,$name_type,$id_type,$ky_hieu);
    }
?>