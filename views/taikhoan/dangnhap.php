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
                              <?php if (isset($message)) : ?>
                                    <div class="card-body">
                                          <h5 style="color:rgb(209, 76, 76);"><?= $message ?></h5>
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
                                                      <div><a href="index.php?act=quenmk" style="color:#000;">Quên mật khẩu</a></div>
                                                </div>
                                                <input type="submit" name="dangnhap" class="btn btn-warning" value="ĐĂNG NHẬP/LOGIN">
                                                <!-- <button type="submit" name="login" class="btn btn-warning">ĐĂNG NHẬP/LOGIN</button> -->
                                          </form>

                                          <div style=" font-size: 14px;">Chưa có tài khoản?<a href="index.php?act=dangky" style="color: #81ABDD; font-weight: 700; font-size: 14px;">Đăng ký
                                                      ngay</a></div>
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