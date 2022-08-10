
<div class="slide" style="background-color: #DCE0EE;">
    <div class="slide__bot container d-flex justify-content-between">
        <div class="body">
            <div class="slide__input2 d-block" id="dm-2">
                <div class="d-flex" style="background-color: #DCE0EE;">
                    <div class="slide__location" style="margin: 20px 10px;
                                    border: 1px solid #999;
                                    padding: 6px 0;
                                    border-radius: 5px;
                                    width: 225px;
                                    height: 40px;
                                    padding-left: 17px;">
                        <input type="text" style="background-color: #DCE0EE;" placeholder="Nhập khu vực">
                    </div>
                    <div class="slide__time" style="margin: 20px 10px;
                                    border: 1px solid #999;
                                    padding: 6px 0;
                                    border-radius: 5px;
                                    width: 225px;
                                    height: 40px;
                                    padding-left: 17px;">
                        <input type="text" style="background-color: #DCE0EE;" placeholder="Nhập địa điểm">
                    </div>

                    <button style="width: 150px;
                                    height: 39px;"><a href="">TÌM KIẾM</a></button>
                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION['email'])) {
            echo '
      <div class="cart__shopping d-block">
      <!-- Button trigger modal -->
      <a href="index.php?act=giohang"><button type="button" style="outline: none; line-height: 70px; background-color: #DCE0EE;" data-toggle="modal" data-target="#exampleModa">
                  <img class="img-fluid" style="width: 30px; height: 30px;" src="./img/shopping-cart.png" alt="">
            </button></a>

    
</div>
      ';
        } else {
        }
        ?>


    </div>
</div>
<div class="infor__tour container">
    <h4><?= $onelp['tenloai'] ?></h4>
    <div class="infor__tour__content">
        <div class="row">
            <div class="col-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <img src="./img/loaiphong/<?= $onelp['anh'] ?>" class="d-block w-100" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev" style="opacity: 0;" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" style="opacity: 0;" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-4">
                <div class="infor__tour__detail">
                    <p>Mã SP: <span>CB<?= $onelp['maloai'] ?></span></p>
                    <div class="infor__tour__price">
                        <div>Giá phòng : <?= number_format($onelp['giaphong']) ?> VNĐ</div>

                    </div>
                   
                    <div class="choice__hotel">
                        <h4>Vui lòng chọn khách sạn</h4>
                        </div>
                        <form action="index.php?act=giohang" method="post">
                        <?php foreach ($select_phong5 as $phong) : ?>
                            <?php extract($phong)?>
                            <label for=""><?=$tenphong?></label>
                            <input type="radio" name="tenphong" value="<?=$tenphong?>">
                        <?php endforeach ?>
                          
                        
                        <input class="" type="hidden" name="tenks" value="<?= $oneks['tenks'] ?>" placeholder="">  
                        <input class="" type="hidden" name="giaphong" value="<?= $onelp['giaphong'] ?>" placeholder=""> 
                        <input class="" type="hidden" name="anh" value="<?= $onelp['anh'] ?>" placeholder="">   
                        <input class="" type="hidden" name="tenloai" value="<?= $onelp['tenloai'] ?>" placeholder="">
                    <input class="" type="submit" class="btn" style="background-color: #f39f2d;color: #fff;text-decoration: none; padding: 8px 15px; border-radius: 4px; font-size: 18px;" name="datks" value="Đặt combo ngay" placeholder="">
                    </form>
                    <ul>
                        <li><i class="fa-solid fa-check"></i>Giá luôn tốt nhất</li>
                        <li><i class="fa-solid fa-check"></i>Không phí thanh toán</li>
                        <li><i class="fa-solid fa-check"></i>Xác nhận đơn hàng tức thì</li>
                    </ul>
                    <p style="font-size: 20px;"><i class="fa-solid fa-phone-volume"></i> Hotline : <span style="letter-spacing: 1px;">19000000</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="describe container">
    <div class="describe__title">
        <span class="item active" data-this="dm-1">Mô tả</span>
        <span class="item" data-this="dm-3">Bao gồm</span>
        <span class="item" data-this="dm-6">Điều khoản</span>
        <span class="item" data-this="dm-4">Chính sách hoàn huỷ</span>
        <span class="item" data-this="dm-5">Hướng dẫn sử dụng</span>
    </div>
    <div class="body">
        <div class="describe__input active" id="dm-1">
            <span><?= $onelp['mota'] ?></span>
        </div>
        <div class="describe__input" id="dm-3">
            <p>1. Các dịch vụ bao gồm: </p>
            <span>- Vé máy bay khứ hồi của Vietnam Airlines gồm bao gồm 01 kiện 10kg và 01 túi xách 2kg hành
                lý xách tay, 01 kiện 23kg và 01 kiện 10kg hành lý ký gửi/ 01 khách</span>
            <span>- Miễn phí sử dụng các dịch vụ ưu tiên tại sân bay: </span>
            <span>• Quầy thủ tục ưu tiên</span>
            <span>• Hành lý được gắn thẻ ưu tiên</span>
            <span>• Lên tàu bay bằng lối đi ưu tiên và xe buýt ưu tiên trong trường hợp ra tàu bay bằng xe
                buýt</span>
            <span>- 02 đêm nghỉ cho 01 khách (Áp dụng cho 02 người lớn/phòng) tùy theo gói Quý khách lựa
                chọn tại:</span>
            <span>+ Phòng tiêu chuẩn khách sạn VinOasis Phú Quốc</span>
            <span>+ Hoặc Phòng Deluxe Hướng Vườn tại Vinpearl Resort & Golf Phú Quốc hoặc Vinpearl Resort &
                Spa Phú Quốc</span>
            <span>+ Hoặc Villa hướng vườn tại Vinpearl Discovery Wonderworld Phú Quốc hoặc Vinpearl
                Discovery Coastalland Phú Quốc hoặc Vinpearl Discovery Green Hill Phú Quốc</span>
            <p>- Ưu đãi dành riêng cho khách mua trên App MyVinpearl: Nhập mã THU200 giảm 200.000đ/đơn hàng từ 02 voucher trở lên</p>
            <span>Vui lòng tải App MyVinpearl tại đây và đăng nhập để nhận ưu đãi. Ưu đãi mã giảm giá không
                áp dụng đồng thời với ưu đãi trả góp.

                - Thuế và phí dịch vụ </span>
            <p>Lưu ý:</p>
            <p>- Quý khách vui lòng mua đủ số lượng voucher tối thiểu tương ứng: 01 phòng khách sạn tương ứng với 02 voucher, 01 Villa 2 tương ứng 04 voucher, 01 villa 3 tương ứng 06 voucher, 01 villa 4 tương ứng 08 voucher</p>
            <p>- Với voucher áp dụng ở nhiều khách sạn, việc lựa chọn khách sạn lưu trú và quy đổi Villa sẽ tùy thuộc vào tình trạng cung cấp dịch vụ của khách sạn tại thời điểm đặt dịch vụ</p>
        </div>
        <div class="describe__input" id="dm-6">
            <p>1. Thời hạn sử dụng voucher</p>
            <span>- Thời gian bán: 02/07 – 31/07/2022 (hoặc đến khi hết số lượng voucher khuyến mại) </span>
            <span>- Thời gian lưu trú: Từ 01/08 – 30/09/2022, không áp dụng giai đoạn từ 01/09 - 05/09/2022</span>
            <span>- Thời gian đặt dịch vụ: Trong vòng 05 ngày kể từ ngày mua thành công đơn hàng và không muộn hơn ngày 10/08/2022</span>
            <p>2. Điều khoản phụ thu</p>
            <span>- Phụ thu ở thêm đêm, người lớn thứ 03, trẻ em, nâng cấp phòng, phụ thu xe đón tiễn, giải trí, ăn uống.... tại khách sạn và các dịch vụ khác không nằm trong mục “Dịch vụ bao gồm” quý khách vui lòng liên hệ tổng đài 1900 23 23 89 (Vinpearl nhánh số 3) hoặc email xulydonhang@vinpearl.com để được kiểm tra dịch vụ, tư vấn và báo giá ưu đãi.</span>
            <p>3. Điều kiện điều khoản khác</p>
            <span>- Áp dụng cho khách Việt Nam và khách nước ngoài sinh sống tại Việt Nam</span>
            <span>- Số lượng khách tối đa trên một phòng khách sạn được áp dụng như sau: </span>
            <span>+ Phòng khách sạn: 02 người lớn & 02 trẻ em dưới 12 tuổi hoặc 03 người lớn & 01 trẻ em dưới 12 tuổi (người lớn thứ 03 áp dụng giá phụ thu người đi kèm, không áp dụng giá voucher như khách chính trong phòng)</span>
            <span>+ Villa 2PN: 04 người lớn & 04 trẻ em dưới 12 tuổi; Villa 3PN: 06 người lớn & 06 trẻ em dưới 12 tuổi; Villa 4PN: 08 người lớn & 08 trẻ em dưới 12 tuổi</span>
            <span>- Mỗi phòng khách sạn được kê tối đa 01 giường phụ có tính phí. Không áp dụng kê giường phụ đối với Villa</span>
        </div>
        <div class="describe__input" id="dm-4">
            <span>- Voucher không hoàn hủy dịch vụ trừ trường hợp bất khả kháng tính từ thời điểm Quý khách nhận được Thư Xác nhận đặt dịch vụ từ chúng tôi.</span>
            <span>- Đổi tên, đổi chặng bay, ngày bay: Không áp dụng</span>
            <span>- Được phép đổi giờ bay miễn phí 01 lần trước ít nhất 72 giờ làm việc so với ngày bay đầu tiên</span>
        </div>
        <div class="describe__input" id="dm-5">
            <p>1. Các dịch vụ bao gồm: </p>
            <span>- Vé máy bay khứ hồi của Vietnam Airlines gồm bao gồm 01 kiện 10kg và 01 túi xách 2kg hành
                lý xách tay, 01 kiện 23kg và 01 kiện 10kg hành lý ký gửi/ 01 khách</span>
            <span>- Miễn phí sử dụng các dịch vụ ưu tiên tại sân bay: </span>
            <span>• Quầy thủ tục ưu tiên</span>
            <span>• Hành lý được gắn thẻ ưu tiên</span>
            <span>• Lên tàu bay bằng lối đi ưu tiên và xe buýt ưu tiên trong trường hợp ra tàu bay bằng xe
                buýt</span>
            <span>- 02 đêm nghỉ cho 01 khách (Áp dụng cho 02 người lớn/phòng) tùy theo gói Quý khách lựa
                chọn tại:</span>
            <span>+ Phòng tiêu chuẩn khách sạn VinOasis Phú Quốc</span>
            <span>+ Hoặc Phòng Deluxe Hướng Vườn tại Vinpearl Resort & Golf Phú Quốc hoặc Vinpearl Resort &
                Spa Phú Quốc</span>
            <span>+ Hoặc Villa hướng vườn tại Vinpearl Discovery Wonderworld Phú Quốc hoặc Vinpearl
                Discovery Coastalland Phú Quốc hoặc Vinpearl Discovery Green Hill Phú Quốc</span>
            <p>- Ưu đãi dành riêng cho khách mua trên App MyVinpearl: Nhập mã THU200 giảm 200.000đ/đơn hàng từ 02 voucher trở lên</p>
            <span>Vui lòng tải App MyVinpearl tại đây và đăng nhập để nhận ưu đãi. Ưu đãi mã giảm giá không
                áp dụng đồng thời với ưu đãi trả góp.

                - Thuế và phí dịch vụ </span>
            <p>Lưu ý:</p>
            <p>- Quý khách vui lòng mua đủ số lượng voucher tối thiểu tương ứng: 01 phòng khách sạn tương ứng với 02 voucher, 01 Villa 2 tương ứng 04 voucher, 01 villa 3 tương ứng 06 voucher, 01 villa 4 tương ứng 08 voucher</p>
            <p>- Với voucher áp dụng ở nhiều khách sạn, việc lựa chọn khách sạn lưu trú và quy đổi Villa sẽ tùy thuộc vào tình trạng cung cấp dịch vụ của khách sạn tại thời điểm đặt dịch vụ</p>
        </div>
    </div>
</div>
<div class="products container">
    <h2>Các hạng phòng khác</h2>
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

<!-- back to top -->
<a href="" class="backToTop cd-top text-replace js-cd-top">
    <i class="fas fa-angle-up"></i>
</a>
<style>
    .carousel-item {
        height: 100%;
    }
</style>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

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