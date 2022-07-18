<?php
function loadall_loaiphong(){
    $sql="SELECT*FROM loaiphong ORDER BY maloai DESC";
    $listloaiphong=pdo_query($sql);
    return $listloaiphong;
}
function loadone_loaiphong($maloai)
{
    $sql = "SELECT*FROM loaiphong where maloai = $maloai";
    $onelp = pdo_query_one($sql);
    return $onelp;
}
function insert_loaiphong($tenloai, $giaphong, $mota)
{
    $sql = "INSERT INTO loaiphong(tenloai, giaphong, mota) VALUES ('$tenloai','$giaphong','$mota')";
    pdo_execute($sql);
}
function edit_loaiphong($maloai, $tenloai, $giaphong, $mota)
{
    $sql = "UPDATE loaiphong SET tenloai='$tenloai',giaphong='$giaphong',mota='$mota' WHERE maloai = $maloai";
    pdo_execute($sql);
}
function delete_loaiphong($maloai)
{
    $sql = "DELETE FROM loaiphong WHERE maloai=$maloai";
    pdo_execute($sql);
}
