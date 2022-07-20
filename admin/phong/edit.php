<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ ĐƠN HÀNG</h5>
        </div>
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã phòng</label>
                    <input type="number" class="form-control" name="maphong" readonly id="exampleInputEmail1"  aria-describedby="emailHelp" value="<?= $onephong['maphong'] ?>" placeholder="Auto number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Phòng</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tenphong" aria-describedby="emailHelp" value="<?= $onephong['tenphong'] ?>" placeholder="Tên Phòng">
                </div>
                <p style="color:red;">
                    <?= isset($errors['tenphong']) ? $errors['tenphong'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="">Chọn khách sạn</label>
                    <select name="maks" class="form-control" id="exampleFormControlSelect2">
                        <?php foreach ($listkhachsan as $lks) : ?>
                            <?php if ($onephong['maks'] == $lks['maks']) : ?>
                                    <option selected value="<?= $lks['maks'] ?>"><?= $lks['tenks'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $lks['maks'] ?>"><?= $lks['tenks'] ?></option>
                                <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <p style="color:red;">
                    <?= isset($errors['maks']) ? $errors['maks'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="">Loại Phòng</label>
                    <select name="maloai" class="form-control" id="exampleFormControlSelect2">
                        <?php foreach ($listloaiphong as $llp) : ?>
                            <?php if ($onephong['maloai'] == $llp['maloai']) : ?>
                                    <option selected value="<?= $llp['maloai'] ?>"><?= $llp['tenloai'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $llp['maloai'] ?>"><?= $llp['tenloai'] ?></option>
                                <?php endif ?>
                        <?php endforeach ?>
                    </select>

                </div>
                <p style="color:red;">
                    <?= isset($errors['maloai']) ? $errors['maloai'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="anh" aria-describedby="emailHelp" placeholder="">
                </div>
                <img src="../img/phong/<?= $onephong['anh'] ?>" width="100" alt="">
                <p style="color:red;">
                    <?= isset($errors['anh']) ? $errors['anh'] : '' ?>
                </p>
                <input type="submit" name="themmoi" value="Cập nhật" class="btn btn-success">
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="index.php?act=phong"><button type="button" class="btn btn-info">Danh sách</button></a>
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