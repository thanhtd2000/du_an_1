<?php

if (!isset($_GET['page'])) {
    // require_once('models/home.php');
    include_once('views/block/header.php');
    include_once('views/home.php');
} else {
    $page = $_GET['page'];

    switch ($page) {
        case 'dang-nhap':
            require_once('models/dangnhap.php');
            include_once('views/block/header.php');
            include_once('views/dangnhap.php');
            break;
        case 'dang-ky':
            require_once('models/dangky.php');
            include_once('views/block/header.php');
            include_once('views/dangky.php');
            break;
        case 'thong-tin':
            require_once('models/user.php');
            include_once('views/block/header.php');
            include_once('views/user.php');
            break;
        default:
            # code...
            break;
    }
}
