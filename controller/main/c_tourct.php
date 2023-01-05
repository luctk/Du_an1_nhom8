<?php 
    require "../../model/pdo.php";
    require "../../model/tour_type.php";
    require "../../model/tour.php";
    require "../../model/booking.php";
    require "../../model/comment.php";
    require "../../model/member.php";

    $ds_comment = comment_selectAll();

    if(isset($_GET['id_tour'])){
        $tour = tour_getInfo($_GET['id_tour']);
    }

    if(isset($_POST['comment__btn'])){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $id_tour = $_GET['id_tour'];

        $date = getdate(time());
        $date_comment = $date['year']."/".$date['mday']."/".$date['mon'];

        if(isset($_SESSION['username'])){
            $id_member = $_SESSION['username']['id_member'];

            comment_insert($full_name,$email,$content,$date_comment,$id_member,$id_tour,'');
        }else{
            comment_insert($full_name,$email,$content,$date_comment,'',$id_tour,'');
        }

        header("location: ../main/v_tourct.php?id_tour=$id_tour");
        exit();
    }
    

    if(isset($_POST['book-btn'])){
        $date = $_POST['date'];
        $peoples = $_POST['peoples'];
        $children = $_POST['children'];
        $id_tour = $tour['id_tour'];
        $total_price = $_POST['total_price'];
        $info_booking = [$date,$peoples,$children,$total_price,$id_tour];

        date_default_timezone_set("Asia/Ho_Chi_Minh");
        // Hàm time() trả về thời gian hiện tại theo kiểu int
        time();
        //hàm đổi ngày thành int
        $int_date = strtotime($date);
        if($int_date - time() <= 0){
            $err_date = "ngày đã qua";
        }
        else{
            if(!isset($_SESSION['booking'])){
                $_SESSION['booking'] = $info_booking ;
                header("location: ../../view/main/v_booking.php");
                exit();
            }else{
                unset($_SESSION['booking']);
                $_SESSION['booking'] = $info_booking ;
                header("location: ../../view/main/v_booking.php");
                exit();
            }
        }
    }
?>