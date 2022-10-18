<?php
    session_start();
    ob_start();
    include "./model/connectdb.php";
    include "./model/user.php";
    include "./model/danhmuc.php";
    connectdb();
    include "view/header.php";

    if(isset($_GET['act'])){
    switch($_GET['act']){
        case 'shop':
            include "view/shop.php";
            break;
        case 'about':
            include "view/about.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;
        case 'cart':
            include "view/cart.php";
            break;
        case 'quanly':
            include "view/quanly.php";
            break;
        case 'login':
            if(isset($_POST['login'])&&($_POST['login'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $kq=checkuserinfo($user,$pass);
                if(isset($kq)&&($kq)){
                    $role=$kq[0]['role'];
                    if($role==1){
                        $_SESSION['role']=$role;
                        $_SESSION['username']=$kq[0]['user'];
                        header('location: index.php');
                    }else{
                        $_SESSION['role']=$role;
                        $_SESSION['iduser']=$kq[0]['user_id'];
                        $_SESSION['username']=$kq[0]['user'];
                        if(isset($_SESSION['iduser'])&&($_SESSION['iduser']!="")){
                            header('location: index.php');
                        }else{
                            $txt_erro="username hoặc pass không tồn tại ";
                        }
                    }
                }else{
                    $txt_erro="username hoặc pass không tồn tại";
                }
            };
                include "view/login.php";
            break;
        case 'dangky':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass =$_POST['pass'];
                dangky_tk($name,$address,$email,$user,$pass); #hàm
                $thongbao="Đăng kí thành công";
            }
        //lấy danh sách danh mục
            include "view/dangky.php";
            
            break;
        case 'ql_sanpham':
            $kq=getall_dm();
            include "view/ql_sanpham.php";
            break;
        case 'ql_danhmuc':
            $kq=getall_dm_loaihang();
            include "view/ql_danhmuc.php";
            break;
        case 'ql_user':
            $kq=getall_dm_user();
            include "view/ql_user.php";
            break;

        case 'deldm':
            
            if(isset($_GET['ma_hh'])){
                $id=$_GET['ma_hh'];
                deldm($id);
            }
            $kq=getall_dm();
            include "view/ql_sanpham.php";
        case 'adddm': #thêm
            // $kq = getall_dm();
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $ma_hh = $_POST['ma_hh'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $ma_loai = $_POST['ma_loai'];
                themdm($ma_hh,$ten_hh,$don_gia,$ma_loai); #hàm
            }
        //lấy danh sách danh mục
            $kq = getall_dm();
            // include "view/ql_danhmuc.php";
            break;
        case 'binhluan':
            if(isset($_POST['binhluan'])&&($_POST['binhluan'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $noi_dung = $_POST['noi_dung'];
                themdm_binhluan($name,$email,$phone,$noi_dung);
            }
            // $kq= getall_dm_binhluan();
            include "view/contact.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}else {
    include "view/home.php";
}

    include "view/footer.php";
    
    
?>