<?php
function loadall_khudulich(){
    $sql="SELECT a.makdl,a.tenkdl,a.anh,a.makv,b.tenkv FROM khudulich a inner join khuvuc b on a.makv = b.makv   ORDER BY a.makdl DESC";
    $listkhudulich=pdo_query($sql);
    return $listkhudulich;
}
function insert_khudulich($tenkdl,$makv,$anh){
    $sql="INSERT INTO khudulich ( tenkdl, makv, anh) VALUES ('$tenkdl','$makv','$anh')";
    pdo_execute($sql);

}
function delete_khudulich($makdl){
    $sql="DELETE FROM khudulich WHERE makdl=$makdl";
    pdo_execute($sql);
}
function loadone_khudulich($makdl){
    $sql="SELECT*FROM khudulich where makdl = $makdl";
    $onekdl=pdo_query_one($sql);
    return $onekdl;
}
function edit_khudulich($makdl,$tenkdl,$anh,$makv){
    if($anh!="")
    $sql="UPDATE khudulich SET tenkdl='$tenkdl',anh='$anh',makv='$makv' WHERE makdl = $makdl";
    else
    $sql="UPDATE khudulich SET tenkdl='$tenkdl',makv='$makv' WHERE makdl = $makdl";
    pdo_execute($sql);
    
 }
?>