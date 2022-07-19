<!DOCTYPE html>
<html lang="en">

<head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="./css/owl-carousel/owl.carousel.min.css" />
      <link rel="stylesheet" href="./css/owl-carousel/owl.theme.default.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                      data-target="#navbarSupportedContent"
                                                      aria-controls="navbarSupportedContent" aria-expanded="false"
                                                      aria-label="Toggle navigation">
                                                      <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                      <ul class="navbar-nav mr-auto">
                                                            <li class="nav-item dropdown">
                                                                  <a class="navbar-brand dropdown-toggle" href="#"
                                                                        id="navbarDropdown" role="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        ĐẶT DỊCH VỤ
                                                                  </a>
                                                                  <div class="dropdown-menu"
                                                                        aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">
                                                                              Tìm khách sạn
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                              Tìm tour & trải nghiệm
                                                                        </a>
                                                                  </div>
                                                            </li>
                                                            <li class="nav-item dropdown">
                                                                  <a class="navbar-brand dropdown-toggle" href="#"
                                                                        id="navbarDropdown" role="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        TRẢI NGHIỆM VINPEARL
                                                                  </a>
                                                                  <div class="dropdown-menu"
                                                                        aria-labelledby="navbarDropdown">
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
                                                                  <a class="nav-link dropdown-toggle" href="#"
                                                                        id="navbarDropdown" role="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        PEARL CLUB
                                                                  </a>
                                                                  <div class="dropdown-menu"
                                                                        aria-labelledby="navbarDropdown">
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
                                                            <a class="nav-link dropdown-toggle"
                                                                  style="color: #000;display: block;max-width: 80px;overflow: hidden;white-space: nowrap;"
                                                                  href="#" id="navbarDropdown" role="button"
                                                                  data-toggle="dropdown" aria-haspopup="true"
                                                                  aria-expanded="false">
                                                                  <i class="fa-solid fa-user"></i>
                                                                  <b>
                                                                        <?= $hoten ?>
                                                                  </b>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                  <a class="dropdown-item"
                                                                        href="index.php?act=thongtin&&iduser=<?= $iduser ?>">Thông
                                                                        tin tài khoản</a>
                                                                  <?php  if ($vaitro == 1) :?>
                                                                  <a class="dropdown-item" href="./admin/index.php">Quản
                                                                        lý trang web</a>
                                                                  <?php endif ?>
                                                                  <a class="dropdown-item" href="#">Đặc quyền thẻ</a>
                                                                  <div class="dropdown-divider"></div>
                                                                  <a class="dropdown-item" href="#">
                                                                        Lịch sử giao dịch
                                                                  </a>
                                                                  <a class="dropdown-item"
                                                                        href="index.php?act=dangxuat">
                                                                        Đăng xuất
                                                                  </a>
                                                            </div>
                                                      </span>






                                                      <?php
                                        } else {
                                        ?>
                                                      <a style="color: #000; padding-top: 20px;"
                                                            href="index.php?act=dangnhap">Đăng nhập<i
                                                                  style="padding-left:10px;"
                                                                  class="fa-solid fa-angle-down"></i></a>
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
      <div class="tour container">
            <div class="tour__content">
                  <div class="row">
                        <div class="col-3">
                              <div class="tour__left">
                                    <div class="tour__left_top d-flex">
                                          <h4 style="margin-bottom: 0;">Lọc kết quả</h4>
                                          <button>Đặt lại</button>
                                    </div>
                                    <div class="tour__brand">
                                          <h5>Thương hiệu</h5>
                                          <ul>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Vinpearl Condotel </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Vinpearl Discovery </a>
                                                </li>
                                                <li>
                                                      <a href="">
                                                            <input type="checkbox" />Vinpearl Hotels & Resorts
                                                      </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Vinpearl Luxury </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />VinOasis </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />VinHolidays </a>
                                                </li>
                                          </ul>
                                    </div>
                                    <div class="tour__service">
                                          <h5>Dịch vụ</h5>
                                          <ul>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Chỉ phòng </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Ăn sáng </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Ăn 3 bữa </a>
                                                </li>
                                                <li>
                                                      <a href="">
                                                            <input type="checkbox" />Vui chơi & Giải trí
                                                      </a>
                                                </li>
                                                <li>
                                                      <a href="">
                                                            <input type="checkbox" />Tặng voucher ẩm thực
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                                    <div class="tour__room">
                                          <h5>Loại hình lưu trú</h5>
                                          <ul>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Phòng khách sạn </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Villa </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Condotel </a>
                                                </li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                        <div class="col-9">
                              <div class="tour__right">
                                    <div class="tour__right__item">
                                          <div class="row">
                                                <div class="col-5">
                                                      <div class="tour__rightIMG">
                                                            <div id="carouselExampleControls" class="carousel slide"
                                                                  data-ride="carousel">
                                                                  <div class="carousel-inner">
                                                                        <div class="carousel-item active" style="height: 218px;">
                                                                              <img src="./img/4f2fe8cf46664cdd8933039bc2591355_G15.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ea42d27134fc412990dc5f1b2c547a2d_G10.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/be8d2737352a4e488fefd20d1a799cc2_G7.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ee83c6e49a454d01b27fd40ecfc1e12a_G11.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/528db8d92d56451784c8c2e796bc0d8f_G12.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>

                                                                  </div>
                                                                  <a class="carousel-control-prev"
                                                                        href="#carouselExampleControls" role="button"
                                                                        data-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                  </a>
                                                                  <a class="carousel-control-next"
                                                                        href="#carouselExampleControls" role="button"
                                                                        data-slide="next">
                                                                        <span class="carousel-control-next-icon"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-7">
                                                      <div class="tour__right_detail">
                                                            <h3>Vinpearl Discovery Golflink Nha Trang</h3>
                                                            <p><i class="fa-solid fa-location-pin"></i>44 – 46 Lê Thánh Tôn, P. Lộc Thọ, Tp. Nha Trang, Tỉnh Khánh Hoà, Việt Nam</p>
                                                            <ul>
                                                                  <li><a href=""><img src="./img/room-service.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/customer-service.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/swimming-pool.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/food.png" alt=""></a>
                                                                  </li>
                                                                  <li><a href=""><img src="./img/island.png" alt=""></a>
                                                                  </li>
                                                            </ul>
                                                            <ul class="star">
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                            </ul>
                                                            <span>Bãi biển riêng</span>
                                                            <span>Vị trí trung tâm</span>
                                                            <span>Bể bơi vô cực</span>
                                                            <div class="tour__right_detail__price">
                                                                  <p style="text-align: right;">Chỉ từ <span>1.320.000 đ</span></p>
                                                                  <p style="text-align: right;">phòng/đêm</p>
                                                            </div>
                                                            <div>
                                                                  <button>Đặt phòng</button>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="tour__right__item">
                                          <div class="row">
                                                <div class="col-5">
                                                      <div class="tour__rightIMG">
                                                            <div id="carouselExampleControls" class="carousel slide"
                                                                  data-ride="carousel">
                                                                  <div class="carousel-inner">
                                                                        <div class="carousel-item active" style="height: 218px;">
                                                                              <img src="./img/4f2fe8cf46664cdd8933039bc2591355_G15.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ea42d27134fc412990dc5f1b2c547a2d_G10.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/be8d2737352a4e488fefd20d1a799cc2_G7.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ee83c6e49a454d01b27fd40ecfc1e12a_G11.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/528db8d92d56451784c8c2e796bc0d8f_G12.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>

                                                                  </div>
                                                                  <a class="carousel-control-prev"
                                                                        href="#carouselExampleControls" role="button"
                                                                        data-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                  </a>
                                                                  <a class="carousel-control-next"
                                                                        href="#carouselExampleControls" role="button"
                                                                        data-slide="next">
                                                                        <span class="carousel-control-next-icon"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-7">
                                                      <div class="tour__right_detail">
                                                            <h3>Vinpearl Discovery Golflink Nha Trang</h3>
                                                            <p><i class="fa-solid fa-location-pin"></i>44 – 46 Lê Thánh Tôn, P. Lộc Thọ, Tp. Nha Trang, Tỉnh Khánh Hoà, Việt Nam</p>
                                                            <ul>
                                                                  <li><a href=""><img src="./img/room-service.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/customer-service.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/swimming-pool.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/food.png" alt=""></a>
                                                                  </li>
                                                                  <li><a href=""><img src="./img/island.png" alt=""></a>
                                                                  </li>
                                                            </ul>
                                                            <ul class="star">
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                            </ul>
                                                            <span>Bãi biển riêng</span>
                                                            <span>Vị trí trung tâm</span>
                                                            <span>Bể bơi vô cực</span>
                                                            <div class="tour__right_detail__price">
                                                                  <p style="text-align: right;">Chỉ từ <span>1.320.000 đ</span></p>
                                                                  <p style="text-align: right;">phòng/đêm</p>
                                                            </div>
                                                            <div>
                                                                  <button>Đặt phòng</button>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="tour__right__item">
                                          <div class="row">
                                                <div class="col-5">
                                                      <div class="tour__rightIMG">
                                                            <div id="carouselExampleControls" class="carousel slide"
                                                                  data-ride="carousel">
                                                                  <div class="carousel-inner">
                                                                        <div class="carousel-item active" style="height: 218px;">
                                                                              <img src="./img/4f2fe8cf46664cdd8933039bc2591355_G15.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ea42d27134fc412990dc5f1b2c547a2d_G10.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/be8d2737352a4e488fefd20d1a799cc2_G7.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ee83c6e49a454d01b27fd40ecfc1e12a_G11.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/528db8d92d56451784c8c2e796bc0d8f_G12.jpg"
                                                                                    class="d-block w-100" alt="..." />
                                                                        </div>

                                                                  </div>
                                                                  <a class="carousel-control-prev"
                                                                        href="#carouselExampleControls" role="button"
                                                                        data-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                  </a>
                                                                  <a class="carousel-control-next"
                                                                        href="#carouselExampleControls" role="button"
                                                                        data-slide="next">
                                                                        <span class="carousel-control-next-icon"
                                                                              aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-7">
                                                      <div class="tour__right_detail">
                                                            <h3>Vinpearl Discovery Golflink Nha Trang</h3>
                                                            <p><i class="fa-solid fa-location-pin"></i>44 – 46 Lê Thánh Tôn, P. Lộc Thọ, Tp. Nha Trang, Tỉnh Khánh Hoà, Việt Nam</p>
                                                            <ul>
                                                                  <li><a href=""><img src="./img/room-service.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/customer-service.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/swimming-pool.png"
                                                                                    alt=""></a></li>
                                                                  <li><a href=""><img src="./img/food.png" alt=""></a>
                                                                  </li>
                                                                  <li><a href=""><img src="./img/island.png" alt=""></a>
                                                                  </li>
                                                            </ul>
                                                            <ul class="star">
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                                  <li><a href=""><i class="fa-solid fa-star"></i></a>
                                                                  </li>
                                                            </ul>
                                                            <span>Bãi biển riêng</span>
                                                            <span>Vị trí trung tâm</span>
                                                            <span>Bể bơi vô cực</span>
                                                            <div class="tour__right_detail__price">
                                                                  <p style="text-align: right;">Chỉ từ <span>1.320.000 đ</span></p>
                                                                  <p style="text-align: right;">phòng/đêm</p>
                                                            </div>
                                                            <div>
                                                                  <button>Đặt phòng</button>
                                                            </div>
                                                      </div>
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
                                    <img class="img-fluid" src="./img/logo-da-thong-bao-website-voi-bo-cong-thuong.webp"
                                          alt="" />
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
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
      <script src="./js/owl-carousel/owl.carousel.min.js"></script>
      <script src="./js/mainbacktotop.js"></script>
      <script src="./js/util.js"></script>
      <script>
            $('.owl-carousel').owlCarousel({
                  loop: true,
                  margin: 10,
                  nav: false,
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
      <script src="./js/main.js"></script>
</body>

</html>