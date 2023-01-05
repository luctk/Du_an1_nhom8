<?php
    require "../../model/pdo.php";
    require "../../model/booking.php";
    include('../header/layout.php');

    if(isset($_GET['id_booking'])){
        $booking = booking_getInfo($_GET['id_booking']);
        if($booking['status'] == 0){
            booking_updateStatus($_GET['id_booking'],1);
        }else if($booking['status'] == 1){
            booking_updateStatus($_GET['id_booking'],'');
        }


        header("location: list.php");
exit();
    }

?>