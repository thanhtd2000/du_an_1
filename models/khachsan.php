<?php
function insert_khachsan($tenks,$makv,$anh,$mota){
    $sql="INSERT INTO khachsan( tenks, makv, anh, mota) VALUES ('$tenks','$makv','$anh','$mota')";
    pdo_execute($sql);

}

?>