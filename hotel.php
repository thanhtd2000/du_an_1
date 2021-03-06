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
                                                                        ?????T D???CH V???
                                                                  </a>
                                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">
                                                                              T??m kh??ch s???n
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                              T??m tour & tr???i nghi???m
                                                                        </a>
                                                                  </div>
                                                            </li>
                                                            <li class="nav-item dropdown">
                                                                  <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        TR???I NGHI???M VINPEARL
                                                                  </a>
                                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">Qu???n th???</a>
                                                                        <a class="dropdown-item" href="#">
                                                                              Kh??ch s???n
                                                                        </a>
                                                                        <a class="dropdown-item" href="#">
                                                                              D???ch v???
                                                                        </a>
                                                                  </div>
                                                            </li>
                                                            <li class="nav-item">
                                                                  <a class="nav-link" href="#">??U ????I KHUY???N M??I</a>
                                                            </li>
                                                            <li class="nav-item dropdown">
                                                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        PEARL CLUB
                                                                  </a>
                                                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                        <a class="dropdown-item" href="#">T???ng quan</a>
                                                                        <a class="dropdown-item" href="#">
                                                                              Quy???n l???i
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
                                                                        <a class="dropdown-item" href="index.php?act=thongtin&&iduser=<?= $iduser ?>">Th??ng
                                                                              tin t??i kho???n</a>
                                                                        <?php if ($vaitro == 1) : ?>
                                                                              <a class="dropdown-item" href="./admin/index.php">Qu???n
                                                                                    l?? trang web</a>
                                                                        <?php endif ?>
                                                                        <a class="dropdown-item" href="#">?????c quy???n th???</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">
                                                                              L???ch s??? giao d???ch
                                                                        </a>
                                                                        <a class="dropdown-item" href="index.php?act=dangxuat">
                                                                              ????ng xu???t
                                                                        </a>
                                                                  </div>
                                                            </span>






                                                      <?php
                                                      } else {
                                                      ?>
                                                            <a style="color: #000; padding-top: 20px;" href="index.php?act=dangnhap">????ng nh???p<i style="padding-left:10px;" class="fa-solid fa-angle-down"></i></a>
                                                      <?php } ?>

                                                </div>
                                                <!-- <a class="nav-link dropdown-toggle" style="color: #000;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-user"></i>
                                        Name User
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Th??ng tin t??i kho???n</a>
                                        <a class="dropdown-item" href="#">Qu???n L?? Trang</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            L???ch s??? giao d???ch
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            ????ng xu???t
                                        </a> -->
                                    </div>
                                    </span>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="slide__bot">
                  <div class="body" style="margin-top: 50px;">
                        <div class="slide__input active" id="dm-1">
                              <div class="d-flex">
                                    <div class="slide__location">
                                          <input type="text" placeholder="Nh???p khu v???c">
                                    </div>
                                    <div class="slide__location">
                                          <input type="text" placeholder="Nh???p kh??ch s???n">
                                    </div>
                                    <!-- <div class="slide__room">
                                                <div class="dropdown">
                                                      <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            S??? ph??ng
                                                      </button>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <div class="dropdown__content">
                                                                  <div class="dropdown__left">
                                                                        <h5>PH??NG</h5>
                                                                  </div>
                                                                  <div class="dropdown__right">
                                                                        <div class="buttons_added">
                                                                              <input class="minus is-form" type="button" value="-">
                                                                              <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="">
                                                                              <input class="plus is-form" type="button" value="+">
                                                                        </div>
      
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div> -->
                                    <button><a href="">T??M KI???M</a></button>
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
                                          <h4 style="margin-bottom: 0;">L???c k???t qu???</h4>
                                          <button>?????t l???i</button>
                                    </div>
                                    <div class="tour__brand">
                                          <h5>Th????ng hi???u</h5>
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
                                          <h5>D???ch v???</h5>
                                          <ul>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Ch??? ph??ng </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />??n s??ng </a>
                                                </li>
                                                <li>
                                                      <a href=""> <input type="checkbox" />??n 3 b???a </a>
                                                </li>
                                                <li>
                                                      <a href="">
                                                            <input type="checkbox" />Vui ch??i & Gi???i tr??
                                                      </a>
                                                </li>
                                                <li>
                                                      <a href="">
                                                            <input type="checkbox" />T???ng voucher ???m th???c
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                                    <div class="tour__room">
                                          <h5>Lo???i h??nh l??u tr??</h5>
                                          <ul>
                                                <li>
                                                      <a href=""> <input type="checkbox" />Ph??ng kh??ch s???n </a>
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
                                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                  <div class="carousel-inner">
                                                                        <div class="carousel-item active" style="height: 218px;">
                                                                              <img src="./img/4f2fe8cf46664cdd8933039bc2591355_G15.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ea42d27134fc412990dc5f1b2c547a2d_G10.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/be8d2737352a4e488fefd20d1a799cc2_G7.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ee83c6e49a454d01b27fd40ecfc1e12a_G11.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/528db8d92d56451784c8c2e796bc0d8f_G12.jpg" class="d-block w-100" alt="..." />
                                                                        </div>

                                                                  </div>
                                                                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                  </a>
                                                                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-7">
                                                      <div class="tour__right_detail">
                                                            <h3>Vinpearl Discovery Golflink Nha Trang</h3>
                                                            <p><i class="fa-solid fa-location-pin"></i>44 ??? 46 L?? Th??nh T??n, P. L???c Th???, Tp. Nha Trang, T???nh Kh??nh Ho??, Vi???t Nam</p>
                                                            <ul>
                                                                  <li><a href=""><img src="./img/room-service.png" alt=""></a></li>
                                                                  <li><a href=""><img src="./img/customer-service.png" alt=""></a></li>
                                                                  <li><a href=""><img src="./img/swimming-pool.png" alt=""></a></li>
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
                                                            <span>B??i bi???n ri??ng</span>
                                                            <span>V??? tr?? trung t??m</span>
                                                            <span>B??? b??i v?? c???c</span>
                                                            <div class="tour__right_detail__price">
                                                                  <p style="text-align: right;">Ch??? t??? <span>1.320.000 ??</span></p>
                                                                  <p style="text-align: right;">ph??ng/????m</p>
                                                            </div>
                                                            <div>
                                                                  <button>?????t ph??ng</button>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="tour__right__item">
                                          <div class="row">
                                                <div class="col-5">
                                                      <div class="tour__rightIMG">
                                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                  <div class="carousel-inner">
                                                                        <div class="carousel-item active" style="height: 218px;">
                                                                              <img src="./img/4f2fe8cf46664cdd8933039bc2591355_G15.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ea42d27134fc412990dc5f1b2c547a2d_G10.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/be8d2737352a4e488fefd20d1a799cc2_G7.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ee83c6e49a454d01b27fd40ecfc1e12a_G11.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/528db8d92d56451784c8c2e796bc0d8f_G12.jpg" class="d-block w-100" alt="..." />
                                                                        </div>

                                                                  </div>
                                                                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                  </a>
                                                                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-7">
                                                      <div class="tour__right_detail">
                                                            <h3>Vinpearl Discovery Golflink Nha Trang</h3>
                                                            <p><i class="fa-solid fa-location-pin"></i>44 ??? 46 L?? Th??nh T??n, P. L???c Th???, Tp. Nha Trang, T???nh Kh??nh Ho??, Vi???t Nam</p>
                                                            <ul>
                                                                  <li><a href=""><img src="./img/room-service.png" alt=""></a></li>
                                                                  <li><a href=""><img src="./img/customer-service.png" alt=""></a></li>
                                                                  <li><a href=""><img src="./img/swimming-pool.png" alt=""></a></li>
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
                                                            <span>B??i bi???n ri??ng</span>
                                                            <span>V??? tr?? trung t??m</span>
                                                            <span>B??? b??i v?? c???c</span>
                                                            <div class="tour__right_detail__price">
                                                                  <p style="text-align: right;">Ch??? t??? <span>1.320.000 ??</span></p>
                                                                  <p style="text-align: right;">ph??ng/????m</p>
                                                            </div>
                                                            <div>
                                                                  <button>?????t ph??ng</button>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="tour__right__item">
                                          <div class="row">
                                                <div class="col-5">
                                                      <div class="tour__rightIMG">
                                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                  <div class="carousel-inner">
                                                                        <div class="carousel-item active" style="height: 218px;">
                                                                              <img src="./img/4f2fe8cf46664cdd8933039bc2591355_G15.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ea42d27134fc412990dc5f1b2c547a2d_G10.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/be8d2737352a4e488fefd20d1a799cc2_G7.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/ee83c6e49a454d01b27fd40ecfc1e12a_G11.jpg" class="d-block w-100" alt="..." />
                                                                        </div>
                                                                        <div class="carousel-item" style="height: 218px;">
                                                                              <img src="./img/528db8d92d56451784c8c2e796bc0d8f_G12.jpg" class="d-block w-100" alt="..." />
                                                                        </div>

                                                                  </div>
                                                                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                  </a>
                                                                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-7">
                                                      <div class="tour__right_detail">
                                                            <h3>Vinpearl Discovery Golflink Nha Trang</h3>
                                                            <p><i class="fa-solid fa-location-pin"></i>44 ??? 46 L?? Th??nh T??n, P. L???c Th???, Tp. Nha Trang, T???nh Kh??nh Ho??, Vi???t Nam</p>
                                                            <ul>
                                                                  <li><a href=""><img src="./img/room-service.png" alt=""></a></li>
                                                                  <li><a href=""><img src="./img/customer-service.png" alt=""></a></li>
                                                                  <li><a href=""><img src="./img/swimming-pool.png" alt=""></a></li>
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
                                                            <span>B??i bi???n ri??ng</span>
                                                            <span>V??? tr?? trung t??m</span>
                                                            <span>B??? b??i v?? c???c</span>
                                                            <div class="tour__right_detail__price">
                                                                  <p style="text-align: right;">Ch??? t??? <span>1.320.000 ??</span></p>
                                                                  <p style="text-align: right;">ph??ng/????m</p>
                                                            </div>
                                                            <div>
                                                                  <button>?????t ph??ng</button>
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
      <div class="products container">
            <h2>S???n ph???m t????ng t???</h2>
            <div class="products__content">
                  <div class="owl-carousel owl-theme">
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/a1acf82403f843389d7d955048d7fc72_af4a1d084a3442beaad93bb1868207ad_image.jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/2baf25da78044afc9b153d6c4fa122ff_DNB07168.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/a7fdffd9640140c599e57ee74b5aebbe_DJI_0073.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/64cced44b4014aeeb075f204a2ca7129__MG_9433.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/263ddf2506ce46af9cad02decca77164_ca956a76d2db4c43a76b2e038fc5d5f8_JUN_9458_2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/e988d25ace594b5396a1bb15150fc3d1_101-2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/9baddef5fcaa4f1b8c723940e195cde2_K96_7713_summer2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/a50e7ea0b1434e4695d34832f948debf_VOSPQ-overview_HCM-PQ-Meta-combo.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="item">
                              <div class="card" style="width: 22rem;">
                                    <img src="./img/4716b601b3634d6a993648a1cb208203__D8H6905 (1).jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                          <h5 class="card-title">[VinWonders Nha Trang] V?? v??o c???a tr???c ti???p</h5>
                                          <div class="products__detail">
                                                <div class="products__left">
                                                      <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 ng?????i mua</span>
                                                </div>
                                                <div class="products__right">
                                                      <div>750.000 ??</div>
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
                              <h5>KH??CH S???N & NGH??? D?????NG</h5>
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
                              <h5>H???I H???P & S??? KI???N</h5>
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
                              <h5>VUI CH??I & GI???I TR??</h5>
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
                                                      ?????o H??n Tre, Ph?????ng V??nh Nguy??n, Th??nh ph??? Nha Trang, T???nh
                                                      Kh??nh H??a, Vi???t Nam
                                                </a>
                                          </li>
                                          <li>
                                                <a href="" style="color: #f39f2d;">
                                                      <i class="fa-solid fa-envelope"></i>callcenter@vinpearl.com
                                                </a>
                                          </li>
                                          <li>
                                                <a href="" style="color: #f39f2d; font-weight: 700;">
                                                      <i class="fa-solid fa-phone"></i>1900 23 23 89 (Nh??nh s??? 3)
                                                </a>
                                          </li>
                                    </ul>
                                    <img class="img-fluid" src="./img/logo-da-thong-bao-website-voi-bo-cong-thuong.webp" alt="" />
                              </div>
                              <div class="col-3">
                                    <h5>GI???I THI???U</h5>
                                    <ul>
                                          <li>
                                                <a href="">V??? ch??ng t??i</a>
                                          </li>
                                          <li>
                                                <a href="">Th??nh t???u</a>
                                          </li>
                                          <li>
                                                <a href="">Li??n h???</a>
                                          </li>
                                          <li>
                                                <a href="">Tuy???n d???ng</a>
                                          </li>
                                          <li>
                                                <a href="">C??u h???i th?????ng g???p</a>
                                          </li>
                                          <li>
                                                <a href="">B???n ????? trang</a>
                                          </li>
                                    </ul>
                              </div>
                              <div class="col-3">
                                    <h5>TIN T???C & S??? KI???N</h5>
                                    <ul>
                                          <li>
                                                <a href="">Tin c??ng ty</a>
                                          </li>
                                          <li>
                                                <a href="">C???m nang du l???ch</a>
                                          </li>
                                    </ul>
                                    <h5>TH?? VI???N ???NH</h5>
                              </div>
                              <div class="col-3">
                                    <h5>??I???U KHO???N & QUY ?????NH</h5>
                                    <ul>
                                          <li>
                                                <a href="">??i???u kho???n chung</a>
                                          </li>
                                          <li>
                                                <a href="">Quy ?????nh chung</a>
                                          </li>
                                          <li>
                                                <a href="">Quy ?????nh thanh to??n</a>
                                          </li>
                                          <li>
                                                <a href="">Quy ?????nh v??? x??c nh???n th??ng tin ?????t ph??ng</a>
                                          </li>
                                          <li>
                                                <a href="">Ch??nh s??ch gi???i quy???t tranh ch???p</a>
                                          </li>
                                          <li>
                                                <a href="">Ch??nh s??ch quy???n ri??ng t??</a>
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
                                    <h6>S??? ??KKD:</h6>
                                    <p style="width: 80%;">4200456848. ??K l???n ?????u 26/7/2006.</p>
                                    <p>??K thay ?????i l???n th??? 50: 3/3/2020</p>
                              </div>
                              <div class="col-6">
                                    <h6>N??i c???p:</h6>
                                    <p>S??? k??? ho???ch v?? ?????u t?? t???nh Kh??nh H??a</p>
                                    <h6>L??nh v???c kinh doanh:</h6>
                                    <p>
                                          Kh??ch s???n, bi???t th??? ho???c c??n h??? kinh doanh d???ch v??? l??u tr?? ng???n
                                          ng??y; khu du l???ch sinh th??i
                                    </p>
                              </div>
                              <div class="col-3">
                                    <h6>Ch??? t??i kho???n:</h6>
                                    <p>
                                          C??ng ty c??? ph???n Vinpearl T??i kho???n ng??n h??ng s???: 9124412488166
                                          (VND) Ng??n h??ng th????ng m???i c??? ph???n K??? Th????ng Vi???t Nam
                                          (Techcombank) ??? H???i s???
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