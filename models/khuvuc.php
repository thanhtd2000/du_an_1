<?php
function loadall_khuvuc(){
    $sql="SELECT*FROM khuvuc ORDER BY makv DESC";
    $listkhuvuc=pdo_query($sql);
    return $listkhuvuc;
}
function loadone_khuvuc($makv){
    $sql="SELECT*FROM khuvuc where makv = $makv";
    $onekv=pdo_query_one($sql);
    return $onekv;
}
function insert_khuvuc($tenkv,$anh){
    $sql="INSERT INTO khuvuc( tenkv, anh) VALUES ('$tenkv','$anh')";
    pdo_execute($sql);

}
function edit_khuvuc($makv,$tenkv,$anh){
   if($anh!="")
   $sql="UPDATE khuvuc SET tenkv='$tenkv',anh='$anh' WHERE makv = $makv";
   else
   $sql="UPDATE khuvuc SET tenkv='$tenkv' WHERE makv = $makv";
   pdo_execute($sql);
   
}
function delete_khuvuc($makv){
    $sql="DELETE FROM khuvuc WHERE makv=$makv";
    pdo_execute($sql);
}
?>