<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ KHU DU LỊCH</h5>
        </div>
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" hidden value="<?= $onekv['makv'] ?>" name="makv" id="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên khu vực</label>
                    <input type="text" value="<?= $onekv['tenkv'] ?>" class="form-control" placeholder="Nhập tên khu vực" name="tenkv">
                    <span style="color:red"><?= $error['ten'] ?></span>
                </div>
                <p style="color:red;">
                    <?= isset($errors['ten']) ? $errors['ten'] : '' ?>
                </p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh</label>

                    <input type="file" class="form-control" id="exampleInputEmail1" name="anh" aria-describedby="emailHelp" placeholder="">
                    <span style="color:red"><?= $error['anh'] ?></span>
                </div>
                <img src="../img/<?= $onekv['anh'] ?>" width="100" alt="">
                <p style="color:red;">
                    <?= isset($errors['anh']) ? $errors['anh'] : '' ?>
                </p>
                <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-success">
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="index.php?act=listkhuvuc"><button type="button" class="btn btn-info">Danh sách</button></a>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>