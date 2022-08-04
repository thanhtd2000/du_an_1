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
                                    <!-- <span class="item active" data-this="dm-1">Đăng nhập/Login</span> -->
                                    <span class="item active" data-this="dm-2">Đăng ký/Register</span>
                              </div>
                              <div class="body">
                                    <!-- <div class="register__input active" id="dm-1">
                                          <form action="" method="post">
                                                <input type="text" class="d-block" placeholder="Email">
                                                <input type="password" class="d-block" placeholder="Mật khẩu/Password">
                                                <div class="check d-flex">
                                                      <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ghi nhớ
                                                                  mật khẩu</label>
                                                      </div>
                                                      <div><a href="quenMatKhau.html" style="color:#000;">Quên mật khẩu</a></div>
                                                </div>
                                                <button type="submit" name="login" class="btn btn-warning">ĐĂNG NHẬP/LOGIN</button>
                                          </form>

                                          <div style=" font-size: 14px;">Chưa có tài khoản?<a href="" style="color: #81ABDD; font-weight: 700; font-size: 14px;">Đăng ký
                                                      ngay</a></div>
                                    </div> -->
                                    <div class="register__input2 active" id="dm-2">
                                          <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">

                                                <input type="email" name="email" class="d-block" placeholder="Email">
                                                <span style="color:red"><?= $error['email'] ?></span>
                                                <input type="text" name="hoten" class="d-block" placeholder="Họ và tên">
                                                <span style="color:red"><?= $error['hoten'] ?></span>
                                                <input type="text" name="sdt" class="d-block" placeholder="Số điện thoại">
                                                <span style="color:red"><?= $error['sdt'] ?></span>
                                                <input type="text" name="diachi" class="d-block" placeholder="Địa chỉ">
                                                <span style="color:red"><?= $error['diachi'] ?></span>
                                                <input type="password" name="password" class="d-block" placeholder="Mật khẩu/Password">
                                                <span style="color:red"><?= $error['pass'] ?></span>

                                                <input type="password" name="passwordcf" class="d-block" placeholder="Nhập lại mật khẩu/Re-Password">
                                                <span style="color:red"><?= $error['passcf'] ?></span>
                                                <br>
                                                <span>Ảnh đại diện</span>
                                                <input type="file" name="anh" class="d-block" placeholder="Mã giới thiệu(nếu có)">
                                                <span style="color:red"><?= $error['anh'] ?></span>
                                                <input type="submit" name="dangky" class="btn btn-warning" value="Đăng ký">
                                          </form>

                                          <!-- <button type="submit" name="dangky" class="btn btn-warning">ĐĂNG KÝ/SIGN UP</button> -->
                                          <div class="register__rule">
                                                <p>Bằng việc đăng ký, tôi đồng ý với Vinpearl về <a href="">Điều kiện điều khoản</a> và <a href="">Chính sách bảo mật</a>
                                                </p>
                                                <p>Đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập</a></p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

      <script src="./js/owl-carousel/owl.carousel.min.js"></script>
      <script src="./js/main.js"></script>
</body>

</html>