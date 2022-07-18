<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ ĐƠN HÀNG</h5>
        </div>
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Loại Phòng</label>
                    <input type="number" class="form-control" disabled id="exampleInputEmail1" name="makh" aria-describedby="emailHelp" placeholder="Auto number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Loại Phòng</label>
                    <input type="text" class="form-control" placeholder="Nhập tên loại phòng" name="tenloai">
                    <!-- <span style="color:red"><?= $error['tenloai'] ?></span> -->
                </div>
                <!-- <p style="color:red;">
                            <?= isset($errors['tenloai']) ? $errors['tenloai'] : '' ?>
                        </p> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá Loại Phòng</label>
                    <input type="text" class="form-control" placeholder="Nhập giá" name="giaphong">
                    <!-- <span style="color:red"><?= $error['giaphong'] ?></span> -->
                </div>
                <p style="color:red;">
                    <?= isset($errors['giaphong']) ? $errors['giaphong'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="mota" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" name="themmoi" class="btn btn-success">Thêm mới</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="danhSachKh.html"><button type="button" class="btn btn-info">Danh sách</button></a>
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