<?php
//lấy tất cả ds tour
function tour_selectall()
{
    $sql = "SELECT * FROM tour";
    return pdo_query($sql);
}

//thêm tour
function tour_insert($name_tour, $image, $mo_ta, $price, $id_type,$pham_vi)
{
    $sql = "INSERT INTO tour(`name_tour`,`image`,`mo_ta`,`price`,`id_type`,pham_vi)
                VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $name_tour, $image, $mo_ta, $price, $id_type,$pham_vi);
}

//xóa
function tour_delete($id_tour)
{
    $sql = "DELETE FROM tour WHERE id_tour=?";
    pdo_execute($sql, $id_tour);
}

//lấy thông tin 1 tour
function tour_getInfo($id_tour)
{
    $sql = "SELECT * FROM tour WHERE id_tour=?";
    return pdo_query_one($sql, $id_tour);
}

//update
function tour_update($id_tour, $name_tour, $image, $mo_ta, $price, $id_type)
{
    $sql = "UPDATE tour
                SET name_tour=?,image=?,mo_ta=?,price=?,id_type=?
                WHERE id_tour=?";
    pdo_execute($sql, $name_tour, $image, $mo_ta, $price, $id_type, $id_tour);
}

//Lấy ds tour theo loại tour
function tour_theoType($id_type)
{
    $sql = "SELECT * FROM tour WHERE `id_type`=$id_type";
    return pdo_query($sql, $id_type);
}

//lấy ds tour theo phạm vi
function tour_TheoPhamVi($pham_vi)
{
    $sql = "SELECT * FROM `tour` order by `pham_vi`=? desc limit 6";
    return pdo_query($sql, $pham_vi);
}

//top 6 random
function tour_random()
{
    $sql = "SELECT * FROM `tour` order by RAND() limit 6";
    return pdo_query($sql);
}


