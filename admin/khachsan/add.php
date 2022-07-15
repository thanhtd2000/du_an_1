<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ KHÁCH SẠN</h5>
        </div>
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Khách sạn</label>
                    <input type="number" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="auto number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên khách sạn</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tenks" aria-describedby="emailHelp" placeholder="">
                </div>
                <p style="color:red;">
                    <?= isset($errors['tenks']) ? $errors['tenks'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="">Khu vực</label>
                    <select name="makv" multiple class="form-control" id="exampleFormControlSelect2">
                        <?php foreach ($listkhuvuc as $lkv) : ?>
                            <option value="<?= $lkv['makv'] ?>"><?= $lkv['tenkv'] ?></option>
                        <?php endforeach ?>
                    </select>

                </div>
                <p style="color:red;">
                    <?= isset($errors['tenkv']) ? $errors['tenkv'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="anh" aria-describedby="emailHelp" placeholder="">
                </div>
                <p style="color:red;">
                    <?= isset($errors['anh']) ? $errors['anh'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="mota" aria-describedby="emailHelp" placeholder="">
                </div>
                <p style="color:red;">
                    <?= isset($errors['mota']) ? $errors['mota'] : '' ?>
                </p>
                <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-success">
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="index.php?act=khachsan"><button type="button" class="btn btn-info">Danh sách</button></a>
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