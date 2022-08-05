<?php
function load_allhd($iduser){
    $sql = "SELECT a.*,b.* FROM donhang as a inner join bill as b on a.idbill = b.id where iduser =$iduser ORDER BY madh DESC ";
    $listhd = pdo_query($sql);
    return $listhd;

}function load_allhd2($item_per_page,$offset){
    $sql = "SELECT a.*,b.* FROM donhang as a inner join bill as b on a.idbill = b.id ORDER BY madh DESC limit $item_per_page offset $offset";
    $listhd2 = pdo_query($sql);
    return $listhd2;
}
function delete_dh($madh,$id){
    $sql = "DELETE FROM hoadon WHERE madh=$madh";
    $sql = "DELETE FROM bill WHERE id=$id";
    pdo_execute($sql);
}