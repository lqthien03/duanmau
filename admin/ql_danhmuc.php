
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
    .nhap{
        text-align:center;
        margin-top:100px;
    }
</style>
<div class="main">
        <!-- <section id="page-header" class="about-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE, We love to hear from you!</p>
        </section> --> 
        <h2>DANH MỤC: THÊM SỬA XÓA TÌM KIẾM</h2>
        <!-- <form action="index.php?act=adddm" method="post">
            <input type="text" name="ten_hh" id="">
            <input type="submit" name="themmoi" value="Thêm mới">
        </form> -->
        <br>
        <table style="border-collapse:collapse">
            <tr>
                <th><b>STT</b></th>
                <!-- <th><b>Mã loại</b></th> -->
                <th> <b>Tên loại</b></th>
                <th><b>Hành động</b></th>
            </tr>
            <?php
            // var_dump($kq);
            ?>
            <?php   
                if (isset($kq)&&(count($kq)>0)){
                    $i=1;
                    $kq=getall_dm_loaihang();
                    foreach ($kq as $dm){
                        echo '<tr>
                                <td>'.$i.'</td>
                                
                                <td>'.$dm['ten_loai'].'</td>
                                <td><a href="index.php?act=updatedmform&ma_loai='.$dm['ma_loai'].'">Sửa</a> | <a href="index.php?act=deldm_loaihang&ma_loai='.$dm['ma_loai'].'">Xóa</a></td>
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
        </table>
        <br>
        <div class="nhap">   
            <form action="index.php?act=adddm_loaihang" method="post">
                <!-- <input type="text" name="ma_loai" id=""placeholder="Mã loại"> -->
                <input type="text" name="ten_loai" id=""placeholder="Tên loại hàng"><br>
                <input type="submit" name="themmoi" value="Thêm mới" class="normal">
                <input type="submit" value="quay lại" class="normal" >
            </form>
        </div>
</div>