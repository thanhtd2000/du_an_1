<?php
function insert_khachsan($tenks, $makv, $anh, $mota)
{
    $sql = "INSERT INTO khachsan( tenks, makv, anh, mota) VALUES ('$tenks','$makv','$anh','$mota')";
    pdo_execute($sql);
}
function loadone_khachsan($maks)
{
    $sql = "SELECT*FROM khachsan where maks = $maks";
    $oneks = pdo_query_one($sql);
    return $oneks;
}
function loadall_khachsan()
{
    $sql = "SELECT a.*,b.tenkv FROM khachsan as a inner join khuvuc as b on a.makv = b.makv ORDER BY maks DESC";
    $listkhachsan = pdo_query($sql);
    return $listkhachsan;
}
function delete_khachsan($maks)
{
    $sql = "DELETE FROM khachsan WHERE maks=$maks";
    pdo_execute($sql);
}
function edit_khachsan($maks, $tenks, $makv, $anh, $mota)
{
    if ($anh != "")
        $sql = "UPDATE khachsan SET tenks='$tenks',makv='$makv',anh='$anh',mota='$mota' WHERE maks = $maks";
    else
        $sql = "UPDATE khachsan SET tenks='$tenks',makv='$makv',mota='$mota' WHERE maks = $maks";
    pdo_execute($sql);
}

function select_phong($maks)
{
    $sql = "SELECT b.anh,c.tenloai,c.giaphong FROM khachsan as a inner join phong as b on a.maks = b.maks inner join loaiphong  as c on b.maloai = c.maloai where a.maks = $maks";
    $select_phong = pdo_query($sql);
    return $select_phong;
}
