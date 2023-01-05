<?php
require "../../model/pdo.php";
require "../../model/tour_type.php";
include('../header/layout.php');

if(isset($_GET['id_type'])){
    tourType_delete($_GET['id_type']);
}

header("location: list.php");
exit();
?>