<?php
function insert_binhluan($iduser,$noidung,$tourid,$ngaybinhluan){
    $sql="INSERT INTO binhluan(iduser,noidung,tourid,ngaybinhluan) VALUES('$iduser','$noidung','$tourid','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($tourid){

    $sql="SELECT*FROM binhluan  INNER JOIN user ON binhluan.iduser=user.iduser WHERE 1";
    if($tourid>0)$sql.=" AND tourid='".$tourid."'";
    
    else
    $sql.=" ORDER BY mabl DESC";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function loadall_binhluan_ks($maks){

    $sql="SELECT*FROM binhluan  INNER JOIN user ON binhluan.iduser=user.iduser WHERE 1";
    if($maks>0)$sql.=" AND maks='".$maks."'";
    
    else
    $sql.=" ORDER BY mabl DESC";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function insert_binhluan_ks($iduser,$noidung,$maks,$ngaybinhluan){
    $sql="INSERT INTO binhluan(iduser,noidung,maks,ngaybinhluan) VALUES('$iduser','$noidung','$maks','$ngaybinhluan')";
    pdo_execute($sql);
}
function delete_binhluan($mabl){
    $sql="DELETE FROM binhluan WHERE mabl=$mabl";
     pdo_execute($sql);
}
 