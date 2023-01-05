<?php
    require "../../model/pdo.php";
    require "../../model/library.php";
    include('../header/layout.php');

    if(isset($_GET['id_library'])){
        library_delete($_GET['id_library']);
    }
    
    header("location: list.php");
    exit();
?>