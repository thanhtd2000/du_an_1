<?php
function insert_phong($tenphong, $maks, $maloai, $anh)
{
    $sql = "INSERT INTO phong(tenphong, maks, maloai, anh) VALUES ('$tenphong','$maks','$maloai','$anh')";
    pdo_execute($sql);
}
function loadone_phong($maphong)
{
    $sql = "SELECT*FROM phong where maphong = $maphong";
    $onephong = pdo_query_one($sql);
    return $onephong;
}
function loadall_phong()
{
    $sql = "SELECT*FROM phong ORDER BY maphong DESC";
    $listphong = pdo_query($sql);
    return $listphong;
}
function delete_phong($maphong)
{
    $sql = "DELETE FROM phong WHERE maphong=$maphong";
    pdo_execute($sql);
}
function edit_phong($maphong, $tenphong, $maks, $maloai, $anh)
{
    if ($anh != "")
        $sql = "UPDATE phong SET tenphong='$tenphong',maks='$maks',maloai='$maloai',anh='$anh' WHERE maphong = $maphong";
    else
        $sql = "UPDATE phong SET tenphong='$tenphong',maks='$maks',maloai='$maloai' WHERE maphong = $maphong";
    pdo_execute($sql);
}
