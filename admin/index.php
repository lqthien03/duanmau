<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        include "../model/connectdb.php";
        include "../model/user.php";
        include "../model/danhmuc.php";
        connectdb();
        // include "../view/header.php";
        include "header.php";
    
        if(isset($_GET['act'])){
            switch($_GET['act']){
                case 'ql_sanpham':
                    $kq=getall_dm_sanpham();
                include "../admin/ql_sanpham.php";
                    break;
                case 'ql_danhmuc':
                    $kq=getall_dm_loaihang();
                    include "../admin/ql_danhmuc.php";
                    break;
                case 'ql_user':
                    $kq=getall_dm_user();
                    include "../admin/ql_user.php";
                    break;
                case 'ql_binhluan':
                    $kq=getall_dm_binhluan();
                    include "../admin/ql_binhluan.php";
                    break;
    
                case 'deldm_sanpham':   
                    if(isset($_GET['ma_hh'])){
                        $id=$_GET['ma_hh'];
                        deldm_sanpham($id);
                    }
                    $kq=getall_dm_sanpham();
                    include "../admin/ql_sanpham.php";
                    break;
                case 'deldm_loaihang':
                    if(isset($_GET['ma_loai'])){
                        $id=$_GET['ma_loai'];
                        deldm_loaihang($id);
                    }
                    $kq=getall_dm_loaihang();
                    include "../admin/ql_danhmuc.php";
                    break;
                case 'deldm_user':
                    if(isset($_GET['user_id'])){
                        $id=$_GET['user_id'];
                        deldm_user($id);
                    }
                    $kq=getall_dm_user();
                    include "../admin/ql_user.php";
                    break;
                case 'adddm_sanpham': #thêm
                    if(isset($_POST['themmoisp'])&&($_POST['themmoisp'])){
                        $ma_hh = $_POST['ma_hh'];
                        $ten_hh = $_POST['ten_hh'];
                        $hinh = $_POST['hinh'];
                        // $hinh = $_FILES['hinh']['name'];
                        // $target_dir="upload/";
                        // $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                        // if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){

                        // }else{

                        // }
                        $don_gia = $_POST['don_gia'];
                        $ma_loai = $_POST['ma_loai'];
                        themdm_sanpham($ma_hh,$ten_hh,$hinh,$don_gia,$ma_loai); #hàm
                    }
                    //lấy danh sách danh mục
                    $kq = getall_dm_sanpham();
                    include "../admin/ql_sanpham.php";
                    break;
                case 'adddm_loaihang': #thêm
                    // $kq = getall_dm_loaihang();
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $ten_loai = $_POST['ten_loai'];
                        themdm_loaihang($ten_loai); #hàm
                    }
                    //lấy danh sách danh mục
                    $kq = getall_dm_loaihang();
                    include "../admin/ql_danhmuc.php";
                    break;
                case 'adddm_user': #thêm
                    // $kq = getall_dm_user();
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $name = $_POST['name'];
                        $user = $_POST['user'];
                        $pass =$_POST['pass'];
                        themdm_user($name,$user,$pass); #hàm
                    }
                //lấy danh sách danh mục
                    $kq = getall_dm_user();
                    include "../admin/ql_user.php";
                    break;
                
                case 'updatedmform':
    
                    if(isset($_GET['ma_loai'])){
                        $ma_loai=$_GET['ma_loai'];
                        $kqone=getonedm_loaihang($ma_loai);
                        $kq=getall_dm_loaihang();
                        include "../admin/updatedmform.php";
                    }  
                    if(isset($_POST['ma_loai'])){
                        $ma_loai=$_POST['ma_loai'];
                        $ten_loai=$_POST['ten_loai'];
                        // $kqone=getonedm($ma_loai);
                        updatedm($ma_loai,$ten_loai);
                        $kq=getall_dm_loaihang();
                        // include "./admin/ql_sanpham.php";
                        include "../admin/ql_danhmuc.php";
                    }
                
                    // include "view/home.php";
                    break;
                case 'update_sanpham':
    
                    if(isset($_GET['ma_hh'])){
                        $ma_hh=$_GET['ma_hh'];
                        $kqone=getonedm_sanpham($ma_hh);
                        $kq=getall_dm_sanpham();
                        include "../admin/update_sanpham.php";
                    }
                    if(isset($_POST['ma_hh'])){
                        $ma_hh=$_POST['ma_hh'];
                        $ten_hh=$_POST['ten_hh'];
                        $hinh=$_POST['hinh'];
                        $don_gia=$_POST['don_gia'];
                        $ma_loai=$_POST['ma_loai'];
                        // $kqone=getonedm($ma_loai);
                        updatedm_sanpham($ma_hh,$ten_hh,$hinh,$don_gia,$ma_loai);
                        $kq=getall_dm_sanpham();
                        // include "./admin/ql_sanpham.php";
                        include "../admin/ql_sanpham.php";
                    }
                    break;
                    case 'update_user':
    
                        if(isset($_GET['user_id'])){
                            $user_id=$_GET['user_id'];
                            $kqone=getonedm_user($user_id);
                            $kq=getall_dm_user();
                            include "../admin/update_user.php";
                        }
                        if(isset($_POST['user_id'])){
                                $user_id=$_POST['user_id'];
                            $name=$_POST['name'];
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            // $kqone=getonedm($ma_loai);
                            updatedm_user($user_id,$name,$user,$pass);
                            $kq=getall_dm_user();
                            // include "./admin/ql_sanpham.php";
                            include "../admin/ql_user.php";
                        }
                        break;
                    
                default:
                    // include "view/home.php";
                    break;   
            }
        }
    }else{
        header('location: login');
    }
    

    
    
?>