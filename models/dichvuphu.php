<?php
function loadall_dichvuphu(){
    $sql="SELECT*FROM dichvuphu ORDER BY madv DESC";
    $listdichvu=pdo_query($sql);
    return $listdichvu;
}
function loadone_dichvuphu($madv){
    $sql="SELECT*FROM dichvuphu where madv = $madv";
    $onedvp=pdo_query_one($sql);
    return $onedvp;
}
function insert_dichvuphu($tendv,$gia){
    $sql="INSERT INTO dichvuphu( tendv, gia) VALUES ('$tendv','$gia')";
    pdo_execute($sql);

}
function edit_dichvuphu($madv,$tendv,$gia){
   $sql="UPDATE dichvuphu SET tendv='$tendv',gia='$gia' WHERE madv = $madv";
   pdo_execute($sql);
   
}
function delete_dichvuphu($madv){
    $sql="DELETE FROM dichvuphu WHERE madv=$madv";
    pdo_execute($sql);
}
?>