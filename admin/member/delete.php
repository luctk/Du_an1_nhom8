<?php
require "../../model/pdo.php";
require "../../model/member.php";
include ('../header/layout.php');

if(isset($_GET['id_member'])){
    member_delete($_GET['id_member']);
}

header("location: list.php");
exit();
?>