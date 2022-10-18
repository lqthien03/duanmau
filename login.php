    
<?php
    // include "./model/connectdb.php";
    // include "./model/user.php";
    if(isset($_POST['login'])&&($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $role=checkuser($user,$pass);
        if($role==1) {
            $_SESSION['role']=$role;
            header('location: ./admin/index.php'); 
        }else{ 
            $canhbao="User hoặc Pass bị sai !";
            // header('location: ./index/login.php');
        }     
    }else{
            // $canhbao="user hoặc pass bị sai ";
        }
    


?>


<section id="page-header" class="about-header">
        <h2>Đăng Nhập</h2>
        <p>Điền thông tin đăng nhập tại đây</p>
    </section>

    <div class="login-form">  
        <!-- <h2 class="heading">Đăng kí tài khoản</h2>
        <p>Điền thông tin đăng ký tại đây</p> -->
        <form action="index.php?act=login" method="post" class="form-input">
            <input type="text" placeholder="User" name="user" id="">
            <input type="text" placeholder="Pass" name="pass" id="">
            <input id="bt" type="submit" value="Đăng Nhập" name="login" >
        </form>
        
        <?php
        if(isset($canhbao)&&($canhbao!="")){
            echo "<font color='red'>".$canhbao."</font>";
        }
        ?>

        <a href="index.php?act=dangky" class="link-login">Bạn chưa có tài khoản ?<b> Đăng Ký</b></a>
    </div>

    


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Đăng nhập để nhận những thông tin mới nhất từ sản phẩm và hot deals</h4>
            <p>Nhận thông tin cập nhật qua email về cửa hàng mới nhất của chúng tôi và <span>
                ưu đãi đặc biệt.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Địa chỉ email của bạn">
            <button class="normal">Đăng ký</button>
        </div>
    </section>