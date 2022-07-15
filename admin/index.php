<?php
include "../models/pdo.php";
include "../models/tour.php";
include "../models/khachsan.php";
include "../models/khuvuc.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listkhuvuc':
            $listkhuvuc=loadall_khuvuc();
                    
                    
            
            
            include "khuvuc/list.php";
            break;
            case 'addkhuvuc':
                //kiểm tra người dùng có click vào thêm hay không
                $error=[
                    'ten'=>'',
                    
                    
                    'anh'=>'',
                ];
                    
                    
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $tenkv=$_POST['tenkv'];
                   $file=$_FILES['anh'];
                   $anh=$file['name'];
                   if($tenkv==''){
                       $error['ten']="Bạn chưa nhập tên khu vực";
                   }
                   if($file==''){
                    $error['anh']="Bạn chưa chọn ảnh";
                   }
                    $img=['jpg','png','gif'];
                    $ext=pathinfo($file['name'],PATHINFO_EXTENSION);
                    if(!in_array($ext,$img)){
                    $error['anh']="Ảnh không đúng định dạng";
                    }
                    if(!array_filter($error)){
                        insert_khuvuc($tenkv,$anh);
    
                        move_uploaded_file($file['tmp_name'],'./img/'.$anh);
                        echo"<script> window.location.href='index.php?act=listkhuvuc&&message=Đăng ký thành công'</script>";
                
                    }
                }   
                include "khuvuc/add.php";
                break;
        case 'listtour':
            
            
            $listtour=loadall_tour();
            
            include "tour/list.php";
            break;
        case 'addtour';
        
        include "tour/add.php";
        break;
    default:
        include "home.php";
        break;
    }
}else{
    include "home.php";
}


include "footer.php";
?>
