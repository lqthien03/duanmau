<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
    if(isset($_POST['dathang'])&&($_POST['dathang'])){
    $tensp=$_POST['tensp'];
    $id=$_POST['id'];
    $img=$_POST['img']; 
    $gia=$_POST['gia'];
    $sl=1;
    $i=0;
    $fg=0;
    // tìm và so sánh sp trong giỏ hàng 
    if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
        foreach ($_SESSION['cart'] as $sp) {
            if($sp[0]==$id){
                // cập nhật số lượng
                $sl+=$sp[4];
                $fg=1;
                // cập nhật soosluowngj mới vào giỏ hàng
                $_SESSION['cart'][$i][4]=$sl;
                break;
            }
            $i++;
        }
    }
    // khi số lượng ban đầu không thay đổi thì thêm mới vào giỏ hàng


    //tạo mảng con === thông tin 1 sp
    if($fg==0){
    $sp=[$id,$tensp,$img,$gia,$sl];
    array_push($_SESSION['cart'],$sp);
    }

    // header('location: index.php');
    // echo var_dump($_SESSION['cart']);

    // echo '<br>Bạn <a href="sanpham.php">đặt hàng</a> tiếp tục chứ?'

}
?>