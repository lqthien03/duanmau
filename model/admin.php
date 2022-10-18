<section id="page-header" class="about-header">
        <h2>ADMIN-WEBSITE</h2>
        <form action="index.php?act=adddm" method="post">
            <input type="text" name="tendm" id="">
            <input type="submit" name="themmoi" value="Thêm mới">
        </form>
        
    </section> 
    <table>
            <tr>
                <th>Mã sản phẩm |</th> 
                <th>Tên sản phẩm |</th> 
                <th>giá tiền |</th> 
                <th>Hiển thị |</th> 
                <th>Hành động</th> 
            </tr>
            <?php
            // var_dump($kq);
            ?>
            <?php
                if (isset($kq)&&(count($kq)>0)){
                    $i=1;
                    foreach ($kq as $dm){
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$dm['ma_hh'].'</td>
                                <td>'.$dm['ten_hh'].'</td>
                                <td>'.$dm['don_gia'].'</td>
                                <td>'.$dm['ma_loai'].'</td>
                                
                                <td><a href="index.php?act=updatedmform&id='.$dm['ma_hh'].'">Sửa</a> | <a href="index.php?act=deldm&id='.$dm['ma_hh'].'">Xóa</a></td>
                            </tr>';
                    $i++;
                    }
                }
            
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Sửa</a> | <a href="#">Xóa</a></td>
            </tr>
        </table>
