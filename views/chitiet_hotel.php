<div class="slide__img">
    <div class="slide__img__content">
        <img style="width: 100%;" src="./img/khachsan/<?= $oneks['anh'] ?>" alt="">
        <div class="slide__img__top">
            <h3><?= $oneks['tenks'] ?></h3>
            <ul class="d-flex">
                <li><a href=""><i class="fa-solid fa-location-dot"></i> Số 60 đường Biên Hoà, Minh
                        Khai, Phủ Lý, Hà Nam</a></li>
                <li><a href=""><i class="fa-solid fa-phone"></i> 84-226 352 2222</a></li>
                <li><a href=""><i class="fa-solid fa-envelope"></i> res.VPCOPL@vinpearl.com</a></li>
                <li><a href=""><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star-half"></i></a></li>
            </ul>
        </div>
        <!--  -->
    </div>
</div>
<div class="view container">
    <div class="view__content">
        <ul>
            <li><a href="" class="active">Tổng quan</a></li>
            <li><a href="">Các hạng phòng</a></li>
            <li><a href="">Spa</a></li>
            <li><a href="">Review</a></li>
        </ul>
        <div class="view__main">
            <div class="view__main__text">
                <div class="row">
                    <div class="col-9">
                        <div class="view__main__text__left">
                            <p><?= $oneks['mota'] ?></p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="view__main__text__right">
                            <p><i class="fa-solid fa-minimize"></i> Diện tích: <span>25.159,16
                                    m2</span>
                            </p>
                            <p><i class="fa-solid fa-person-booth"></i></i> Số phòng: <span>200
                                    phòng</span></p>
                        </div>

                    </div>
                </div>
                <div class="owl-carousel">
                    <div> <img src="./img/vinpearl-condotel-phu-ly-1_1629218637.jpg.webp" alt=""> </div>
                    <div> <img src="./img/vinpearl-condotel-phu-ly-2_1629218640.jpg.webp" alt=""></div>
                    <div> <img src="./img/vinpearl-condotel-phu-ly-5_1636038935.jpg.webp" alt=""> </div>
                    <div> <img src="./img/vinpearl-condotel-phu-ly-6_1636038945.jpg.webp" alt=""> </div>
                </div>
            </div>
        </div>
        <div class="view__room">
            <div class="products container">
                <h2>Các hạng phòng</h2>
                <div class="products__content">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($select_phong as $phong) : ?>
                            <?php extract($phong) ?>
                            <div class="item">
                                <div class="card" style="width: 22rem;">
                                  <a href="index.php?act=chitietphong&&maks=<?= $maks ?>&&maloai=<?= $maloai ?>">  <img src="./img/loaiphong/<?= $anh ?>" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $tenloai ?></h5>
                                        <div class="products__room__detail">
                                            <div class="products__top">
                                                <span><i class="fa-solid fa-maximize"></i> 37
                                                    m2</span>
                                                <span><i class="fa-solid fa-user-group"></i> 2
                                                    người lớn và 2 trẻ em</span>
                                            </div>
                                            <div class="products__bottom">
                                                <p>Chỉ từ <span><?= number_format($giaphong) ?> đ</span>/đêm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div style="text-align: center;padding: 30px 0;">
                <div style="text-align: center;padding: 30px 0;">
                    <button type="button" class="btn" style="background-color: #f39f2d;"><a href="" style="color: #fff;text-decoration: none;">Nhấn vào loại phòng để đặt</a></button>
                </div>
            </div>
            <div class="describe container">
      <div class="describe__title">
            <span class="item active" data-this="dm-1">Comment</span>
            
      </div>
      <iframe src="views/binhluan_ks.php?maks=<?=$maks?>" width="100%"  frameboder="0"></iframe>
</div>
            <div class="view__more__ofer">
                <div class="products container">
                    <h2>Sản phẩm dành cho bạn</h2>
                    <div class="products__content">
                        <div class="owl-carousel owl-theme">
                            <?php foreach ($listkhachsan as $ks) : ?>
                                <?php extract($ks) ?>
                                <?php if ($mak == $makv) : ?>
                                    <div class="item">
                                        <div class="card" style="width: 22rem;">
                                            <a href="index.php?act=chitietks&&maks=<?= $maks ?>&&makv=<?= $makv ?>"><img src="./img/khachsan/<?= $anh ?>" class="card-img-top" alt="..."></a>
                                            <div class="card-body">
                                                <a href="index.php?act=chitietks&&maks=<?= $maks ?>&&makv=<?= $makv ?>">
                                                    <h5 class="card-title"><?= $tenks ?></h5>
                                                </a>
                                                <div class="products__detail">
                                                    <div class="products__left">
                                                        <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                    </div>
                                                    <!-- <div class="products__right">
                                                      <div><?= number_format($giatre_em) ?>-<?= number_format($gia_nl) ?> VNĐ</div>
                                                </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="view__service">
                <h2 style="padding: 50px 0;">Các tiện ích và dịch vụ nổi bật</h2>
                <div class="view__service__content">
                    <div class="row">
                        <div class="col-4">
                            <div class="view__service__item">
                                <div class="view__service__left">
                                    <img src="./img/swimming-pool.png" alt="">
                                </div>
                                <div class="view__service__right">
                                    <p>Bể bơi vô cực</p>
                                    <span>6:00-19:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="view__service__item">
                                <div class="view__service__left">
                                    <img src="./img/swimming-pool.png" alt="">
                                </div>
                                <div class="view__service__right">
                                    <p>Bể bơi vô cực</p>
                                    <span>6:00-19:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="view__service__item">
                                <div class="view__service__left">
                                    <img src="./img/swimming-pool.png" alt="">
                                </div>
                                <div class="view__service__right">
                                    <p>Bể bơi vô cực</p>
                                    <span>6:00-19:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="view__service__item">
                                <div class="view__service__left">
                                    <img src="./img/swimming-pool.png" alt="">
                                </div>
                                <div class="view__service__right">
                                    <p>Bể bơi vô cực</p>
                                    <span>6:00-19:00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="view__service__item">
                                <div class="view__service__left">
                                    <img src="./img/swimming-pool.png" alt="">
                                </div>
                                <div class="view__service__right">
                                    <p>Bể bơi vô cực</p>
                                    <span>6:00-19:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" style="padding: 30px 0;">
                    <button>Xem thêm</button>
                </div>
            </div>
            <div class="view__spa">
                <h2 style="padding-bottom: 30px;">Spa</h2>
                <img style="border-radius: 5px;" class="img-fluid" src="./img/chitietkhachsan/Spa_1647326030.png.webp" alt="">
                <p style="font-size: 14px;color: #413c3c;padding-top: 30px;letter-spacing: 1px;font-weight: 300;">
                    Thả lỏng cơ thể để tận hưởng một liệu trình massage đặc trưng có nguồn gốc từ xứ sở
                    hạnh phúc Bali, sử dụng các sản phẩm chăm sóc thượng hạng với nguyên liệu hoàn toàn
                    từ thiên nhiên.</p>
            </div>
            <div class="view__new d-flex">
                <div class="view__new__left">
                    <h2>Tin tức & Trải nghiêm</h2>
                    <p>Chưa cập nhật thông tin và tin tức liên quan đến khách sạn</p>
                </div>
                <div class="view__new__right">
                    <button><a href="">Xem thêm >></a></button>
                </div>
            </div>
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
<script src="../js/backtotop/util.js"></script>
<script src="../js/backtotop/mainbacktotop.js"></script>
<script src="./js/main.js"></script>
</body>

</html>