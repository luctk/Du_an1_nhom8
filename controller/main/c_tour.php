<?php
    require "../../model/pdo.php";
    require "../../model/tour_type.php";
    require "../../model/tour.php";
    

    $dsloai = tourType_selectall();
    $dstour = tour_selectall();
?>