<?php
require "../../model/pdo.php";
require "../../model/tour.php";

include('../header/layout.php');

if(isset($_GET['id_tour'])){
    tour_delete($_GET['id_tour']);
}

header("location: list.php");
exit();
?>