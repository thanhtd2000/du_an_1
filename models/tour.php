<?php
function loadall_tour(){
    
    $sql="SELECT*FROM tour ORDER BY tourid DESC";
    
    
    $listtour=pdo_query($sql);
    return $listtour;
}
?>