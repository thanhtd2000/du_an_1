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