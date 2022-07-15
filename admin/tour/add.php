<div class="addProducts contain">
            <div class="addProducts__Content">
                <div class="addProducts__title">
                    <h5>QUẢN LÝ TOUR</h5>
                </div>
                <div class="addProducts_form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên tour</label>
                            <input type="number" class="form-control" disabled id="exampleInputEmail1" name="tourname"
                                aria-describedby="emailHelp" placeholder="auto number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá</label>
                            <input type="number" name="gia" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                            <?= isset($errors['name']) ? $errors['name'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="mota"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                            <?= isset($errors['tenkh']) ? $errors['tenkh'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày bắt đầu</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="start"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                            <?= isset($errors['pass']) ? $errors['pass'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày kết thúc</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" name="finish"
                                aria-describedby="emailHelp" placeholder="">
                        </div>
                        <p style="color:red;">
                              <?= isset($errors['pass']) ? $errors['pass'] : '' ?>
                          </p>
                        <div class="form-group">
                              <label for="exampleInputPassword1">Hình ảnh</label>
                              <input type="file" class="form-control" id="exampleInputPassword1" name="anh">
                              <p style="color:red;">
                                    <?= isset($errors['anh']) ? $errors['anh'] : '' ?>
                              </p>
                        </div>
                        <div class="form-group">
                              <label for="exampleInputEmail1">Khách sạn</label>
                              <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                          </div>
                        <p style="color:red;">
                            <?= isset($errors['email']) ? $errors['email'] : '' ?>
                        </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Khu du lịch</label>
                            <br>
                            <select multiple class="form-control" id="exampleFormControlSelect2">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                            
                        </div>
                        <div class="form-group">
                              <label for="exampleInputEmail1">Khu vực</label>
                              <br>
                              <select multiple class="form-control" id="exampleFormControlSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                              
                          </div>
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