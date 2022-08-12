
<div class="cart container">
      <div class="cart__content">
            <div class="row">
                  <div class="col-8">
                        <!-- <div class="dang__nhap">
                                    <div class="row">
                                          <div class="col-3">
                                                <img src="./img/deal.png" alt="">
                                          </div>
                                          <div class="col-9">
                                                <h5>Đăng nhập để hưởng thêm ưu đãi dành riêng cho thành viên</h5>
                                                <p>Tích lũy giao dịch & nhận đêm nghỉ miễn phí</p>
                                                <a href="">Đăng nhập hoặc đăng kí</a>
                                          </div>
                                    </div>
                              </div> -->
                        <div class="cart__left">

                              <?php
                              if(isset($_SESSION['email'])){
                              $i=0;
                              foreach ($_SESSION['tour'] as $tour) {
                                    $hinh = $img_path . $tour[9];
                                    
                                    $xoa= '<a href="index.php?act=deltour&tourid='.$i.'"><img style="width: 20px;" src="./img/delete.png" alt=""></a>';
                                    echo '
                                                      <div class="cart__item">
                                                      <div class="d-flex justify-content-between">
                                                            <div class="cart__title">
                                                                  <input type="checkbox" aria-label="Checkbox for following text input">  <span>Thông tin chi tiết sản phẩm</span>
                                                            </div>
                                                            '.$xoa.'
                                                      </div>
                                                      <div class="cart__detail">
                                                      <div class="row">
                                                      <div class="col-4">
                                                            <img class="img-fluid" src="' . $hinh . '" alt="">
                                                      </div>
                                                      <div class="col-8">
                                                            <h5>' . $tour[1] . '</h5>
                                                            
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Giá người lớn:</p>
                                                                  <span>' . $tour[2] . ' đ</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                            <p>Giá trẻ em:</p>
                                                            <span>' .  $tour[3] . ' đ</span>
                                                      </div>
                                                           
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Ngày khởi hành  :</p>
                                                                  <span>' . $tour[6] . '</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Ngày về :</p>
                                                                  <span>' . $tour[7] . '</span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Khách sạn </p>
                                                                  <span>' . $tour[8] . ' </span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Loại phòng</p>
                                                                  <span>' . $tour[10] . ' </span>
                                                            </div>
                                                      </div>
                                                      </div>
                                                      </div>
                                                      </div> 
                                                      ';
                                                      $i+=1;
                              }
                       
                       
                              foreach ($_SESSION['khachsan'] as $ks) {
                                    $hinh1 = $img_path2 . $ks[4];
                                    
                                    $xoaks= '<a href="index.php?act=delks&maloai='.$i.'"><img style="width: 20px;" src="./img/delete.png" alt=""></a>';
                                    echo '
                                                      <div class="cart__item">
                                                      <div class="d-flex justify-content-between">
                                                            <div class="cart__title">
                                                                  <input type="checkbox" aria-label="Checkbox for following text input">  <span>Thông tin chi tiết sản phẩm</span>
                                                            </div>
                                                            '.$xoaks.'
                                                      </div>
                                                      <div class="cart__detail">
                                                      <div class="row">
                                                      <div class="col-4">
                                                            <img class="img-fluid" src="' . $hinh1 . '" alt="">
                                                      </div>
                                                      <div class="col-8">
                                                            <h5>' . $ks[0] . '</h5>
                                                            
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Giá phòng:</p>
                                                                  <span>' . $ks[3] . ' đ/đêm</span>
                                                            </div>
                                                           
                                                           
                                                            
                                                            
                                                            <div class="d-flex justify-content-between">
                                                                  <p>loại phòng</p>
                                                                  <span>' . $ks[1] . ' </span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Tên phòng phòng</p>
                                                                  <span>' . $ks[2] . ' </span>
                                                            </div>
                                                      </div>
                                                      </div>
                                                      </div>
                                                      </div> 
                                                      ';
                                                      $i+=1;
                              }
                        }
                              ?>



                        </div>
                  </div>
                  <div class="col-4">
                        <div class="cart__right">
                              <h5>Thông tin thanh toán</h5>
                              <?php
                              if(isset($_SESSION['email'])){
                                    viewcart();
                             
                        }
                              ?>
                              
                            
                        </div>
                  </div>
            </div>
      </div>
</div>
<?php
if(isset($_SESSION['email'])){
      
     
      echo'
      <form action="index.php?act=bill" class="d-block" method="post">
      
      <div class="client container">
      <div class="row">
            <div class="col-8">
                  <div class="client__content">
                        <h5>Thông tin khách hàng</h5>
                        
                              <div class="d-flex">
                                    <div>
                                          <label for="">* Họ</label>
                                          <input class="d-block" type="text" name="name" value="'.$hoten.'">
                                    </div>
                                    <div>
                                    <label for="">* Điện thoại</label>
                                    <input class="d-block" type="number" name="sdt" value="'.$sdt.'">
                              </div>
                                    
                              </div>
                              <div class="d-flex">
                              <div>
                              <label for="">* Địa chỉ</label>
                              <input class="d-block" type="text" name="diachi" value="'.$diachi.'">
                        </div>
                                    <div>
                                          <label for="">* Email</label>
                                          <input class="d-block" type="text" name="email" value="'.$email.'">
                                    </div>
                              </div>
                             
                        
                  </div>
            </div>
            <div class="col-4">

            </div>
      </div>
</div>
<div class="payment container">
      <div class="row">
            <div class="col-8">
                  <div class="payment__content">
                        <h5>Phương thức thanh toán</h5>
                        <form action="">
                              <div class="payment__ATM d-flex justify-content-between">
                                    <div>
                                          <input type="radio" name="pttt" value="Thẻ ATM / Tài khoản ngân hàng">
                                          <label for="">Thẻ ATM / Tài khoản ngân hàng</label>
                                    </div>
                                    <img src="./img/credit-card.png" alt="">
                              </div>
                              <div class="payment__QR d-flex justify-content-between">
                                    <div>
                                          <input type="radio" name="pttt" value="Thanh toán bằng mã QRCode">
                                          <label for="">Thanh toán bằng mã QRCode</label>
                                    </div>
                              </div>
                              <div class="payment__percen d-flex justify-content-between">
                                    <div>
                                          <input type="radio" name="pttt" value="Thanh toán trả góp 0% ">
                                          <label for="">Thanh toán trả góp 0% (Trong 6 tháng chỉ từ 2.500.000 đ/tháng)</label>
                                    </div>
                              </div>
                        </form>
                       
                        <input class="" type="submit" name="thanhtoan" class="btn btn-warning d-block w-100" style="background-color: #f39f2d;color: #fff;text-decoration: none; padding: 8px 15px; border-radius: 4px; font-size: 18px;"  value="Thanh toán" placeholder="">
                        
                  </div>

            </div>
            <div class="col-4">

            </div>
      </div>
</div>
</form>
      '; 
}else{
      echo'

      <div class="cart__content container">
      <div class="row">
            <div class="col-8">
      <div class="dang__nhap">
      <div class="row">
            <div class="col-3">
                  <img src="./img/deal.png" alt="">
            </div>
            <div class="col-9">
                  <h5>Đăng nhập để hưởng thêm ưu đãi dành riêng cho thành viên</h5>
                  <p>Tích lũy giao dịch & nhận đêm nghỉ miễn phí</p>
                  <a href="index.php?act=dangnhap">Đăng nhập hoặc đăng kí</a>
            </div>
      </div>
</div>
</div>
            </div>
            </div>
      ';
}

?>


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