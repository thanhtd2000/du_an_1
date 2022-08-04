<div class="infor container">
    <div class="infor__content">
        <div class="row">
            <div class="col-3">
                <div class="infor__money d-flex" style="border-bottom: 1px solid #B1B1B1;">
                    <div class="infor__money__left">
                        <img src="./img/tải xuống.png" alt="">
                    </div>
                    <div class="infor__money__right" style="padding-left: 15px; font-size: 14px;">
                        <p style="margin: 0 !important;">Giá trị tích luỹ khả dụng</p>
                        <p>
                            <span style="font-weight: 700;">0</span> đồng
                        </p>
                    </div>
                </div>
                <div class="infor__list">
                    <div class="infor__title">
                        <div class="item active" data-this="dm-1">Thông tin tài khoản</div>
                        <div class="item" data-this="dm-2">Đặc quyền thẻ</div>
                        <div class="item" data-this="dm-3">Lịch sử giao dịch</div>
                        <div class="item" data-this="dm-4">Giới thiệu thành viên</div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="body">
                    <div class="infor__form active" id="dm-1">
                        <h3 style="border-bottom: 1px solid #B1B1B1;padding-bottom: 24px;">
                            Thông tin tài khoản
                        </h3>
                        <div class="infor__avatar">
                            <img class="img-fluid" src="./img/user/<?= $oneuser['anh'] ?>" alt="">
                        </div>
                        <div class="infor__input">

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="number" name="iduser" hidden value="<?= $oneuser['iduser'] ?>">
                                <label for="">Họ tên :</label>
                                <input type="text" name="hoten" value="<?= $oneuser['hoten'] ?>">
                                <label for="">Số điện thoại :</label>
                                <input type="text" name="sdt" value="<?= $oneuser['sdt'] ?>">
                                <label for="">Email :</label>
                                <input type="text" name="email" readonly value="<?= $oneuser['email'] ?>">
                                <label for="">Địa chỉ:</label>
                                <input type="text" name="diachi" value="<?= $oneuser['diachi'] ?>">
                                <label for="">Ảnh đại diện:</label>
                                <input type="file" value="<?= $user['anh'] ?>" name="anh">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="password" value="<?= $oneuser['password'] ?>">
                                <input type="submit" name="themmoi" value="Lưu thay đổi" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                    <div class="infor__offer" id="dm-2">
                        <h3 style="border-bottom: 1px solid #B1B1B1;padding-bottom: 24px;">Đặc quyền thẻ
                        </h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 40%;">Ưu đãi</th>
                                    <th style="width: 40%;"></th>
                                    <th scope="col" style="text-align: center;">Pearl Club</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Ưu đãi giá phòng khách sạn Vinpearl trên giá tốt nhất.
                                    </td>
                                    <td>
                                        Áp dụng đặt online trên Website và đặt trực tiếp tại cơ sở
                                    </td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                        <p>5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tham gia private sale 48h trước giờ mở bán
                                    </td>
                                    <td>2 lần/năm - Chương trình khuyến mãi giá sốc có giới hạn số lượng</td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ưu đãi giảm giá các sản phẩm hội viên của VinKE
                                    </td>
                                    <td>Chỉ áp dụng cho VinKE</td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                        <p>5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ưu đãi dịch vụ ẩm thực 5 sao thượng hạng dành cho chủ thẻ
                                    </td>
                                    <td>Bao gồm hệ thống Almaz Hà Nội, không bao gồm đồ uống có cồn. Áp dụng cho số khách/hóa đơn: 1</td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                        <p>5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ưu đãi dịch vụ ẩm thực 5 sao thượng hạng
                                    </td>
                                    <td>Bao gồm hệ thống Almaz Hà Nội, không bao gồm đồ uống có cồn. Áp dụng cho số khách (Bao gồm chủ thẻ)/hóa đơn: 2
                                    </td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                        <p>5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ưu đãi dịch vụ ẩm thực 5 sao thượng hạng
                                    </td>
                                    <td>Bao gồm hệ thống Almaz Hà Nội, không bao gồm đồ uống có cồn. Áp dụng cho số khách (Bao gồm chủ thẻ)/hóa đơn: 3
                                    </td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                        <p>5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ưu đãi dịch vụ ẩm thực 5 sao thượng hạng
                                    </td>
                                    <td>Bao gồm hệ thống Almaz Hà Nội, không bao gồm đồ uống có cồn. Áp dụng cho số khách (Bao gồm chủ thẻ)/hóa đơn: 4 trở lên</td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                        <p>5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Giảm giá khi mua vé tiêu chuẩn tại VinKE và Vinpearl Aquarium
                                    </td>
                                    <td>Chỉ áp dụng tại Times City</td>
                                    <td>
                                        <img src="./img/point.png" alt="">
                                        <p>5%</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="infor__history" id="dm-3">
                        <h3 style="border-bottom: 1px solid #B1B1B1;padding-bottom: 24px;">Lịch sử giao dịch</h3>
                        <img style="text-align: center;
                                          padding: 50px 0;" src="./img/empty-page.6fb3601e.png" alt="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Mã đơn</th>
                                    <th>Khách sạn</th>
                                    <th>Số phòng</th>
                                    <th>Tour</th>
                                    <th>Ngày bắt đầu</th>
                                    <th>Ngày kết thúc</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng Thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listhd as $dh) : ?>
                                    <?php extract($dh) ?>
                                    <tr>
                                        <td><?= $madh ?></td>
                                        <td><?= $maks ?></td>
                                        <td><?= $madh ?></td>
                                        <td><?= $name ?></td>
                                        <td><?= $start ?></td>
                                        <td><?= $finish ?></td>
                                        <td><?= $ngaydathang ?></td>
                                        <td><?= number_format($total) ?> VNĐ</td>
                                        <td style="color: green;"><?= $bill_status?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="infor__invite" id="dm-4">
                        <h3 style="border-bottom: 1px solid #B1B1B1;padding-bottom: 24px;">
                            Giới thiệu thành viên
                        </h3>
                        <img src="./img/referral-banner.d61f4c26.png" alt="">
                        <form action="">
                            <label for="">Link giới thiệu : </label>
                            <input type="text" readonly placeholder="https://vinpearl.com/vi/user/login?register=true&refcode=0005706001">
                            <label for="">Mã giới thiệu : </label>
                            <input type="text" disabled placeholder="0000000000" name="" id="">
                            <label for="">Mã QR : </label>
                            <img src="./img/qr.png" alt="">
                            <p style="font-size: 13px; padding: 10px 0;">*Quét QR để mở đường link giới thiệu</p>
                        </form>

                    </div>
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
                        <img src="./img/vp_hotel_resort_1647925026.webp" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/vinoasis_1647925040.webp" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/vp_luxury_1647925062.webp" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/condotel_1647925071.webp" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/discovery_1647925078.webp" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/holidays_1647925088.webp" alt="">
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
                        <img src="./img/convention_1647925137.webp" alt="">
                    </div>
                    <div class="col-4">
                        <img src="./img/almaz_1647925645.webp" alt="">
                    </div>
                    <div class="col-4">
                        <img src="./img/imperia_1647925662.webp" alt="">
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
                        <img src="./img/vw_1647925754.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/vp_golf_1647925676.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/safari_1647925690.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/grand_world_1647925701.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/pquc_1647925710.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="./img/holidays_1647925088.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>