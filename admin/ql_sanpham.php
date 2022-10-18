
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
       height: 40px;
       
    }
    th{
        background:#e3e6f3;
        border: 2px solid #fff;

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
                <th><b>Mã sản phẩm</b></th>
                <th> <b>Tên sản phẩm</b></th>
                <th><b>Hình ảnh</b></th>
                <th> <b>giá tiền</b></th>
                <th> <b>mã loại</b></th>
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
                                <td>'.$dm['ma_hh'].'</td>
                                <td>'.$dm['ten_hh'].'</td>
                                <td>'.$dm['hinh'].'</td>
                                <td>'.$dm['don_gia'].'</td>
                                <td>'.$dm['ma_loai'].'</td>
                                <td><a href="index.php?act=update_sanpham&ma_hh='.$dm['ma_hh'].'">Sửa</a> | <a href="index.php?act=deldm_sanpham&ma_hh='.$dm['ma_hh'].'">Xóa</a></td>
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
        <form action="index.php?act=adddm_sanpham" method="post" >
            <input type="text" name="ma_hh" id="" placeholder="Mã sản phẩm"><br>
            <input type="text" name="ten_hh" id="" placeholder="Tên sản phẩm"><br>
            <input type="text" name="hinh" id="" placeholder="hình"><br>
            <input type="text" name="don_gia" id="" placeholder="giá tiền"><br>
            <input type="text" name="ma_loai" id="" placeholder="mã loại"><br>
            <input type="submit" name="themmoisp" value="Thêm mới" class="normal">
        </form>
</div>