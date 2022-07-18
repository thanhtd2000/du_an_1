<?php
function loadall_khudulich(){
    $sql="SELECT*FROM khudulich INNER JOIN khuvuc ON khudulich.makv=khuvuc.makv ORDER BY makdl DESC";
    $listkhudulich=pdo_query($sql);
    return $listkhudulich;
}
function insert_khudulich($tenkdl,$makv,$anh){
    $sql="INSERT INTO khudulich ( tenkdl, makv, anh) VALUES ('$tenks','$makv','$anh')";
    pdo_execute($sql);

}
?>