<?php
session_start();
include "../models/pdo.php";
include "../models/binhluan.php";
$maks=$_REQUEST['maks'];
$dsbl_ks=loadall_binhluan_ks($maks);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            html{
                margin-top:0;
            }
        </style>
</head>

<body>
    <div class="body" >

        
            <table class="table">
                <?php
                        foreach ($dsbl_ks as $blks) {
                            extract($blks);
                            echo $blks['hoten'].':'.$blks['noidung'] .'<br>';
                              
                        }
                        
                        ?>
            </table>
        </div>
       
        
        <?php
                if(isset($_SESSION['email'])&&(is_array($_SESSION['email']))){
                    extract($_SESSION['email']);
                 ?>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="maks" value="<?=$maks?>">
                
                <input type="text" name="noidung" id="" placeholder="Viết bình luận" style="width:600px">
                <input type="submit" name="guibinhluan" value="Gửi" style="width:100px">

            </form>
            <?php
            }else{
            ?>
            <span style="color:red"><b>Đăng nhập để bình luận</b></span>
            <?php }?>
       

        <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung=$_POST['noidung'];
            $maks=$_POST['maks'];
            $iduser=$_SESSION['email']['iduser'];
            $ngaybinhluan=date('h:i:sa d/m/Y');
            insert_binhluan_ks($iduser,$noidung,$maks,$ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
        
        ?>
    </div>
</body>

</html>