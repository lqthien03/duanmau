
<style>
    form{
        margin-left:80px;
        width: 350px;
        border: 1px solid #e2e9e1;
        background-color:#e3e6f3
    }
    form input{
        width: 250px;
        height:40px;
        margin:10px 15px;
        border: 1px solid #e2e9e1;
        border-radius:5px;
        
    }
    .normal{
        background-color:#088178;
        color:#fff;
        border:none;
        border-radius:5px;
    }
    h2{
        margin-top:20px;
        text-align: center;
        font-size: 30px;
    }
    table{
       width: 90%;
       margin:0 auto; 
       height: 100px;
    }
    th{
        border: 2px solid #fff;
        background:#e3e6f3;

    }
    th b{
        font-size:18px;
    }
    tr{
        margin:0 auto;
    }
    td{
        text-align:center;
    }
    form{
        text-align:center;
        margin-top: 100px;
    }
</style>
<div class="main">
        <!-- <section id="page-header" class="about-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE, We love to hear from you!</p>
        </section> --> 
        <h2>DANH MỤC: THÊM SỬA XÓA TÌM KIẾM</h2>
        
        <br>
        <table style="border-collapse:collapse">
            <tr>
                <th><b>STT</b></th>
                <th><b>Tên khách hàng</b></th>
                <th> <b>Tên đăng nhập</b></th>
                <th><b>Mật khẩu</b></th>
                <th><b>Hành động</b></th>
            </tr>
            <?php
            // var_dump($kq);
            ?>
            <?php   
                if (isset($kq)&&(count($kq)>0)){
                    $i=1;
                    // $kq=getall_dm();
                    foreach ($kq as $dm){
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$dm['name'].'</td>
                                <td>'.$dm['user'].'</td>
                                <td>'.$dm['pass'].'</td>
                                <td><a href="index.php?act=update_user&user_id='.$dm['user_id'].'">Sửa</a> | <a href="index.php?act=deldm_user&user_id='.$dm['user_id'].'">Xóa</a></td>
                            </tr>';
                    $i++;
                    }
                }
            
            ?>
            <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Sửa</a> | <a href="#">Xóa</a></td>
            </tr> -->
        </table><br>
        <form action="index.php?act=adddm_user" method="post">
            <input type="text" name="name" id="" placeholder="Tên tài khoản">
            <input type="text" name="user" id="" placeholder="Tên tài khoản">
            <input type="text" name="pass" id=""placeholder="Mật khẩu">
            <input type="submit" name="themmoi" value="Thêm mới" class="normal">
        </form>
</div>