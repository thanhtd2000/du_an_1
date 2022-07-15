<?php
function insert_khachsan($tenks,$makv,$anh,$mota){
    $sql="INSERT INTO khachsan( tenks, makv, anh, mota) VALUES ('$tenks','$makv','$anh','$mota')";
    pdo_execute($sql);

}
function loadall_khachsan(){
    $sql="SELECT*FROM khachsan ORDER BY maks DESC";
    $listkhachsan=pdo_query($sql);
    return $listkhachsan;
}
function delete_khachsan($maks){
    $sql="DELETE FROM khachsan WHERE maks=$maks";
    pdo_execute($sql);
}
?>