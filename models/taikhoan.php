<?php
function insert_taikhoan($email,$password,$diachi,$hoten,$sdt,$anh){
    $sql="INSERT INTO user(email,password,diachi,hoten,sdt,anh) VALUES('$email','$password','$diachi','$hoten','$sdt','$anh')";
    pdo_execute($sql);

}
function checksignin($email){
    
    $sql="SELECT*FROM user WHERE email='$email'";
     
    $checksignin=pdo_query_one($sql);
    return $checksignin;
}
function checkemail($email,$password){
    
    $sql="SELECT*FROM user WHERE email='$email' AND password='$password'";
     
    $checkemail=pdo_query_one($sql);
    return $checkemail;
}
?>