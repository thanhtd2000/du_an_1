<?php
//index.php
$mysqli = new mysqli("localhost", "root", "", "duan_1");
$sql = "SELECT * from thongke  ";
$result = mysqli_query($mysqli, $sql);
$chart_data = '';
while ($row = mysqli_fetch_array($result)) {
    $chart_data .= "{ ngaydathang:'" . $row["ngaydathang"] . "', donhang:" . $row["donhang"] . ", doanhthu:" . $row["doanhthu"] . "}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>



<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>THỐNG KÊ ĐƠN HÀNG</h5>
        </div>
        <div id="chart"></div>
        <a href="index.php?act=addtk"><button type="button" class="btn btn-info">Nhập dữ liệu</button></a>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    Morris.Area({
        element: 'chart',
        data: [<?php echo $chart_data; ?>],
        xkey: 'ngaydathang',
        ykeys: ['ngaydathang', 'donhang', 'doanhthu'],
        labels: ['Ngày đặt hàng', 'Đơn hàng', 'Doanh thu'],
        hideHover: 'auto',
        stacked: true
    });
</script>