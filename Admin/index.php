<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/binhluan.php";
    include "../model/sanpham.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddmuc':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;

                case 'listdmuc':
                    $listdmuc=loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;

                    case 'xoadmuc':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_danhmuc($_GET['id']);
                        }
                        $sql ="SELECT * FROM `category` order by id_category desc";
                        $listdmuc=pdo_query($sql);
                        include "danhmuc/list.php";
                        break;
                 case 'suadmuc':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $danhmuc=loadone_danhmuc($_GET['id']);
                    }
                    include "danhmuc/update.php";
                    break;

            case 'updatedmuc':
                    if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_dm($id,$tenloai);
                        $thongbao="Cập nhập thành công";
                    }
                        $listdmuc=load_1st_danhmuc();
                        include "danhmuc/list.php";
                    break;
            case 'addsp':
                        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $gia=$_POST['giasp'];
                            $mota=$_POST['mota'];
                            $img=$_FILES['hinh']['name'];
                            $target_dir="../upload/";
                            $target_file=$target_dir. basename($_FILES["hinh"]["name"]);
                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){

                            }
                            else{

                            }
                            
                            insert_sp($tensp,$gia,$mota,$img,$iddm);
                            $thongbao="Thêm thành công";
                        }
                        $listdmuc=loadall_danhmuc();                        
                        include "sanpham/add.php";
                        break;

                        case 'listsp':
                            if(isset($_POST['listok'])&&($_POST['listok'])){
                                $kyw=$_POST['kyw'];
                                $iddm=$_POST['iddm'];
                            }
                            else{
                                $kyw='';
                                $iddm=0;
                            }
                            $listdmuc=loadall_danhmuc();  
                            $listsp=load_sp($kyw,$iddm);
                            include "sanpham/list.php";
                            break;  
                                       
                            case 'xoasp':
                                if(isset($_GET['id'])&&($_GET['id']>0)){
                                    delete_sp($_GET['id']);
                                }
                                $listsp=load_sp("",0);
                                include "sanpham/list.php";
                                break;
                case 'dsbl':
                    $listbinhluan=load_binhluan(0);
                    include "binhluan/list.php";
                    break;

            case 'bieudo':
                    $listtk=loadall_thongke();
                    include 'thongke/bieudo.php';
                    break;
        
            }
        }
        else{
            include "home.php";
        }

    
    include "footer.php";
?>