<!DOCTYPE html>
<html lang="en">

<head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="./css/owl-carousel/owl.carousel.min.css" />
      <link rel="stylesheet" href="./css/owl-carousel/owl.theme.default.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
      <div class="header container">
            <div class="header__content">
                  <div class="row">
                        <div class="col-3">
                              <div class="header__left">
                                    <div class="header__logo">
                                          <a href="index.php"><img src="./img/logo/logo cochu.png" alt=""></a>
                                    </div>
                              </div>
                        </div>
                        <div class="col-9">
                              <div class="header__right">
                                    <div class="header__nav d-flex">
                                          <nav class="navbar navbar-expand-lg navbar-light">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                      <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                      <ul class="navbar-nav mr-auto">
                                                            <li class="nav-item dropdown">
                                                                  <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        ĐẶT DỊCH VỤ
                                                                  </a>
                                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">
                                                                              Tìm khách sạn
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                              Tìm tour & trải nghiệm
                                                                        </a>
                                                                  </div>
                                                            </li>
                                                            <li class="nav-item dropdown">
                                                                  <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        TRẢI NGHIỆM VINPEARL
                                                                  </a>
                                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">Quần thể</a>
                                                                        <a class="dropdown-item" href="#">
                                                                              Khách sạn
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                              Dịch vụ
                                                                        </a>
                                                                  </div>
                                                            </li>
                                                            <li class="nav-item">
                                                                  <a class="nav-link" href="#">ƯU ĐÃI KHUYẾN MÃI</a>
                                                            </li>
                                                            <li class="nav-item dropdown">
                                                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        PEARL CLUB
                                                                  </a>
                                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">Tổng quan</a>
                                                                        <a class="dropdown-item" href="#">
                                                                              Quyền lợi
                                                                        </a>
                                                                  </div>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </nav>
                                          <span>
                                                <div style="padding-top: 6px;">
                                                      <?php
                                                      if (isset($_SESSION['email']) && (is_array($_SESSION['email']))) {
                                                            extract($_SESSION['email']);
                                                      ?>
                                                            <span>
                                                                  <a class="nav-link dropdown-toggle" style="color: #000;display: block;max-width: 80px;overflow: hidden;white-space: nowrap;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fa-solid fa-user"></i>
                                                                        <b>
                                                                              <?= $hoten ?>
                                                                        </b>
                                                                  </a>
                                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="index.php?act=thongtin&&iduser=<?= $iduser ?>">Thông
                                                                              tin tài khoản</a>
                                                                        <?php if ($vaitro == 1) : ?>
                                                                              <a class="dropdown-item" href="./admin/index.php">Quản
                                                                                    lý trang web</a>
                                                                        <?php endif ?>
                                                                        <a class="dropdown-item" href="#">Đặc quyền thẻ</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">
                                                                              Lịch sử giao dịch
                                                                        </a>
                                                                        <a class="dropdown-item" href="index.php?act=dangxuat">
                                                                              Đăng xuất
                                                                        </a>
                                                                  </div>
                                                            </span>






                                                      <?php
                                                      } else {
                                                      ?>
                                                            <a style="color: #000; padding-top: 20px;" href="index.php?act=dangnhap">Đăng nhập<i style="padding-left:10px;" class="fa-solid fa-angle-down"></i></a>
                                                      <?php } ?>

                                                </div>
                                                <!-- <a class="nav-link dropdown-toggle" style="color: #000;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-user"></i>
                                        Name User
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                                        <a class="dropdown-item" href="#">Quản Lý Trang</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            Lịch sử giao dịch
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Đăng xuất
                                        </a> -->
                                    </div>
                                    </span>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
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
                                    <!-- <div class="slide__member">
                                          <div class="dropdown">
                                                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Số người
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <div class="dropdown__content" style="display: flex; width: 100%;">
                                                            <div class="dropdown__item">
                                                                  <div class="dropdown__left">
                                                                        <h5>Người lớn</h5>
                                                                  </div>
                                                                  <div class="dropdown__right">
                                                                        <div class="buttons_added">
                                                                              <input class="minus is-form" type="button" value="-">
                                                                              <input aria-label="quantity" class="input-qty" max="10" min="0" name="" type="number" value="">
                                                                              <input class="plus is-form" type="button" value="+">
                                                                        </div>
      
                                                                  </div>
      
                                                            </div>
                                                            <div class="dropdown__item">
                                                                  <div class="dropdown__left">
                                                                        <h5>Trẻ em</h5>
                                                                  </div>
                                                                  <div class="dropdown__right">
                                                                        <div class="buttons_added">
                                                                              <input class="minus is-form" type="button" value="-">
                                                                              <input aria-label="quantity" class="input-qty" max="10" min="0" name="" type="number" value="">
                                                                              <input class="plus is-form" type="button" value="+">
                                                                        </div>
      
                                                                  </div>
      
                                                            </div>
                                                            <div class="dropdown__item">
                                                                  <div class="dropdown__left">
                                                                        <h5>Em bé</h5>
                                                                  </div>
                                                                  <div class="dropdown__right">
                                                                        <div class="buttons_added">
                                                                              <input class="minus is-form" type="button" value="-">
                                                                              <input aria-label="quantity" class="input-qty" max="10" min="0" name="" type="number" value="">
                                                                              <input class="plus is-form" type="button" value="+">
                                                                        </div>
      
                                                                  </div>
      
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div> -->
                                    <button style="width: 150px;
                                    height: 39px;"><a href="">TÌM KIẾM</a></button>
                              </div>
                        </div>
                  </div>
                  <div class="cart__shopping d-block">
                        <!-- Button trigger modal -->
                        <button type="button" style="outline: none; line-height: 70px; background-color: #DCE0EE;" data-toggle="modal" data-target="#exampleModa">
                              <img class="img-fluid" style="width: 30px; height: 30px;" src="./img/shopping-cart.png" alt="">
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">All of bill</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                </button>
                                          </div>
                                          <div class="modal-body">
                                                <div class="tour__detail">
                                                      <div class="tour__item">
                                                            <div class="row">
                                                                  <div class="col-4">
                                                                        <img src="./img/263ddf2506ce46af9cad02decca77164_ca956a76d2db4c43a76b2e038fc5d5f8_JUN_9458_2.jpg.webp" alt="">
                                                                  </div>
                                                                  <div class="col-8">
                                                                        <div class="tour__item__infor">
                                                                              <h3>[HN – PHÚ QUỐC] THU VIVU COMBO | VMB
                                                                                    Vietnam Airlines + 3N2Đ phòng gồm ăn
                                                                                    sáng/</h3>
                                                                              <p>Người lớn - Phòng tiêu chuẩn x 2</p>
                                                                              <span>Price : 15.000.000 đ</span>
                                                                        </div>

                                                                  </div>

                                                            </div>
                                                      </div>
                                                      <div class="tour__detail__price d-flex justify-content-between" style="margin-top: 50px;">
                                                            <div>
                                                                  <h6>Tổng tiền (2 items)</h6>
                                                                  <span>15000000 VNĐ</span>
                                                            </div>
                                                            <button type="button" class="btn btn-danger">Xem giỏ
                                                                  hàng</button>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="infor__tour container">
            <h4>[HN – PHÚ QUỐC] THU VIVU COMBO | VMB Vietnam Airlines + 3N2Đ phòng gồm ăn sáng/ ba bữa +
                  VinWonders/Safari + giảm 200K khi mua qua App</h4>
            <div class="infor__tour__content">
                  <div class="row">
                        <div class="col-8">
                              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                          <div class="carousel-item active">
                                                <img src="./img/chitiettour/c7995cec49af41fdb6e161287ed3f30f_IMG12_summer2.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                                <img src="./img/chitiettour/c2db50c4d05a4018a978fe52311efc9d_DGH_2236_summer2.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                                <img src="./img/chitiettour/f6446fe6f65e4e31bb5134f2c774952c__DSC4043 (1)_summer2.jpg" class="d-block w-100" alt="...">
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
                                    <p>Mã SP: <span>VI0123</span></p>
                                    <div class="infor__tour__price">
                                          <div>10.050.000 đ</div>
                                          <div>7.000.001 đ</div>
                                    </div>
                                    <div class="choice__hotel">
                                          <h4>Vui lòng chọn khách sạn</h4>
                                          <div class="choice__hotel__content">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" style=" background-color: #f39f2d; outline: none;" data-target="#exampleModal">
                                                      Chọn phòng khách sạn
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h3 class="modal-title" id="exampleModalLabel">
                                                                              Khách sạn mường thanh</h3>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                        <div class="room__nomal">
                                                                              <div class="h5">Phòng thường</div>
                                                                              <form action="">
                                                                                    <input class="check" type="button" value="PN001" placeholder="PN001">
                                                                                    <input type="button" value="PN002">
                                                                                    <input type="text" placeholder="PN003">
                                                                                    <input type="text" placeholder="PN004">
                                                                                    <input type="text" placeholder="PN005">
                                                                                    <input class="check" type="text" placeholder="PN006">
                                                                                    <input type="text" placeholder="PN007">
                                                                                    <input type="text" placeholder="PN008">
                                                                                    <input type="text" placeholder="PN009">
                                                                              </form>
                                                                        </div>
                                                                        <div class="room__medium">
                                                                              <div class="h5">Phòng thương gia</div>
                                                                              <form action="">
                                                                                    <input type="text" placeholder="PM001">
                                                                                    <input class="check" type="text" placeholder="PM002">
                                                                                    <input type="text" placeholder="PM003">
                                                                                    <input type="text" placeholder="PM004">
                                                                                    <input type="text" placeholder="PM005">
                                                                                    <input class="check" type="text" placeholder="PM006">
                                                                                    <input type="text" placeholder="PM007">
                                                                                    <input type="text" placeholder="PM008">
                                                                                    <input class="check" type="text" placeholder="PM009">

                                                                              </form>
                                                                        </div>
                                                                        <div class="room__king">
                                                                              <div class="h5">Phòng cao cấp</div>
                                                                              <form action="">
                                                                                    <input type="text" placeholder="PK001">
                                                                                    <input class="check" type="text" placeholder="PK002">
                                                                                    <input type="text" placeholder="PK003">
                                                                                    <input type="text" placeholder="PK004">
                                                                                    <input class="check" type="text" placeholder="PK005">
                                                                                    <input type="text" placeholder="PK006">
                                                                                    <input type="text" placeholder="PK007">
                                                                                    <input type="text" placeholder="PK008">
                                                                                    <input type="text" placeholder="PK009">
                                                                              </form>
                                                                        </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save</button>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <button type="button" class="btn" style="background-color: #f39f2d;"><a href="" style="color: #fff;text-decoration: none;">Đặt combo ngay</a></button>
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
                        <span>Vinpearl đón chào các tín đồ du lịch khám phá đến với thiên đường nghỉ dưỡng tại “Đảo Ngọc”
                              cùng ưu đãi chào thu – THU VI VU – Trọn gói vé máy bay Vietnam Airlines và 3 ngày 2 đêm
                              nghỉ dưỡng, vui chơi tại hệ sinh thái Vinpearl Phú Quốc cùng hàng loạt những đặc quyền hấp
                              dẫn:</span>
                        <span>
                              ► Thư thái tận hưởng với trọn gói vé máy bay khứ hồi của Vietnam Airlines bao gồm 01 kiện
                              10kg và 01 túi xách 2kg hành lý xách tay, 01 kiện 23kg và 01 kiện 10kg hành lý ký gửi/ 01
                              khách
                        </span>
                        <span>
                              ► Miễn phí sử dụng các dịch vụ ưu tiên tại sân bay:

                              • Quầy thủ tục ưu tiên

                              • Hành lý được gắn thẻ ưu tiên

                              • Lên tàu bay bằng lối đi ưu tiên và xe buýt ưu tiên trong trường hợp ra tàu bay bằng xe
                              buýt
                        </span>

                        <span>
                              ► Tận hưởng 02 đêm nghỉ cho 01 khách tùy theo gói Quý khách lựa chọn tại 1 trong 6 khách
                              sạn và khu nghỉ dưỡng Vinpearl Phú Quốc
                        </span>

                        <span>
                              ► Thưởng thức các dịch vụ ăn uống và vui chơi theo gói Quý khách lựa chọn:

                              + 02 bữa sáng và Vui chơi VinWonders hoặc Safari không giới hạn

                              + HOẶC 02 bữa sáng, 02 bữa trưa, 02 bữa tối buffet và vui chơi VinWonders & Safari không
                              giới hạn
                        </span>

                        <span>
                              ► Miễn phí phí trả góp lãi suất 0%, vui lòng xem chi tiết tại đây
                        </span>
                        <img class="img-fluid" src="./img/chitiettour/bd78075f87bd4128bfbaaf288e73ad6e_DGH_2145.jpg" alt="">
                        <p>Thư thái tận hưởng chuyến đi với vé máy bay khứ hồi của Vietnam Airlines cùng những quyền
                              lợi ưu tiên</p>
                        <span>Tiết kiệm thời gian và công sức đặt vé máy bay, combo nghỉ dưỡng trọn gói của Vinpearl đã bao
                              gồm vé máy bay khứ hồi của hãng hàng không quốc gia Vietnam Airlines (đã bao gồm 12kg hành
                              lý xách tay, 01 kiện 23kg và 01 kiện 10kg hành lý ký gửi/ 01 khách) cho kỳ nghỉ của quý
                              khách trở nên thảnh thơi hơn bao giờ hết.

                              Đặc biệt, với Summer Combo, quý khách sẽ được tận hưởng những đặc quyền của hãng tại sân
                              bay, giúp cho hành trình di chuyển trở nên nhẹ nhàng, thư thái:

                              • Làm thủ tục tại quầy ưu tiên

                              • Hành lý được gắn thẻ ưu tiên

                              • Lên tàu bay bằng lối đi ưu tiên và xe buýt ưu tiên trong trường hợp ra tàu bay bằng xe
                              buýt</span>
                        <p>Thưởng trọn 02 đêm nghỉ tại Vinpearl Phú QuốcThưởng trọn 02 đêm nghỉ tại Vinpearl Phú
                              Quốc</p>
                        <span>Tùy theo nhu cầu sử dụng của quý khách và tình trạng phòng của khách sạn, quý khách có thể
                              lựa chọn các cơ sở lưu trú phù hợp tại 1 trong 6 khách sạn và khu nghỉ dưỡng Vinpearl Phú
                              Quốc:

                              + Phòng tiêu chuẩn khách sạn Vinoasis Phú Quốc

                              + Hoặc Phòng Deluxe Hướng Vườn tại Vinpearl Resort & Golf Phú Quốc hoặc Vinpearl Resort &
                              Spa Phú Quốc

                              + Hoặc Villa hướng vườn tại Vinpearl Discovery Wonderworld Phú Quốc hoặc Vinpearl
                              Discovery Coastalland Phú Quốc hoặc Vinpearl Discovery Green Hill Phú Quốc</span>
                        <span>Thưởng thức ẩm thực 5 sao với thực đơn phong phú, đa dạng</span>
                        <span>Quý khách có thể linh hoạt lựa chọn gói dịch vụ ẩm thực gồm bữa sáng hoặc 03 bữa mỗi ngày,
                              phù hợp với nhu cầu đa dạng của chuyến đi. Với bàn tay chế biến của những đầu bếp tài hoa
                              và sự phục vụ chuyên nghiệp của đội ngũ nhân viên, du khách không chỉ khởi đầu ngày mới
                              với các món ăn hòa quyện tinh hoa ẩm thực Việt Nam và quốc tế mà còn được dịp ấn tượng bởi
                              dịch vụ tận tâm và không gian sang trọng.</span>
                        <span>Tưng bừng vui chơi tại thiên đường giải trí VinWonders Phú Quốc </span>
                        <span>Đến với Phú Quốc thì không thể không tới VinWonders – Thiên đường giải trí với hàng trăm trò
                              chơi giành được các kỷ lục khu vực và thế giới. Tại đây, bạn sẽ có cơ hội trải nghiệm từ
                              các trò chơi cảm giác mạnh, công viên nước chủ đề khổng lồ cùng các khu trò chơi giải trí
                              trong nhà đến các hoạt động tham quan, mua sắm, ẩm thực, khám phá thủy cung.</span>
                        <p>Trải nghiệm thế giới động vật chân thực và sống động tại Vinpearl SafariTrải nghiệm thế
                              giới động vật chân thực và sống động tại Vinpearl Safari</p>
                        <span>Cũng nằm trên Bắc đảo Phú Quốc, Vinpearl Safari là công viên chăm sóc và bảo tồn động vật bán
                              hoang dã đầu tiên và lớn nhất Việt Nam. Hơn 3000 cá thể, 1200 loài thực vật và 150 loài
                              động vật ở đây được chăm sóc và nuôi dưỡng theo chuẩn Safari thế giới. Sự kết hợp hài hòa
                              giữa vẻ đẹp nguyên sinh của rừng quốc gia Phú Quốc và ngôi nhà chung của các loài động vật
                              sẽ mang lại cho du khách một trải nghiệm hoàn toàn mới mẻ khi được hòa mình vào không gian
                              sống hoang dã đầy chân thực và sống động. </span>
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
                        <p>- Ưu đãi dành riêng cho khách mua trên App MyVinpearl: Nhập mã THU200 giảm 200.000đ/đơn hàng
                              từ 02 voucher trở lên</p>
                        <span>Vui lòng tải App MyVinpearl tại đây và đăng nhập để nhận ưu đãi. Ưu đãi mã giảm giá không
                              áp dụng đồng thời với ưu đãi trả góp.

                              - Thuế và phí dịch vụ </span>
                        <p>Lưu ý:</p>
                        <p>- Quý khách vui lòng mua đủ số lượng voucher tối thiểu tương ứng: 01 phòng khách sạn tương
                              ứng với 02 voucher, 01 Villa 2 tương ứng 04 voucher, 01 villa 3 tương ứng 06 voucher, 01
                              villa 4 tương ứng 08 voucher</p>
                        <p>- Với voucher áp dụng ở nhiều khách sạn, việc lựa chọn khách sạn lưu trú và quy đổi Villa sẽ
                              tùy thuộc vào tình trạng cung cấp dịch vụ của khách sạn tại thời điểm đặt dịch vụ</p>
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
                        <p>- Ưu đãi dành riêng cho khách mua trên App MyVinpearl: Nhập mã THU200 giảm 200.000đ/đơn hàng
                              từ 02 voucher trở lên</p>
                        <span>Vui lòng tải App MyVinpearl tại đây và đăng nhập để nhận ưu đãi. Ưu đãi mã giảm giá không
                              áp dụng đồng thời với ưu đãi trả góp.

                              - Thuế và phí dịch vụ </span>
                        <p>Lưu ý:</p>
                        <p>- Quý khách vui lòng mua đủ số lượng voucher tối thiểu tương ứng: 01 phòng khách sạn tương
                              ứng với 02 voucher, 01 Villa 2 tương ứng 04 voucher, 01 villa 3 tương ứng 06 voucher, 01
                              villa 4 tương ứng 08 voucher</p>
                        <p>- Với voucher áp dụng ở nhiều khách sạn, việc lựa chọn khách sạn lưu trú và quy đổi Villa sẽ
                              tùy thuộc vào tình trạng cung cấp dịch vụ của khách sạn tại thời điểm đặt dịch vụ</p>
                  </div>
            </div>
      </div>
      <div class="products container">
            <h2>Sản phẩm tương tự</h2>
            <div class="products__content">
                  <div class="owl-carousel owl-theme">
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/a1acf82403f843389d7d955048d7fc72_af4a1d084a3442beaad93bb1868207ad_image.jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/2baf25da78044afc9b153d6c4fa122ff_DNB07168.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/a7fdffd9640140c599e57ee74b5aebbe_DJI_0073.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/64cced44b4014aeeb075f204a2ca7129__MG_9433.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/263ddf2506ce46af9cad02decca77164_ca956a76d2db4c43a76b2e038fc5d5f8_JUN_9458_2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/e988d25ace594b5396a1bb15150fc3d1_101-2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/9baddef5fcaa4f1b8c723940e195cde2_K96_7713_summer2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/a50e7ea0b1434e4695d34832f948debf_VOSPQ-overview_HCM-PQ-Meta-combo.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/4716b601b3634d6a993648a1cb208203__D8H6905 (1).jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] Vé vào cửa trực tiếp</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 đ</div>
                                                </div>
                                          </div>
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
      <style>
            .carousel-item {
                  height: 100%;
            }
      </style>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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