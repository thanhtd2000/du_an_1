<?php
function loadall_khuvuc(){
    $sql="SELECT*FROM khuvuc ORDER BY makv DESC";
    $listkhuvuc=pdo_query($sql);
    return $listkhuvuc;
}
function insert_khuvuc($tenkv,$anh){
    $sql="INSERT INTO khuvuc( tenkv, anh) VALUES ('$tenkv','$anh')";
    pdo_execute($sql);

}
function delete_khuvuc($makv){
    $sql="DELETE FROM khuvuc WHERE makv=$makv";
    pdo_execute($sql);
}
?>