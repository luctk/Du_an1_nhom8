<?php
require "../../model/pdo.php";
require "../../model/booking.php";
include('../header/layout.php');

if(isset($_GET['id_booking'])){
    booking_delete($_GET['id_booking']);
}

header("location: list.php");
exit();

?>