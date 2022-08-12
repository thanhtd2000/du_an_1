<div class="slide__bot d-flex justify-content-between header container" style="margin-top: 50px;">
      <div class="body">
            <div class="slide__input2 d-block" id="dm-2">
                  <div class="d-flex">
                        <form action="" method="post" class="form-inline my-2 my-lg-0">
                              <div class="slide__location" style="margin: 20px 10px;
                                    border: 1px solid #999;
                                    padding: 6px 0;
                                    border-radius: 5px;
                                    width: 225px;
                                    height: 40px;
                                    padding-left: 17px;">
                                    <input type="text" placeholder="Nhập tour" name="kyw">
                              </div>
                              <div class="slide__location" style="margin: 20px 10px;
                                    border: 1px solid #999;
                                    padding: 6px 0;
                                    border-radius: 5px;
                                    width: 225px;
                                    height: 40px;
                                    padding-left: 17px;">
                                    <input type="text" placeholder="Nhập khu du lịch" name="kyw_kv">
                              </div>

                              <!-- <input class="form-control mr-sm-2" name="kyw" type="search" placeholder="Tìm kiếm tour" aria-label="Search"> -->
                              <div class="tour__price__more d-flex">

                                    <input type="submit" name="timkiem" value="Tìm kiếm" style="    width: 150px;
                                    height: 39px;">
                              </div>

                        </form>
               

                  </div>
            </div>
      </div>
      <?php
      if(isset($_SESSION['email'])){
            echo'
            <div class="cart__shopping d-block">
            <!-- Button trigger modal -->
            <a href="index.php?act=giohang"><button type="button" style="outline: none; line-height: 70px; background-color: #DCE0EE;" data-toggle="modal" data-target="#exampleModa">
                        <img class="img-fluid" style="width: 30px; height: 30px;" src="./img/shopping-cart.png" alt="">
                  </button></a>

      
      </div>
            ';
      }else{

      }
                              ?>
      
</div>
<div class="tour container">
      <div class="tour__content">
            <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-12 col-dm-12 col-12 none">
                        <div class="tour__left">

                              <div class="tour__left_top d-flex">
                                    <h4 style="margin-bottom: 0; font-weight: 700;">Lọc kết quả</h4>
                                    <button>Đặt lại</button>
                              </div>
                              <div class="tour__service">
                                    <h5>Khu vực</h5>
                                    <ul>
                                          <li>
                                                <a href="index.php?act=listtour"><button type="button" class="btn btn-warning">Tất cả</button></a>
                                          </li>
                                          <?php
                                          foreach ($listkhuvuc as $kv) {
                                                extract($kv);
                                                $linkkv = "index.php?act=listtour&&makv=" . $makv;
                                                echo '
                                                
                                                <li>
                                                      <a href="' . $linkkv . '"><button type="button" class="btn btn-warning">' . $tenkv . '</button></a>
                                                </li>
                                          

                                                ';
                                          }
                                          ?>
                                    </ul>
                              </div>
                              <div class="tour__brand">
                                    <h5>Dịch vụ</h5>
                                    <ul>
                                          <li>
                                                <a href=""> <input type="checkbox" />Tất cả</a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />Gói nghỉ dưỡng</a>
                                          </li>
                                          <li>
                                                <a href="">
                                                      <input type="checkbox" />VinWonders
                                                </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />Vận chuyển </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />Vinpearl Golf </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />Ẩm thực</a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />Tour</a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />Vé tham quan </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />Spa</a>
                                          </li>
                                    </ul>
                              </div>

                              <div class="tour__room">
                                    <h5>Độ dài kì nghỉ</h5>
                                    <ul>
                                          <li>
                                                <a href=""> <input type="checkbox" />Tất cả </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />1 ngày </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />2 ngày 1 đêm </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />3 ngày 2 đêm </a>
                                          </li>
                                          <li>
                                                <a href=""> <input type="checkbox" />4 ngày 3 đêm </a>
                                          </li>
                                    </ul>
                              </div>

                        </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-12 col-dm-12 col-12">
                        <div class="tour__right">


                              <?php
                              foreach ($listtours as $lts) {
                                    extract($lts);
                                    $linktour = "index.php?act=chitiettour&&tourid=$tourid&&makv=$makv&&maks=$maks&&maloai=$maloai";
                                    $hinh = $img_path . $anh;
                                    echo '
                                                <div class="tour__right__item" style="border: 1px solid #ddedd5; padding: 10px;">
                                                <div class="row">
                                                <div class="col-xl-5 col-lg-5 col-md-6 col-dm-6 col-6">
                                                <div class="tour__rightIMG">
                                                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                            <div class="carousel-inner">
                                                                  <div class="carousel-item active" style="height: 218px;">
                                                                        <img src="' . $hinh . '" class="d-block w-100" alt="..." />
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
                                          <div class="col-xl-7 col-lg-7 col-md-6 col-dm-6 col-6">
                                                <div class="tour__right_detail">
                                                     <a href="' . $linktour . '"> <h3 style="font-size: 18px; font-weight: 600;">' . $tourname . '</h3></a>
                                                      <p style="font-size: 14px;"> <!--' . $mota . '--></p>
                                                      <span><i class="fa-solid fa-clock-rotate-left"></i> 3 ngày 2 đêm</span>
                                                      <p style="padding-top: 20px;">Mã sản phẩm : P'.$tourid.'</p>
                                                      <div class="tour__right_detail__price d-flex justify-content-between">
                                                            <div class="tour__bought">
                                                                  <span><i class="fa-solid fa-bolt"></i> 30 người mua</span>
                                                            </div>
                                                            <div class="tour__price__more d-flex">
                                                                 
                                                            <a href="' . $linktour . '"><button type="button" class="btn">Xem ngay</button></a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          </div>
                                          </div>
                                                ';
                              }
                              ?>




                        </div>
                  </div>
            </div>
      </div>
</div>
<div class="products container">
      <h2>Sản phẩm tương tự</h2>
      <div class="products__content">

            <div class="owl-carousel owl-theme">
                  <?php foreach ($listtour as $tour) : ?>
                        <?php extract($tour) ?>
                  
                              <div class="item">
                                    <div class="card" style="width: 22rem;">
                                          <a href="index.php?act=chitiettour&&tourid=<?= $tourid ?>&&makv=<?= $makv ?>&&maks=<?= $maks ?>"><img src="./img/tour/<?= $anh ?>" class="card-img-top" alt="..."></a>
                                          <div class="card-body">
                                                <a href="index.php?act=chitiettour&&tourid=<?= $tourid ?>&&makv=<?= $makv ?>&&maks=<?= $maks ?>">
                                                      <h5 class="card-title"><?= $tourname ?></h5>
                                                </a>
                                                <div class="products__detail">
                                                      <div class="products__left">
                                                            <i class="fa-solid fa-bolt-lightning"></i><span style="padding-left:15px;">3290 người mua</span>
                                                      </div>
                                                      <div class="products__right">
                                                            <div><?= number_format($giatre_em) ?>-<?= number_format($gia_nl) ?> VNĐ</div>
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
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/vp_hotel_resort_1647925026.webp" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/vinoasis_1647925040.webp" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/vp_luxury_1647925062.webp" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/condotel_1647925071.webp" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/discovery_1647925078.webp" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
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
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/convention_1647925137.webp" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/almaz_1647925645.webp" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
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
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/vw_1647925754.svg" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/vp_golf_1647925676.svg" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/safari_1647925690.svg" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/grand_world_1647925701.svg" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/pquc_1647925710.svg" alt="" />
                              </div>
                              <div class="col-xl-2 col-lg-2 col-md-6 col-dm-6 col-6">
                                    <img src="./img/holidays_1647925088.webp" alt="" />
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>