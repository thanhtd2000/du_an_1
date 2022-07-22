<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ KHU DU LỊCH</h5>
        </div>
        <div class="addProducts_form">

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã dịch vụ</label>
                    <input type="number" value="<?= $onedvp['madv'] ?>" class="form-control" readonly id="exampleInputEmail1" name="madv" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên dịch vụ phụ</label>
                    <input type="text" value="<?= $onedvp['tendv'] ?>" class="form-control" placeholder="Nhập tên dịch vụ phụ" name="tendv">
                </div>
                <p style="color:red;">
                    <?= isset($errors['tendv']) ? $errors['tendv'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá tiền</label>
                    <input type="text" value="<?= $onedvp['gia'] ?>" class="form-control" placeholder="Nhập giá tiền" name="gia">
                </div>
                <p style="color:red;">
                    <?= isset($errors['gia']) ? $errors['gia'] : '' ?>
                </p>
                <input type="submit" name="themmoi" value="Cập nhật" class="btn btn-success">
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="index.php?act=dichvuphu"><button type="button" class="btn btn-info">Danh sách</button></a>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>