<?php
session_start();
include "models/pdo.php";
include "models/taikhoan.php";
include "views/block/header.php";



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
        case 'admin':
            
            include "../du_an_1/admin/index.php";

            break;
        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
