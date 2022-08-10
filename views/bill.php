<div class="cart container">
    <div class="cart__content">
        <div class="row">
            <div class="col-8">
                <div class="dang__nhap">
                    <div class="row">
                        <div class="col-3">
                            <img src="./img/logo/tichxanh.png" alt="">
                        </div>
                        <div class="col-9">
                            <h5>Đặt tour thành công</h5>
                            <p>Cảm ơn bạn đã tin tưởng và đặt dịch vụ của chúng tôi</p>
                            
                        </div>
                    </div>
                </div>
                <div class="cart__left">

                    <?php
                    if (isset($bill) && (is_array($bill))) {
                        extract($bill);
                        echo '
                                
                                    
                                           
                                                <div class="client__content">
                                                        <h5>Thông tin khách hàng</h5>
                                                        
                                                        <span><b>Khách hàng:</b>'.$bill['bill_name'].'</span>
                                                        <br>
                                                        <span><b>Số điện thoại:</b>'.$bill['bill_tell'].'</span>
                                                        <br> 
                                                        <span><b>Địa chỉ:</b>'.$bill['bill_adress'].'</span>
                                                        <br>  
                                                        <span><b>Email:</b>'.$bill['bill_email'].'</span>
                                                        
                                                                    
                                                                        
                                                                       
                                                                   
                                                                    
                                                </div>
                                           
                                                <div class="client__content">
                                                <h5>Thông tin đơn hàng</h5>
                                                
                                                <span><b>Phương thức thanh toán:</b>'.$bill['bill_pttt'].'</span>
                                                <br>
                                                <span><b>Tổng tiền:</b>'.number_format($bill['total']).'đ</span>
                                                <br> 
                                                <span><b>Ngày đặt hàng:</b>'.$bill['ngaydathang'].'</span>
                                                <br>  
                                                <span><b>Trạng thái:</b>'.$bill['bill_status'].'</span>
                                                
                                                            
                                                                
                                                               
                                                           
                                                            
                                        </div>
                                    
                              
                                ';
                    }
                    $i = 0;
                    if(isset($_SESSION['tour'])){
                    foreach ($billct as $bct) {
                        extract($bct);
                        $hinh1 = $img_path . $bct['anh'];
                        
                         
                            
                        echo '
                                                      <div class="cart__item">
                                                      <div class="d-flex justify-content-between">
                                                            <div class="cart__title">
                                                                  <input type="checkbox" aria-label="Checkbox for following text input">  <span>Thông tin chi tiết sản phẩm</span>
                                                            </div>
                                                            
                                                      </div>
                                                      <div class="cart__detail">
                                                      <div class="row">
                                                      <div class="col-4">
                                                            <img class="img-fluid" src="' . $hinh1 . '" alt="">
                                                      </div>
                                                      <div class="col-8">
                                                            <h5>' . $bct['name'] . '</h5>
                                                            
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Giá người lớn:</p>
                                                                  <span>' . $bct['gianguoilon'] . ' đ</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                            <p>Giá trẻ em:</p>
                                                            <span>' .  $bct['giatreem'] . ' đ</span>
                                                      </div>
                                                           
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Ngày khởi hành  :</p>
                                                                  <span>' .$bct['start'] . '</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Ngày về :</p>
                                                                  <span>' . $bct['finish'] . '</span>
                                                            </div>
                                                           
                                                      </div>
                                                      </div>
                                                      </div>
                                                      </div> 
                                                      ';
                                                    }
                                                    
                                                    
                                                    
                                                    
                        
                    }
                    if(isset($_SESSION['khachsan'])){

                        foreach ($billct as $bct) {
                            extract($bct);                           
                            $hinh2 = $img_path2. $bct['anh'];                          
                                                        
                        echo '
                                                      <div class="cart__item">
                                                      <div class="d-flex justify-content-between">
                                                            <div class="cart__title">
                                                                  <input type="checkbox" aria-label="Checkbox for following text input">  <span>Thông tin chi tiết sản phẩm</span>
                                                            </div>
                                                            
                                                      </div>
                                                      <div class="cart__detail">
                                                      <div class="row">
                                                      <div class="col-4">
                                                            <img class="img-fluid" src="' . $hinh2 . '" alt="">
                                                      </div>
                                                      <div class="col-8">
                                                            <h5>' . $bct['maks'] . '</h5>
                                                            
                                                    
                                                            <div class="d-flex justify-content-between">
                                                            <p>Giá phòng:</p>
                                                            <span>' .  $bct['giaphong'] . ' đ</span>
                                                      </div>
                                                           
                                                           
                                                            
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Loại phòng</p>
                                                                  <span>' . $bct['maloai'] . ' </span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Tên phòng </p>
                                                                  <span>' . $bct['tenphong'] . ' </span>
                                                            </div>
                                                      </div>
                                                      </div>
                                                      </div>
                                                      </div> 
                                                      ';
                                                    }
                                                }
                                                $i += 1;
                    ?>



                </div>
            </div>
            <!-- <div class="col-4">
                <div class="cart__right">
                    <h5>Thông tin thanh toán</h5>
                    <?php
                    if (isset($_SESSION['email'])) {
                        viewcart();
                    }
                    ?>


                </div>
            </div> -->
        </div>
    </div>
</div>



<div class="partner container">
    <div class="partner__content">
        <div class="partner__item d-flex">
            <div class="partner__left">
                <h5>KHÁCH SẠN & NGHỈ DƯỠNG</h5>
            </div>
            <div class="partner__right">
                <div class="row">
                    <div class="col-2">
                        <img src="./img/vp_hotel_resort_1647925026.webp" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/vinoasis_1647925040.webp" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/vp_luxury_1647925062.webp" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/condotel_1647925071.webp" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/discovery_1647925078.webp" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/holidays_1647925088.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="partner__item d-flex">
            <div class="partner__left" style="padding-right: 65px;">
                <h5>HỘI HỌP & SỰ KIỆN</h5>
            </div>
            <div class="partner__right">
                <div class="row">
                    <div class="col-4">
                        <img src="./img/convention_1647925137.webp" alt="" />
                    </div>
                    <div class="col-4">
                        <img src="./img/almaz_1647925645.webp" alt="" />
                    </div>
                    <div class="col-4">
                        <img src="./img/imperia_1647925662.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="partner__item d-flex">
            <div class="partner__left" style="padding-top: 20px; padding-right: 60px;">
                <h5>VUI CHƠI & GIẢI TRÍ</h5>
            </div>
            <div class="partner__right">
                <div class="row">
                    <div class="col-2">
                        <img src="./img/vw_1647925754.svg" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/vp_golf_1647925676.svg" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/safari_1647925690.svg" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/grand_world_1647925701.svg" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/pquc_1647925710.svg" alt="" />
                    </div>
                    <div class="col-2">
                        <img src="./img/holidays_1647925088.webp" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer__content container">
        <div class="footer__top">
            <div class="row">
                <div class="col-3">
                    <img src="./img/logo_vp_footer.svg" alt="" />
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa-solid fa-location-dot"></i>
                                Đảo Hòn Tre, Phường Vĩnh Nguyên, Thành phố Nha Trang, Tỉnh
                                Khánh Hòa, Việt Nam
                            </a>
                        </li>
                        <li>
                            <a href="" style="color: #f39f2d;">
                                <i class="fa-solid fa-envelope"></i>callcenter@vinpearl.com
                            </a>
                        </li>
                        <li>
                            <a href="" style="color: #f39f2d; font-weight: 700;">
                                <i class="fa-solid fa-phone"></i>1900 23 23 89 (Nhánh số 3)
                            </a>
                        </li>
                    </ul>
                    <img class="img-fluid" src="./img/logo-da-thong-bao-website-voi-bo-cong-thuong.webp" alt="" />
                </div>
                <div class="col-3">
                    <h5>GIỚI THIỆU</h5>
                    <ul>
                        <li>
                            <a href="">Về chúng tôi</a>
                        </li>
                        <li>
                            <a href="">Thành tựu</a>
                        </li>
                        <li>
                            <a href="">Liên hệ</a>
                        </li>
                        <li>
                            <a href="">Tuyển dụng</a>
                        </li>
                        <li>
                            <a href="">Câu hỏi thường gặp</a>
                        </li>
                        <li>
                            <a href="">Bản đồ trang</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <h5>TIN TỨC & SỰ KIỆN</h5>
                    <ul>
                        <li>
                            <a href="">Tin công ty</a>
                        </li>
                        <li>
                            <a href="">Cẩm nang du lịch</a>
                        </li>
                    </ul>
                    <h5>THƯ VIỆN ẢNH</h5>
                </div>
                <div class="col-3">
                    <h5>ĐIỀU KHOẢN & QUY ĐỊNH</h5>
                    <ul>
                        <li>
                            <a href="">Điều khoản chung</a>
                        </li>
                        <li>
                            <a href="">Quy định chung</a>
                        </li>
                        <li>
                            <a href="">Quy định thanh toán</a>
                        </li>
                        <li>
                            <a href="">Quy định về xác nhận thông tin đặt phòng</a>
                        </li>
                        <li>
                            <a href="">Chính sách giỏi quyết tranh chấp</a>
                        </li>
                        <li>
                            <a href="">Chính sách quyền riêng tư</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__mid">
            <ul>
                <li>
                    <a href="">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <div class="divsion"></div>
        </div>
        <div class="footer__bottom">
            <div class="row">
                <div class="col-3">
                    <h6>Số ĐKKD:</h6>
                    <p style="width: 80%;">4200456848. ĐK lần đầu 26/7/2006.</p>
                    <p>ĐK thay đổi lần thứ 50: 3/3/2020</p>
                </div>
                <div class="col-6">
                    <h6>Nơi cấp:</h6>
                    <p>Sở kế hoạch và đầu tư tỉnh Khánh Hòa</p>
                    <h6>Lĩnh vực kinh doanh:</h6>
                    <p>
                        Khách sạn, biệt thự hoặc căn hộ kinh doanh dịch vụ lưu trú ngắn
                        ngày; khu du lịch sinh thái
                    </p>
                </div>
                <div class="col-3">
                    <h6>Chủ tài khoản:</h6>
                    <p>
                        Công ty cổ phần Vinpearl Tài khoản ngân hàng số: 9124412488166
                        (VND) Ngân hàng thương mại cổ phần Kỹ Thương Việt Nam
                        (Techcombank) – Hội sở
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- back to top -->
<a href="" class="backToTop cd-top text-replace js-cd-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="./js/owl-carousel/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })
</script>
<script>
    $('input.input-qty').each(function() {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
                if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
                var x = Number($this.val()) + 1
                if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
    })
</script>
<script src="../js/backtotop/util.js"></script>
<script src="../js/backtotop/mainbacktotop.js"></script>
<script src="./js/main.js"></script>
</body>

</html>