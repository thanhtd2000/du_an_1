<script>
    CKEDITOR.replace('mota', {
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
   
    Morris.Area({
        element: 'chart',
        data: <?= $chart_data ?>,
        xkey: 'ngaydathang',
        ykeys: ['ngaydathang', 'donhang', 'doanhthu'],
        labels: ['Ngày đặt hàng', 'Đơn hàng', 'Doanh thu'],
        
    });
</script>