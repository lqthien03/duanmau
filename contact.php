
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Địa chỉ liên hệ</span>
            <h2>Ghé thăm cửa hàng của chúng tôi hoặc liên hệ với chúng tôi ngay hôm nay</h2>
            <h3>Cửa hàng chính</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>64 Tân Thới Nhất 13, Quận 12, Thành Phố Hồ Chí Minh</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>glory@contact.com </p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+84 122 2222 </p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>10:00am - 18:0pm, Thứ 2 - Thứ 7</p>
                </li>
            </div>
        </div>

        <div class="map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.453991111692!2d106.6297991!3d10.8530333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529b6a2b351a5%3A0x11690ada8c36f9bc!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgVFAuSENNIChDUzMp!5e0!3m2!1svi!2s!4v1644415146068!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </section>

    <section id="form-details">
        <form action="index.php?act=binhluan" method="post">
            <span>Để lại lời nhắn cho chúng tôi</span>
            <h2>Chúng tôi luôn lắng nghe ý kiến của các bạn</h2>
            <input type="text" name="name" placeholder="Your Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="phone" placeholder="phone">
            <textarea name="noi_dung" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" class="normal" name="binhluan" value="gửi">
        </form>

        <div class="people">
            <?php
                $binhluan = getall_dm_binhluan();
                foreach($binhluan as $bl){
                    echo'<div>
                    <img src="./view/img/people/1.png" alt="">
                    <p><span>'.$bl['name'].' </span> 
                        '.$bl['noi_dung'].' <br> Phone: + '.$bl['phone'].'
                        <br> Email: '.$bl['email'].'</p>
                </div>';
                
                }
            ?>
            <!-- <div>
                <img src="./view/img/people/1.png" alt="">
                <p><span>John Doe </span> 
                    Senior Marketing Manager <br> Phone: + 000 123
                    000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="./view/img/people/2.png" alt="">
                <p><span>William Smith</span> Senior Marketing Manager <br> Phone: + 000
                    123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="./view/img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br> Phone: + 000 123
                    000 77 88 <br> Email: contact@example.com</p>
            </div> -->
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Đăng nhập để nhận những thông tin mới nhất</h4>
            <p>Nhận thông tin cập nhật qua email về cửa hàng mới nhất của chúng tôi và <span>
                ưu đãi đặc biệt.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Địa chỉ email của bạn">
            <button class="normal">Đăng ký</button>
        </div>
    </section>