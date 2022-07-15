<body>
    <div class="header contain">
        <h1 style="color: #A7615E; background-color: #F4E0E0; padding: 10px; font-weight: 400; border-radius: 7px;">
            QUẢN TRỊ WEBSITE</h1>
        <div class="header_nav">
            <ul class="nav">
                <li class="nav-item">
                    <a style="font-size: 20px;" class="nav-link active" href="">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Khách hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Tour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Phòng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Bình luận</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Dịch vụ phụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Khách sạn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Khu du lịch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Khu vực</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Thống kê</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="addProducts contain">
        <div class="addProducts__Content">
            <div class="addProducts__title">
                <h5>QUẢN LÝ ĐƠN HÀNG</h5>
            </div>
            <div class="addProducts_form">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mã Khách sạn</label>
                        <input type="number" class="form-control" disabled id="exampleInputEmail1" name="makh" aria-describedby="emailHelp" placeholder="auto number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên khách sạn</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                    </div>
                    <p style="color:red;">
                        <?= isset($errors['name']) ? $errors['name'] : '' ?>
                    </p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên khu vực</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                    </div>
                    <p style="color:red;">
                        <?= isset($errors['tenkh']) ? $errors['tenkh'] : '' ?>
                    </p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" name="pass" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <p style="color:red;">
                        <?= isset($errors['pass']) ? $errors['pass'] : '' ?>
                    </p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="pass" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <p style="color:red;">
                        <?= isset($errors['pass']) ? $errors['pass'] : '' ?>
                    </p>
                    <button type="submit" name="up" class="btn btn-success">Thêm mới</button>
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