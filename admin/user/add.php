<div class="addProducts contain">
            <div class="addProducts__Content">
                <div class="addProducts__title">
                    <h5>QUẢN LÝ KHÁCH HÀNG</h5>
                </div>
                <div class="addProducts_form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mã khách hàng</label>
                            <input type="number" class="form-control" disabled id="exampleInputEmail1" name="makh"
                                aria-describedby="emailHelp" placeholder="auto number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                            <?= isset($errors['email']) ? $errors['email'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Họ và tên</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="hoten"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                            <?= isset($errors['hoten']) ? $errors['hoten'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="diachi"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                            <?= isset($errors['diachi']) ? $errors['diachi'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="sdt"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                            <?= isset($errors['sdt']) ? $errors['sdt'] : '' ?>
                        </p>
                        <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                                  aria-describedby="emailHelp" placeholder="">
                          </div>
                        <p style="color:red;">
                            <?= isset($errors['password']) ? $errors['password'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="anh">
                            <p style="color:red;">
                                <?= isset($errors['anh']) ? $errors['anh'] : '' ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vai trò</label>
                            <br>
                            <select name="vaitro" class="form-control" id="exampleFormControlSelect2">
                            <option value="0">Khách hàng</option>
                            <option value="1">ADMIN</option>
                            <option value="2">NHÂN VIÊN</option>
                    </select>
                        </div>
                        <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-success">
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