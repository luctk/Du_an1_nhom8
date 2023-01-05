<?php
require "../../model/pdo.php";
require "../../model/tour_type.php";
require "../../model/library.php";

$ds_tourType = tourType_selectall();
$ds_library = library_selectAll();
