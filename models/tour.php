<?php
function loadall_tour(){
    
    $sql="SELECT*FROM tour ORDER BY tourid DESC";
  
    
    $listtour=pdo_query($sql);
    return $listtour;
}
function loadall_tour2($item_per_page, $offset){
    $sql="SELECT*FROM tour ORDER BY tourid DESC limit $item_per_page offset $offset";
    
    $listtour2=pdo_query($sql);
    return $listtour2;
}
function loadall_tour_search($kyw,$makv){
    
    // $sql="SELECT*FROM tour ORDER BY tourid DESC";
    $sql="SELECT*FROM tour WHERE 1";
    if($kyw!=''){
        $sql.=" AND tourname LIKE '%".$kyw."%'";
    }
    if($makv>0){
        $sql.=" AND makv='".$makv."'";
    }
    
    $sql.=" ORDER BY tourid DESC";
    
    $listtours=pdo_query($sql);
    return $listtours;
}
function load_ten_kv($makv){
    if($makv>0){
        $sql="SELECT*FROM khuvuc WHERE makv=$makv ";
    $kv=pdo_query_one($sql);
    extract($kv);
    return $tenkv;
    }else{
        return "";
    }
    
}
function insert_tour($tourname,$gia_nl,$mota,$start,$finish,$maks,$makdl,$anh,$makv,$giatre_em){
    $sql="INSERT INTO tour(tourname, gia_nl, mota, start, finish, maks, makdl, anh, makv, giatre_em) VALUES ('$tourname','$gia_nl','$mota','$start','$finish','$maks','$makdl','$anh','$makv','$giatre_em')";
    pdo_execute($sql);

}
function loadone_tour($tourid)
{
    $sql = "SELECT*FROM tour where tourid = $tourid";
    $onetour = pdo_query_one($sql);
    return $onetour;
}
function delete_tour($tourid){
    $sql="DELETE FROM tour WHERE tourid=$tourid";
    pdo_execute($sql);
}
function edit_tour($tourid,$tourname,$gia_nl,$mota,$start,$finish,$maks,$makdl,$anh,$makv,$giatre_em){
    if($anh!="")
    $sql="UPDATE tour SET tourname='$tourname',gia_nl='$gia_nl',mota='$mota',start='$start',finish='$finish',maks='$maks',makdl='$makdl',giatre_em='$giatre_em',anh='$anh',makv='$makv' WHERE tourid = $tourid";
    else
    $sql="UPDATE tour SET tourname='$tourname',gia_nl='$gia_nl',mota='$mota',start='$start',finish='$finish',maks='$maks',makdl='$makdl',giatre_em='$giatre_em',makv='$makv' WHERE tourid = $tourid";
    pdo_execute($sql);
    
 }
?>