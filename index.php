<?php
 session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/cart.php";
include "global.php";
include "view/header.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
$spnew=load_sp_home();
$dmnew=loadall_danhmuc();
$dstop10=load_sp_top10();
    if((isset($_GET[['act']]))&&($_GET['act']=!"")){
        $act =$_GET['act'];
        switch($act){

            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $sp_cungloai=load_sp_cungloai($id);
                    $onesp=load_1st_sp($id);
                include "view/chitietsp.php";
                }
                else{
                    include "view/home.php";
                }
                break;


            default:
            include "view/home.php";   
            break;
        }


    }
    else {
        include "view/home.php";
    }
    include "view/footer.php";
?>