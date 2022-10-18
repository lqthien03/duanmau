<?php
function themdm_sanpham($ma_hh,$ten_hh,$hinh,$don_gia,$ma_loai){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_hanghoa (ma_hh,ten_hh,hinh,don_gia,ma_loai)
     VALUES ('$ma_hh','$ten_hh','$hinh','$don_gia','$ma_loai')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function themdm_loaihang($ten_loai){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_loaihang (ten_loai) VALUES ('".$ten_loai."')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function themdm_user($name,$user,$pass){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_user (name,user,pass)
     VALUES ('$name','$user','$pass')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function themdm_binhluan($name,$email,$phone,$noi_dung){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_binhluan (name,email,phone,noi_dung)
     VALUES ('$name','$email','$phone','$noi_dung')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function dangky_tk($name,$address,$email,$user,$pass){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_user (name,address,email,user,pass)
    VALUES ('$name','$address','$email','$user','$pass')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

////////////////////////
function updatedm($ma_loai,$ten_loai){
    $conn=connectdb();
    $sql = "UPDATE tbl_loaihang SET ten_loai='".$ten_loai."' WHERE ma_loai=".$ma_loai;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}


function updatedm_sanpham($ma_hh,$ten_hh,$don_gia,$ma_loai){
    $conn=connectdb();
    $sql = "UPDATE tbl_hanghoa SET ten_hh='".$ten_hh."',don_gia='".$don_gia."',ma_loai='".$ma_loai."' WHERE ma_hh=".$ma_hh;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}



function updatedm_user($user_id,$name,$user,$pass){
    $conn=connectdb();
    $sql = "UPDATE tbl_user SET name='".$name."',user='".$user."', pass='".$pass."' WHERE user_id=".$user_id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}



///////////////////////
function getonedm_sanpham($ma_hh){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_hanghoa WHERE ma_hh=".$ma_hh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getonedm_loaihang($ma_loai){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_loaihang WHERE ma_loai=".$ma_loai);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getonedm_user($user_id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE user_id=".$user_id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
////////////////////////
function deldm_sanpham($ma_hh){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_hanghoa WHERE ma_hh=".$ma_hh;
    // $sql = "DELETE FROM tbl_loaihang WHERE ma_loai=".$ma_loai;

    // use exec() because no results are returned
    $conn->exec($sql);
}
function deldm_loaihang($ma_loai){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_loaihang WHERE ma_loai=".$ma_loai;
    // $sql = "DELETE FROM tbl_loaihang WHERE ma_loai=".$ma_loai;

    // use exec() because no results are returned
    $conn->exec($sql);

}
function deldm_user($user_id){
    $conn=connectdb();
    $sql = "DELETE FROM tbl_user WHERE user_id=".$user_id;
    // $sql = "DELETE FROM tbl_loaihang WHERE ma_loai=".$ma_loai;

    // use exec() because no results are returned
    $conn->exec($sql);

}
function getall_dm_sanpham(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_hanghoa");
    // $stmt = $conn->prepare("SELECT * FROM tbl_loaihang");
    // $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_dm_loaihang(){
    $conn=connectdb();
    // $stmt = $conn->prepare("SELECT * FROM tbl_hanghoa");
    $stmt = $conn->prepare("SELECT * FROM tbl_loaihang");
    // $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;

}
function getall_dm_user(){
    $conn=connectdb();
    // $stmt = $conn->prepare("SELECT * FROM tbl_hanghoa");
    // $stmt = $conn->prepare("SELECT * FROM tbl_loaihang");
    $stmt = $conn->prepare("SELECT * FROM tbl_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_dm_binhluan(){
    $conn=connectdb();
    // $stmt = $conn->prepare("SELECT * FROM tbl_hanghoa");
    // $stmt = $conn->prepare("SELECT * FROM tbl_loaihang");
    $stmt = $conn->prepare("SELECT * FROM tbl_binhluan");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function getall_sanpham1(){
    $conn=connectdb();
    // $stmt = $conn->prepare("SELECT * FROM tbl_hanghoa");
    // $stmt = $conn->prepare("SELECT * FROM tbl_loaihang");
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham1");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_sanpham2(){
    $conn=connectdb();
    // $stmt = $conn->prepare("SELECT * FROM tbl_hanghoa");
    // $stmt = $conn->prepare("SELECT * FROM tbl_loaihang");
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham2");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

?>