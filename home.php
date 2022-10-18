    <section id="hero">
        <h4>Giao dịch đơn giản, nhanh gọn</h4>
        <h2>Simple Fashion</h2>
        <h1>Glory Club</h1>
        <p>Sản phẩm giá ưu đãi nhưng vẫn đảm bảo được chất lương đầu ra của thương hiệu</p>
        <button>Mua Ngay</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="./view/img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="./view/img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="./view/img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="./view/img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="./view/img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="./view/img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Sản Phẩm Nổi Bật</h2>
        <p>Bộ sưu tập "Mùa hè năng động"</p>
        <div class="pro-container">
            <?php
                $sanpham1=getall_sanpham1();
                foreach($sanpham1 as $sp){
                    echo'<div class="pro">
                    <img src="./view/img/jacket/'.$sp['img'].'" alt="">
                    <div class="des">
                        <span>'.$sp['thuong_hieu'].'</span>
                        <h5>'.$sp['ten_sp'].'</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$'.$sp['gia'].'</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>';
                }
            ?>
            
            
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Chính sách bảo hành</h4>
        <h2>Bảo hành <span>1 đổi 1</span>Cho tất cả sản phẩm trong vòng 7 ngày</h2>
        <button class="normal">Xem thêm</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>Sản Phẩm Mới</h2>
        <p>Bộ sưu tập "Đơn giản - hiện đại"</p>
        <div class="pro-container">
        <?php
                $sanpham2=getall_sanpham2();
                foreach($sanpham2 as $sp){
                    echo'<div class="pro">
                    <img src="./view/img/jacket/'.$sp['img'].'" alt="">
                    <div class="des">
                        <span>'.$sp['thuong_hieu'].'</span>
                        <h5>'.$sp['ten_sp'].'</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$'.$sp['gia'].'</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>';
                }
            ?>
            
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Hè/xuân</h4>
            <h2>Sẽ ra mắt trong thời gian tới</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Deal hot, siêu lời</h4>
            <h2>Mua 1 tặng 1</h2>
            <span>Những chiếc áo thun tuyệt vời nhất !!</span>
            <button class="white">Xem thêm</button>
        </div>
    </section>

    

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