<?php
function insert_taikhoan($email, $password, $diachi, $hoten, $sdt, $anh)
{
    $sql = "INSERT INTO user(email,password,diachi,hoten,sdt,anh) VALUES('$email','$password','$diachi','$hoten','$sdt','$anh')";
    pdo_execute($sql);
}
function insert_taikhoan2($email, $password, $diachi, $hoten, $sdt, $anh, $vaitro)
{
    $sql = "INSERT INTO user(email,password,diachi,hoten,sdt,anh,vaitro) VALUES('$email','$password','$diachi','$hoten','$sdt','$anh',$vaitro)";
    pdo_execute($sql);
}
function checksignin($email)
{

    $sql = "SELECT*FROM user WHERE email='$email'";

    $checksignin = pdo_query_one($sql);
    return $checksignin;
}
function checkemail($email, $password)
{

    $sql = "SELECT*FROM user WHERE email='$email' AND password='$password'";

    $checkemail = pdo_query_one($sql);
    return $checkemail;
}
function loadall_user()
{
    $sql = "SELECT*FROM user ORDER BY iduser DESC";
    $listuser = pdo_query($sql);
    return $listuser;
}
function delete_user($iduser)
{
    $sql = "DELETE FROM user WHERE iduser=$iduser";
    pdo_execute($sql);
}
function loadone_user($iduser)
{
    $sql = "SELECT*FROM user where iduser = $iduser";
    $oneuser = pdo_query_one($sql);
    return $oneuser;
}
function edit_user($iduser, $email, $password, $diachi, $hoten, $sdt, $anh, $vaitro)
{
    if ($anh != "")
        $sql = "UPDATE user SET password='$password',diachi='$diachi',hoten='$hoten',anh='$anh',sdt='$sdt',email='$email',vaitro='$vaitro' WHERE iduser= $iduser";
    else
        $sql = "UPDATE user SET password='$password',diachi='$diachi',hoten='$hoten',sdt='$sdt',email='$email',vaitro='$vaitro' WHERE iduser= $iduser";
    pdo_execute($sql);
}
function edit_user2($iduser, $password, $diachi, $hoten, $sdt, $anh)
{
    if ($anh != "")
        $sql = "UPDATE user SET password='$password',diachi='$diachi',hoten='$hoten',anh='$anh',sdt='$sdt' WHERE iduser= $iduser";
    else
        $sql = "UPDATE user SET password='$password',diachi='$diachi',hoten='$hoten',sdt='$sdt' WHERE iduser= $iduser";
    pdo_execute($sql);
}
function quenmail($email)
{

    $sql = "SELECT * FROM user where email = '$email'";

    $quenmail = pdo_query($sql);
    return $quenmail;
}

function guimk($email, $matkhau, $ten)
{

    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'vietnametp@gmail.com'; // SMTP username
        $mail->Password = 'kkdjsztjhxmbiusb';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('vietnametp@gmail.com', 'Viet Nam Exploration Trips');
        $mail->addAddress($email, $ten);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thông tin lấy lại mật khẩu';
        $noidungthu = "<p>Mật khẩu của bạn là : {$matkhau} <br> Hãy truy cập vào lại trang web Vietnam Exploration Trips  để đổi lại mật khẩu mới</p>";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        
    } catch (Exception $e) {
        echo 'Error: Lỗi mail ', $mail->ErrorInfo;
    }
}
