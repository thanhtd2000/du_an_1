<!doctype html>
<html lang="en">

<head>
    <title>Vietnam Exploration Trips </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <LINK REL="SHORTCUT ICON" HREF="./img/logo/logo cochu.png">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                                                <a class="dropdown-item" href="index.php?act=listks">
                                                    T??m kh??ch s???n
                                                </a>
                                                <a class="dropdown-item" href="index.php?act=listtour">
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
                                                <b><?= $hoten ?></b>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.php?act=thongtin&&iduser=<?= $iduser ?>">Th??ng tin t??i kho???n</a>
                                                <?php  if ($vaitro == 0 ||$vaitro == 2 ) :?>
                                                    <a class="dropdown-item" href="./admin/index.php">Qu???n l?? trang web</a>
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
    </div>
    </div>