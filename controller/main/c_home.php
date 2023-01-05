<?php
    require "../../model/pdo.php";
    require "../../model/tour_type.php";
    require "../../model/tour.php";

    $dstour = tour_random();

    $dsTrongNuoc = tour_TheoPhamVi(0);
    $dsNuocNgoai = tour_TheoPhamVi(1);
?>