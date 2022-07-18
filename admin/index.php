<?php
include "../models/pdo.php";
include "../models/tour.php";
include "../models/khachsan.php";

include "../models/khuvuc.php";
include "../models/khudulich.php";
include "../models/loaiphong.php";

include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listkhuvuc':
            $listkhuvuc = loadall_khuvuc();
            include "khuvuc/list.php";
            break;
            //khu vực
        case 'addkhuvuc':
            //kiểm tra người dùng có click vào thêm hay không
            $error = [
                'ten' => '',
                'anh' => '',
            ];


            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenkv = $_POST['tenkv'];
                $file = $_FILES['anh'];
                $anh = $file['name'];
                if ($tenkv == '') {
                    $error['ten'] = "Bạn chưa nhập tên khu vực";
                }
                if ($file == '') {
                    $error['anh'] = "Bạn chưa chọn ảnh";
                }
                $img = ['jpg', 'png', 'gif', 'jpeg'];
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                if (!in_array($ext, $img)) {
                    $error['anh'] = "Ảnh không đúng định dạng";
                }
                if (!array_filter($error)) {
                    insert_khuvuc($tenkv, $anh);

                    move_uploaded_file($file['tmp_name'], '../img/khuvuc/' . $anh);
                    echo "<script> window.location.href='index.php?act=listkhuvuc&&message=Thêm thành công'</script>";
                }
            }
            include "khuvuc/add.php";
            break;
        case 'xoakv':
            $makv = $_GET['makv'];
            $delete_khuvuc = delete_khuvuc($makv);
            echo "<script> window.location.href='index.php?act=listkhuvuc&&message=Xoá thành công'</script>";
            break;
        case 'suakv':
            //kiểm tra người dùng có click vào thêm hay không
            $error = [
                'ten' => '',
                'anh' => '',
            ];
            $makv = $_GET['makv'];
            $onekv = loadone_khuvuc($makv);

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $makv = $_POST['makv'];
                $tenkv = $_POST['tenkv'];
                $file = $_FILES['anh'];
                $anh = $file['name'];
                if ($tenkv == '') {
                    $error['ten'] = "Bạn chưa nhập tên khu vực";
                }
                if (!array_filter($error)) {
                    edit_khuvuc($makv, $tenkv, $anh);
                    move_uploaded_file($file['tmp_name'], './img/khuvuc/' . $anh);
                    echo "<script> window.location.href='index.php?act=listkhuvuc&&message=Sửa thành công'</script>";
                }
            }
            include "khuvuc/edit.php";
            break;

            //tour
        case 'listtour':

            $listtour = loadall_tour();

            include "tour/list.php";
            break;
            //tour
        case 'addtour';

            include "tour/add.php";
            break;
            //khách sạn
        case 'khachsan':
            $listkhachsan = loadall_khachsan();
            include "khachsan/list.php";
            break;
        case 'addkhachsan':
            $listkhuvuc = loadall_khuvuc();
            //kiểm tra người dùng có click vào thêm hay không
            $error = [
                'tenks' => '',
                'makv' => '',
                'mota' => '',
                'anh' => ''
            ];
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenks = $_POST['tenks'];
                $makv = $_POST['makv'];
                $mota = $_POST['mota'];
                $file = $_FILES['anh'];
                $anh = $file['name'];
                if ($tenks == '') {
                    $error['tenks'] = "Bạn chưa nhập tên khách sạn";
                }
                if ($makv == '') {
                    $error['makv'] = "Bạn chưa chọn tên khu vực";
                }
                if ($mota == '') {
                    $error['mota'] = "Bạn chưa nhập mô tả";
                }
                if ($file == '') {
                    $error['anh'] = "Bạn chưa chọn ảnh";
                }
                $img = ['jpg', 'png', 'gif', 'jpeg'];
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                if (!in_array($ext, $img)) {
                    $error['anh'] = "Ảnh không đúng định dạng";
                }
                if (!array_filter($error)) {
                    insert_khachsan($tenks, $makv, $anh, $mota);
                    move_uploaded_file($file['tmp_name'], '../img/khachsan/' . $anh);
                    echo "<script> window.location.href='index.php?act=khachsan&&message=Thêm thành công'</script>";
                }
            }
            include "khachsan/add.php";
            break;

            
            case 'listkhudulich':
                $listkhudulich = loadall_khudulich();
    
    
    
    
                include "khudulich/list.php";
                break;    
            case 'addkdl':
                $error=[
                   'tenkdl'=>'',
                   'makv'=>'',
                   'anh'=>'',

                ];
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenkdl = $_POST['tenkdl'];
                    $makv = $_POST['makv'];
                    
                    $file = $_FILES['anh'];
                    $anh = $file['name'];
                    if ($tenkdl == '') {
                        $error['tenkdl'] = "Bạn chưa nhập tên khu du lịch";
                    }
                    if ($makv == '') {
                        $error['makv'] = "Bạn chưa chọn tên khu vực";
                    }
                    
                    if ($file == '') {
                        $error['anh'] = "Bạn chưa chọn ảnh";
                    }
                    $img = ['jpg', 'png', 'gif', 'jpeg'];
                    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                    if (!in_array($ext, $img)) {
                        $error['anh'] = "Ảnh không đúng định dạng";
                    }
                    if (!array_filter($error)) {
                        insert_khudulich($tenkdl, $makv, $anh);
                        move_uploaded_file($file['tmp_name'], '../img/khudulich/' . $anh);
                        echo "<script> window.location.href='index.php?act=listkhudulich&&message=Thêm thành công'</script>";
                    }
                }
                $listkhuvuc = loadall_khuvuc();
                include "khudulich/add.php";
                break;
        case 'xoakdl':
            $makdl = $_GET['makdl'];
            $delete_khudulich = delete_khudulich($makdl);
            echo "<script> window.location.href='index.php?act=listkhudulich&&message=Xoá thành công'</script>";
            break;
        case 'suakdl':
            //kiểm tra người dùng có click vào thêm hay không
            $error = [
                'ten' => '',
                'anh' => '',
            ];
            $makdl = $_GET['makdl'];
            $onekdl = loadone_khudulich($makdl);

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $makdl = $_POST['makdl'];
                $tenkdl = $_POST['tenkdl'];
                $makv = $_POST['makv'];
                $file = $_FILES['anh'];
                $anh = $file['name'];
                if ($tenkdl == '') {
                    $error['ten'] = "Bạn chưa nhập tên khu vực";
                }
                if (!array_filter($error)) {
                    edit_khudulich($makdl,$tenkdl,$anh);
                    move_uploaded_file($file['tmp_name'], './img/khudulich/' . $anh);
                    echo "<script> window.location.href='index.php?act=listkhudulich&&message=Sửa thành công'</script>";
                }
            }
            $listkhuvuc = loadall_khuvuc();
            include "khudulich/edit.php";
            break;
        case 'xoaks':
            $maks = $_GET['maks'];
            $delete_khachsan = delete_khachsan($maks);
            echo "<script> window.location.href='index.php?act=khachsan&&message=Xoá thành công'</script>";
            break;
        case 'suaks':

            $listkhuvuc = loadall_khuvuc();

          
            $error = [
                'tenks' => '',
                'makv' => '',
                'mota' => '',
                'anh' => ''
            ];

            $maks = $_GET['maks'];
            $oneks = loadone_khachsan($maks);
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $maks = $_POST['maks'];
                $tenks = $_POST['tenks'];
                $makv = $_POST['makv'];
                $mota = $_POST['mota'];
                $file = $_FILES['anh'];
                $anh = $file['name'];
                if ($tenks == '') {
                    $error['tenks'] = "Bạn chưa nhập tên khách sạn";
                }
                if ($makv == '') {
                    $error['makv'] = "Bạn chưa chọn tên khu vực";
                }
                if ($mota == '') {
                    $error['mota'] = "Bạn chưa nhập mô tả";
                }
                if (!array_filter($error)) {
                    edit_khachsan($maks, $tenks, $makv, $anh, $mota);
                    move_uploaded_file($file['tmp_name'], '../img/khachsan/' . $anh);
                    echo "<script> window.location.href='index.php?act=khachsan&&message=Sửa thành công'</script>";
                }
            }
            include "khachsan/edit.php";
            break;
            //loaiphong

            //loaiphong
        case 'addloaiphong':
            //kiểm tra người dùng có click vào thêm hay không
            $error = [
                'tenloai' => '',
                'giaphong' => '',
                'mota' => '',
            ];
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $giaphong = $_POST['giaphong'];
                $mota = $_POST['mota'];
                if ($tenloai == '') {
                    $error['tenloai'] = "Bạn chưa nhập tên loại";
                }
                if ($giaphong == '') {
                    $error['giaphong'] = "Bạn chưa nhập giá";
                }
                if ($mota == '') {
                    $error['mota'] = "Bạn chưa nhập mô tả";
                }
                if (!array_filter($error)) {
                    insert_loaiphong($tenloai, $giaphong, $mota);
                    echo "<script> window.location.href='index.php?act=loaiphong&&message=Thêm thành công'</script>";
                }
            }
            include "loaiphong/add.php";
            break;
        case 'loaiphong':

            $listloaiphong = loadall_loaiphong();
            include "loaiphong/list.php";
            break;
        case 'xoaloai':
            $maloai = $_GET['maloai'];
            $delete_loaiphong = delete_loaiphong($maloai);
            echo "<script> window.location.href='index.php?act=loaiphong&&message=Xoá thành công'</script>";
            break;
        case 'sualoai':
            $error = [
                'tenloai' => '',
                'giaphong' => '',
                'mota' => '',
            ];
            $maloai = $_GET['maloai'];
            $onelp = loadone_loaiphong($maloai);

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $maloai = $_POST['maloai'];
                $tenloai = $_POST['tenloai'];
                $giaphong = $_POST['giaphong'];
                $mota = $_POST['mota'];
                if ($tenloai == '') {
                    $error['tenloai'] = "Bạn chưa nhập tên loại";
                }
                if ($giaphong == '') {
                    $error['giaphong'] = "Bạn chưa nhập giá";
                }
                if ($mota == '') {
                    $error['mota'] = "Bạn chưa nhập mô tả";
                }
                if (!array_filter($error)) {
                    edit_loaiphong($maloai,$tenloai, $giaphong, $mota);
                    echo "<script> window.location.href='index.php?act=loaiphong&&message=Sửa thành công'</script>";
                }
            }
            include "loaiphong/edit.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
