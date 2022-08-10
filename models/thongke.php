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
    $sql = "SELECT SUM(total) as doanhthu ,COUNT(id) as donhang from bill where year(ngaydathang)=$year and month(ngaydathang) =$month and day(ngaydathang)=$day";
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
