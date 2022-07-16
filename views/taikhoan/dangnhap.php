<body>
      <div class="register">
            <div class="register__content">
                  <div class="row">
                        <div class="col-8">
                              <div class="img"></div>
                        </div>
                        <div class="col-4">
                              <div class="register__img d-flex">
                                    <img src="./img/logo/logo chu.png" alt="">
                              </div>
                              <div class="register__title d-flex">
                                    <span class="item active" data-this="dm-1">Đăng nhập/Login</span>
                                    <!-- <span class="item" data-this="dm-2">Đăng ký/Register</span> -->
                              </div>
                              <?php if (isset($_GET['message'])) : ?>
                                          <div class="card-body">
                                                <h3 style="color:rgb(209, 76, 76);"><?= $_GET['message'] ?></h3>
                                          </div>   
                              <?php endif ?>
                              <div class="body">
                                    <div class="register__input active" id="dm-1">
                                          <form action="" method="post">
                                                <input type="text" name="email" class="d-block" placeholder="Email">
                                                <input type="password" name="password" class="d-block" placeholder="Mật khẩu/Password">
                                                <div class="check d-flex">
                                                      <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ghi nhớ
                                                                  mật khẩu</label>
                                                      </div>
                                                      <div><a href="quenMatKhau.html" style="color:#000;">Quên mật khẩu</a></div>
                                                </div>
                                                <input type="submit" name="dangnhap" class="btn btn-warning" value="ĐĂNG NHẬP/LOGIN">
                                                <!-- <button type="submit" name="login" class="btn btn-warning">ĐĂNG NHẬP/LOGIN</button> -->
                                          </form>

                                          <div style=" font-size: 14px;">Chưa có tài khoản?<a href="index.php?act=dangky" style="color: #81ABDD; font-weight: 700; font-size: 14px;">Đăng ký
                                                      ngay</a></div>
                                    </div>
                                    <!-- <div class="register__input2" id="dm-2">
                                          <form action="" method="post">
                                                
                                                <input type="email" name="email" class="d-block" placeholder="Email">
                                                <input type="text" name="password" class="d-block" placeholder="Họ Và Tên">
                                                <input type="text" name="sdt" class="d-block" placeholder="Số điện thoại">
                                                <input type="text" name="diachi" class="d-block" placeholder="Địa chỉ">
                                                <input type="password" name="password" class="d-block" placeholder="Mật khẩu/Password">

                                                <input type="password" class="d-block" placeholder="Nhập lại mật khẩu/Re-Password">
                                                <span>Ảnh đại diện</span>
                                                <input type="file" class="d-block" name="anh" placeholder="Mã giới thiệu(nếu có)">

                                          </form>
                                          <button type="submit" name="dangky" class="btn btn-warning">ĐĂNG KÝ/SIGN UP</button>
                                          <div class="register__rule">
                                                <p>Bằng việc đăng ký, tôi đồng ý với Vinpearl về <a href="">Điều kiện điều khoản</a> và <a href="">Chính sách bảo mật</a>
                                                </p>
                                                <p>Đã có tài khoản? <a href="?page=dang-nhap">Đăng nhập</a></p>
                                          </div>
                                    </div> -->
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="./js/main.js"></script>
</body>

</html>