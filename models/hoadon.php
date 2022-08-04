<?php
function load_allhd($iduser){
    $sql = "SELECT a.*,b.ngaydathang FROM donhang as a inner join bill as b on a.idbill = b.id where iduser =$iduser ORDER BY madh DESC ";
    $listhd = pdo_query($sql);
    return $listhd;
}