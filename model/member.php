<?php
    //lấy tất cả thông tin khách hàng
    function member_selectAll(){
        $sql = "SELECT * FROM `member`";
        return pdo_query($sql);
    }


    //lấy thông tin một khách hàng
    function member_getInfo($id_member){
        $sql = "SELECT * FROM `member` WHERE `id_member`=?";
        return pdo_query_one($sql,$id_member);
    }


    //lấy thông tin một khách hàng theo username
    function member_username($username){
    
       $sql = "SELECT * FROM `member` WHERE `username` = ?";
       return pdo_query_one($sql,$username);
    }


    //thêm thông tin khách hàng
    function member_insert($full_name,$username,$password,$email,$vai_tro){
        $sql = "INSERT INTO `member`(`full_name`, `username`, `password`, `email`, `vai_tro`) VALUES (?,?,?,?,?)";
        pdo_execute($sql,$full_name,$username,$password,$email,$vai_tro);
    }


    //cập nhật thông tin khách hàng
    function member_update($id_member,$full_name,$username,$password,$email,$vai_tro){
        $sql = "UPDATE `member` 
                SET `full_name`=?,`username`=?,`password`=?,`email`=?,`vai_tro`=?
                WHERE `id_member`=?";
        pdo_execute($sql,$full_name,$username,$password,$email,$vai_tro,$id_member);
    }


    //xóa thông tin khách hàng
    function member_delete($id_member){
        $sql = "DELETE FROM `member` WHERE `id_member`=?";
        pdo_execute($sql,$id_member);
    }
?>