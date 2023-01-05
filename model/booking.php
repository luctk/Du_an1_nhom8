<?php
    function booking_getInfo($id_booking){
        $sql = "SELECT * FROM booking WHERE id_booking=?";
        return pdo_query_one($sql,$id_booking);
    }
    function booking_selectAll(){
        $sql = "SELECT * FROM booking";
        return pdo_query($sql);
    }

    //insert
    function booking_insert($full_name,$tel,$email,$address,$date,$total_price,$peoples,$children,$id_tour){
        $sql = "INSERT INTO `booking`(`full_name`, `tel`, `email`, `address`, `date`, `total_price`,`peoples`,`children`,`id_tour`) VALUES (?,?,?,?,?,?,?,?,?)";
        pdo_execute($sql,$full_name,$tel,$email,$address,$date,$total_price,$peoples,$children,$id_tour);
    }

    //booking update status
    function booking_updateStatus($id_booking,$status){
        $sql = "UPDATE booking SET status=? WHERE id_booking=?";
        pdo_execute($sql,$status,$id_booking);
    }

    //delete
    function booking_delete($id_booking){
        $sql = "DELETE FROM booking WHERE id_booking=?";
        pdo_execute($sql,$id_booking);
    }


    //update
    function booking_update($id_booking,$full_name,$tel,$email,$address,$date,$total_price,$peoples,$children){
        $sql = "UPDATE booking SET full_name=?,tel=?,email=?,address=?,date=?,total_price=?,peoples=?,children=? WHERE id_booking=?";
        pdo_execute($sql,$full_name,$tel,$email,$address,$date,$total_price,$peoples,$children,$id_booking);
    }
?>