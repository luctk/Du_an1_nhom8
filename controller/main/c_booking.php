<?php
    require "../../model/tour.php";
    require "../../model/pdo.php";
    require "../../model/booking.php";
    

    if(isset($_SESSION['booking'])){
        $date = $_SESSION['booking'][0];
        $peoples = $_SESSION['booking'][1];
        $children = $_SESSION['booking'][2];
        $total_price = $_SESSION['booking'][3];
        $id_tour = $_SESSION['booking'][4];

        
        
        if(isset($_POST['thanhtoan-btn'])){
            booking_insert($_POST['full_name'],$_POST['tel'],$_POST['email'],$_POST['address'],$date,$total_price,$peoples,$children,$id_tour);
    
            unset($_SESSION['booking']);
            header("location: ../../index.php");
            exit();
        }

    }
    
?>