<?php

$date = array();
for ($i = 0; $i <= 6; $i++) {
    array_push($date, date("Y-m-d", strtotime("-" . $i . "day")));
}
$dataTotal = array();
function totalPrice($date)
{
    $date = explode('-', $date);
    $year = $date[0];
    $month = $date[1];
    $day = $date[2];
    $sql = "SELECT SUM(total) as doanhthu ,COUNT(id) as donhang from bill where year(ngaydathang)=$year and month(ngaydathang) =$month and day(ngaydathang)=$day and bill_status='Đã xác nhận' ";
    $data = pdo_query($sql);
    return $data;
};

foreach ($date as $dt) {

    $data =  totalPrice($dt);
    $item = [
        'ngaydathang' => $dt,
        'donhang' => $data[0][1] ?? 0,
        'doanhthu' => $data[0][0] ?? 0
    ];
    array_push($dataTotal, $item);
};

$dataTotal2 = array();
function totalVisit()
{

    $sql = "SELECT khuvuc.tenkv as tenkv,count(bill.makv) as solan  from khuvuc  join bill on khuvuc.makv = bill.makv group by khuvuc.tenkv ";
    $data2 = pdo_query($sql);
    return $data2;
};
$data2 = totalVisit();

foreach ($data2 as $dt2) {
  
    $item2 = [
        'tenkv' => $dt2[0] ?? 0,
        'solan' => $dt2[1]?? 0
    ];
    
    array_push($dataTotal2, $item2);
};


$dataTotal3 = array();
function totalTour()
{

    $sql = "SELECT tour.tourname as tourname,count(donhang.tourid) as sold  from tour  join donhang on tour.tourid = donhang.tourid group by tour.tourname ";
    $data2 = pdo_query($sql);
    return $data2;
};
$data3 = totalTour();

foreach ($data3 as $dt3) {
  
    $item3 = [
        'tourname' => $dt3[0] ?? 0,
        'sold' => $dt3[1]?? 0
    ];
    
    array_push($dataTotal3, $item3);
};