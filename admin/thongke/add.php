<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ ĐƠN HÀNG</h5>
        </div>
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày thống kê</label>
                    <input type="date"  class="form-control" id="exampleInputEmail1" name="ngaydathang" aria-describedby="emailHelp" placeholder="Tên Phòng">
                </div>
                <p style="color:red;">
                    <?= isset($errors['ngaydathang']) ? $errors['ngaydathang'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số đơn hàng</label>
                    <input type="number"  class="form-control" id="exampleInputEmail1" name="donhang" aria-describedby="emailHelp" placeholder="Số đơn hàng">
                </div>
                <p style="color:red;">
                    <?= isset($errors['donhang']) ? $errors['donhang'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Doanh thu</label>
                    <input type="number"  class="form-control" id="exampleInputEmail1" name="doanhthu" aria-describedby="emailHelp" placeholder="Tên Phòng">
                </div>
                <p style="color:red;">
                    <?= isset($errors['doanhthu']) ? $errors['doanhthu'] : '' ?>
                </p>
                <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-success">
                <a href="index.php?act=thongke"><button type="button" class="btn btn-info">Thống kê</button></a>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>