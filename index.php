<?php
session_start();
include "views/block/header.php";
include "models/pdo.php";
include "models/taikhoan.php";
include "models/khachsan.php";
include "models/khuvuc.php";
include "models/tour.php";
include "models/phong.php";
include "models/loaiphong.php";
include "global.php";
$listkhachsan = loadall_khachsan();
$listtour = loadall_tour();
$listkhuvuc = loadall_khuvuc();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            $error = [
                'email' => '',
                'pass' => '',
                'passcf' => '',
                'anh' => '',
                'hoten' => '',
                'diachi' => '',
                'sdt' => '',

            ];
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $passwordcf = $_POST['passwordcf'];

                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];

                $file = $_FILES['anh'];
                $anh = $file['name'];
                $checksignin = checksignin($email);
                if (is_array($checksignin)) {
                    $error['email'] = "Email đã tồn tại";
                }
                if ($email == '') {
                    $error['email'] = "Bạn chưa nhập email";
                }
                if ($password == '') {
                    $error['pass'] = "Bạn chưa nhập mật khẩu";
                }
                if (strcmp($password, $passwordcf) !== 0) {
                    $error['passcf'] = "Bạn nhập không đúng mật khẩu";
                }
                if ($hoten == '') {
                    $error['hoten'] = "Bạn chưa nhập họ và tên";
                }
                if ($diachi == '') {
                    $error['diachi'] = "Bạn chưa nhập địa chỉ";
                }
                if ($sdt == '') {
                    $error['sdt'] = "Bạn chưa nhập số điện thoại";
                }
                if ($file == '') {
                    $error['anh'] = "Bạn chưa chọn ảnh";
                }
                $img = ['jpg', 'png', 'gif'];
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                if (!in_array($ext, $img)) {
                    $error['anh'] = "Ảnh không đúng định dạng";
                }
                if (!array_filter($error)) {
                    insert_taikhoan($email, $password, $diachi, $hoten, $sdt, $anh);

                    move_uploaded_file($file['tmp_name'], './img/user/' . $anh);
                    echo "<script> window.location.href='index.php?act=dangnhap&&message=Đăng ký thành công'</script>";
                }
            }
            include "views/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];
                $checkemail = checkemail($email, $password);
                if (is_array($checkemail)) {
                    $_SESSION['email'] = $checkemail;

                    echo "<script> window.location.href='index.php'</script>";
                } else {
                    $message = "Tài khoản không tồn tại";
                }
            }

            include "views/taikhoan/dangnhap.php";
            break;
        case 'dangxuat':
            session_destroy();
            echo "<script> window.location.href='index.php'</script>";

            break;

        case 'thongtin':
            $iduser = $_GET['iduser'];
            $sql = "SELECT*FROM user WHERE iduser = '$iduser'";
            $user = pdo_query_one($sql);
            include "views/taikhoan/user.php";
            break;
        case 'sua-thongtin':
            $iduser = $_GET['iduser'];
            $oneuser = loadone_user($iduser);
            //kiểm tra người dùng có click vào thêm hay không
            $error = [
                'password' => '',
                'diachi' => '',
                'sdt' => '',
                'hoten' => ''
            ];
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iduser = $_POST['iduser'];
                $password = $_POST['password'];
                $diachi = $_POST['diachi'];
                $hoten = $_POST['hoten'];
                $sdt = $_POST['sdt'];
                $file = $_FILES['anh'];
                $anh = $file['name'];
                if ($password == '') {
                    $error['password'] = "Bạn chưa nhập mật khẩu";
                }
                if ($diachi == '') {
                    $error['diachi'] = "Bạn chưa nhập địa chỉ";
                }
                if ($hoten == '') {
                    $error['hoten'] = "Bạn chưa nhập họ tên";
                }
                if ($sdt == '') {
                    $error['sdt'] = "Bạn chưa nhập số điện thoại";
                }
                if (!array_filter($error)) {
                    edit_user2($iduser, $password, $diachi, $hoten, $sdt, $anh);
                    move_uploaded_file($file['tmp_name'], './img/user/' . $anh);
                    echo "<script> window.location.href='index.php?act=thongtin&&iduser=" . $oneuser['iduser'] . "&&message=Sửa thành công'</script>";
                }
            }
            include "views/taikhoan/edituser.php";
            break;
        case 'chitiettour':
            $mak = $_GET['makv'];
            $maks = $_GET['maks'];
            $tourid = $_GET['tourid'];
            $onetour = loadone_tour($tourid);
            $listphong = loadall_phong();
            $select_phong4 = select_phong4($maks);
            include "views/chitiet_tour.php";
            break;
        case 'listtour':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['makv']) && ($_GET['makv'] > 0)) {
                $makv = $_GET['makv'];
            } else {
                $makv = 0;
            }
            $tenkv = load_ten_kv($makv);
            $listtours = loadall_tour_search($kyw, $makv);
            $tenkv = load_ten_kv($makv);
            $listtours = loadall_tour_search($kyw, $makv);
            $listkhuvuc = loadall_khuvuc();
            include "views/listtour.php";
            break;

        case 'listks':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['makv']) && ($_GET['makv'] > 0)) {
                $makv = $_GET['makv'];
            } else {
                $makv = 0;
            }
            $tenkv = load_ten_kv($makv);
            $listkhachsan = loadall_ks_search($kyw, $makv);
            $tenkv = load_ten_kv($makv);
            $listkhachsan = loadall_ks_search($kyw, $makv);
            $listkhuvuc = loadall_khuvuc();
            include "views/listkhachsan.php";
            break;
        case 'chitietks':
            $mak = $_GET['makv'];
            $maks = $_GET['maks'];
            $select_phong = select_phong($maks);
            $oneks = loadone_khachsan($maks);
            $listkhachsan =  loadall_khachsan();
            include "views/chitiet_hotel.php";
            break;
        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
