<?php
session_start();
include "../models/pdo.php";
include "../models/binhluan.php";
$tourid = $_REQUEST['tourid'];
$dsbl = loadall_binhluan($tourid);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        html {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="body">


        <table class="table">
            <tr>
                <th>Người Bình luận</th>
                <th>Nội dung</th>
                <th>Thời gian</th>
            </tr>
            <?php foreach ($dsbl as $bl) : ?>
                <?php extract($bl) ?>
                <tr>
                    <td><?= $bl['hoten'] ?></td>
                    <td><?= $bl['noidung'] ?></td>
                    <td><?= $bl['ngaybinhluan'] ?></td>
                    <?php if ($bl['iduser'] == $_SESSION['email']['iduser']||$_SESSION['email']['vaitro']==1) : ?>
                        <td><a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;" href="../index.php?act=xoabl&&mabl=<?= $mabl ?>&&tourid=<?= $tourid ?>" onclick="">Xoá</a></td>
                    <?php else : ?>
                        <?php echo "" ?>
                    <?php endif ?>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <?php
    if (isset($_SESSION['email']) && (is_array($_SESSION['email']))) {
        extract($_SESSION['email']);
    ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="tourid" value="<?= $tourid ?>">

            <input type="text" name="noidung" id="" placeholder="Viết bình luận" style="width:600px">
            <input type="submit" name="guibinhluan" value="Gửi" style="width:100px">

        </form>
    <?php
    } else {
    ?>
        <span style="color:red"><b>Đăng nhập để bình luận</b></span>
    <?php } ?>


    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $tourid = $_POST['tourid'];
        $iduser = $_SESSION['email']['iduser'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngaybinhluan = new DateTime();
        $ngaybinhluan->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($iduser, $noidung, $tourid, $ngaybinhluan);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    ?>
    </div>
</body>

</html>