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
include "models/cart.php";
include "models/hoadon.php";
include "global.php";
$listkhachsan = loadall_khachsan();
$listtour = loadall_tour();
$listkhuvuc = loadall_khuvuc();
if (!isset($_SESSION['tour'])) $_SESSION['tour'] = [];
if (!isset($_SESSION['khachsan'])) $_SESSION['khachsan'] = [];
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'uudai':
            include "views/uu_dai.php";
            break;
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
            $listhd = load_allhd($iduser);
            include "views/taikhoan/user.php";
            break;
        case 'sua-thongtin':
            $iduser = $_GET['iduser'];
            $oneuser = loadone_user($iduser);
            $listhd = load_allhd($iduser);
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
            $maloai = $_GET['maloai'];
            $tourid = $_GET['tourid'];
            $oneks = loadone_khachsan($maks);
            $onetour = loadone_tour($tourid);
            $onelp = loadone_loaiphong($maloai);
            $listphong = loadall_phong();
            $select_phong4 = select_phong4($maks);
            if (isset($_POST['datphong']) && ($_POST['datphong'])) {
                $tenphong = $_POST['tenphong'];
                $giaphong = $_POST['giaphong'];
                $mota = $_POST['mota'];
                $tourid = $_POST['tourid'];
                $maks = $_POST['maks'];
                $makv = $_POST['makv'];

                $phong = [$tenphong, $giaphong, $mota, $tourid, $maks];

                array_push($_SESSION['phong'], $phong);
                echo "<script> window.location.href='index.php?act=chitiettour&&tourid='.$tourid.'&&makv='.$makv.'&&maks='.$maks.'&&message=Sửa thành công'</script>";
            }


            include "views/chitiet_tour.php";
            break;
        case 'listtour':
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw = $_POST['kyw'];
                $makv = $_POST['makv'];
            } else {
                $kyw = '';
                $makv = 0;
            }
            // if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            //     $kyw = $_POST['kyw'];
            // } else {
            //     $kyw = "";
            // }
            // // if (isset($_POST['kyw_kv']) && ($_POST['kyw_kv'] !="")) {
            // //     $kyw_kv = $_POST['kyw_kv'];
            // // } else {
            // //     $kyw_kv = "";
            // // }
            // if (isset($_GET['makv']) && ($_GET['makv'] > 0)) {
            //     $makv = $_GET['makv'];
            // } else {
            //     $makv = 0;
            // }

            $listtours = loadall_tour_search($kyw, $makv);

            $tenkv = load_ten_kv($makv);
            $listkhuvuc = loadall_khuvuc();
            include "views/listtour.php";
            break;

        case 'listks':
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw_ks = $_POST['kyw_ks'];
                $makv = $_POST['makv'];
            } else {
                $kyw_ks = '';
                $makv = 0;
            }
            // if (isset($_POST['kyw_ks']) && ($_POST['kyw_ks'] != "")) {
            //     $kyw_ks = $_POST['kyw_ks'];
            // } else {
            //     $kyw_ks = "";
            // }
            // if (isset($_GET['makv']) && ($_GET['makv'] > 0)) {
            //     $makv = $_GET['makv'];
            // } else {
            //     $makv = 0;
            // }

            $listks = loadall_ks_search($kyw_ks, $makv);
            $tenkv = load_ten_kv($makv);
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
        case 'giohang':

            if (isset($_POST['dattour']) && ($_POST['dattour'])) {


                $tourid = $_POST['tourid'];
                $tourname = $_POST['tourname'];
                $gia_nl = $_POST['gia_nl'];
                $giatre_em = $_POST['giatre_em'];
                $songuoilon = $_POST['songuoilon'];
                $sotreem = $_POST['sotreem'];
                $start = $_POST['start'];
                $finish = $_POST['finish'];
                $maks = $_POST['maks'];
                $anh = $_POST['anh'];
                $maloai = $_POST['maloai'];
                $makv = $_POST['makv'];
                $ttien = $songuoilon * $gia_nl + $sotreem * $giatre_em;


                $tour = [$tourid, $tourname, $gia_nl, $giatre_em, $songuoilon, $sotreem, $start, $finish, $maks, $anh, $maloai, $makv, $ttien];

                array_push($_SESSION['tour'], $tour);
                echo "<script> window.location.href='index.php?act=chitiettour&&tourid='.$tourid.'&&maks='.$maks.'&&message=Sửa thành công'</script>";
            }
            if (isset($_POST['datks']) && ($_POST['datks'])) {
                $start = date_create($_POST['start']);
                $starti = $start->format('Y/m/d');
                $finish = date_create($_POST['finish']);
                $finishi = $finish->format('Y/m/d');
                $giaphong = $_POST['giaphong'];
                $tenphong = $_POST['tenphong'];

                $tenks = $_POST['tenks'];
                $anh = $_POST['anh'];
                $tenloai = $_POST['tenloai'];
                $makv = $_POST['makv'];
                $songay = $start->diff($finish);
                $songayi = $songay->format('%d');
                $tongtien = $giaphong * $songayi;


                $khachsan = [$tenks, $tenloai, $tenphong, $giaphong, $anh, $makv, $starti, $finishi, $songayi, $tongtien];

                array_push($_SESSION['khachsan'], $khachsan);
            }

            include "views/giohang.php";
            break;
        case 'deltour':
            $tourid =  $_GET['tourid'];
            if (isset($_GET['tourid'])) {
                array_splice($_SESSION['tour'], $tourid, 1);
            } else {
                $_SESSION['tour'] = [];
            }
            echo "<script> window.location.href='index.php?act=giohang'</script>";
            break;
        case 'bill':
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                $bill_name = $_POST['name'];
                $bill_email = $_POST['email'];
                $bill_address = $_POST['diachi'];
                $bill_tell = $_POST['sdt'];
                $bill_pttt = $_POST['pttt'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ngaydathang = new DateTime();
                $ngaydathang->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
                $ngaydathang = date('Y/m/d h:i:sa');
                $total = tongdonhang();



                $idbill = insert_bill($bill_name, $bill_address, $bill_tell, $bill_email, $bill_pttt, $total, $ngaydathang);

                foreach ($_SESSION['tour'] as $tour) {
                    insert_cart($_SESSION['email']['iduser'], $tour[0], $tour[4], $total, $tour[10], $tour[5], $tour[2], $tour[3], $tour[9], $tour[1], $idbill, $tour[6], $tour[7], $tour[8], $tour[11]);
                }
                $_SESSION['tour'] = [];
                foreach ($_SESSION['khachsan'] as $ks) {
                    insert_cart_ks($_SESSION['email']['iduser'], $total, $ks[1], $ks[4], $idbill, $ks[6], $ks[7], $ks[0], $ks[2], $ks[3], $ks[5], $ks[8]);
                }
                $_SESSION['khachsan'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "views/bill.php";
            break;
        case 'chitietphong':
            $maloai = $_GET['maloai'];
            $maks = $_GET['maks'];

            $select_phong = select_phong($maks);
            $onelp =  loadone_loaiphong($maloai);
            $select_phong5 = select_phong5($maks, $maloai);
            $oneks = loadone_khachsan($maks);

            // $listdh=loadall_hd();
            // $checktp=checktenphong($tenphong);
            include "views/chitiet_phong.php";
            break;
        case 'delks':
            $maks =  $_GET['maks'];
            if (isset($_GET['khachsan'])) {
                array_splice($_SESSION['khachsan'], $maks, 1);
            } else {
                $_SESSION['khachsan'] = [];
            }
            echo "<script> window.location.href='index.php?act=giohang'</script>";
            break;
        case 'quenmk':

            if (isset($_POST['forgot']) == true) {
                $email = $_POST['email'];
                $checksignin = checksignin($email);
                if (is_array($checksignin)) {
                    $matkhau = $checksignin['password'];
                    $ten = $checksignin['hoten'];
                    guimk($email, $matkhau, $ten);
                    $message = "Gửi thành công! .Vui lòng kiểm tra hộp thư để lấy lại mật khẩu";
                } else {
                    $message = "Email không tồn tại";
                }
            }
            include "views/taikhoan/forgot.php";
            break;
        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
