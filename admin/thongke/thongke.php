<?php


$chart_data = json_encode($dataTotal);
$chart_data2 = json_encode($dataTotal2,JSON_UNESCAPED_UNICODE);
$chart_data3 = json_encode($dataTotal3,JSON_UNESCAPED_UNICODE);
?>
<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>THỐNG KÊ ĐƠN HÀNG</h5>
        </div>
        <div id="chart" style="height: 250px;"></div>
    </div>
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>THỐNG KÊ KHU VỰC</h5>
        </div>
        <div id="chart2" style="height: 250px;"></div>
    </div>
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>THỐNG KÊ TOUR</h5>
        </div>
        <div id="chart3" style="height: 250px;"></div>
    </div>
</div>