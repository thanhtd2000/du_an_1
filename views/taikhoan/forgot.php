<body>
    <div class="register">
        <div class="register__content">
            <div class="row">
                <div class="col-8">
                    <div class="img"></div>
                </div>
                <div class="col-4">
                    <div class="register__img d-flex">
                        <img src="./img/logo/logo cochu.png" alt="">
                    </div>
                    <div class="register__forgotPass">
                        <div class="back">
                            <a href="index.php?act=dangnhap"><i class="fa-solid fa-angles-left"></i></a>
                            <h3>Quên mật khẩu</h3>
                            <h3 style="padding-bottom: 30px;">Forgot password</h3>
                            <?php if (isset($message)) : ?>
                                <div class="card-body">
                                    <p style="color:rgb(209, 76, 76);"><?= $message ?></p>
                                </div>
                            <?php endif ?>
                            <form action="" method="post">
                                <label for="">Vui lòng cung cấp email đăng nhập</label>
                                <input class="mail" type="email" name="email" placeholder="Email">
                                <button type="submit" name="forgot" class="btn btn-warning">GỬI/SEND</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
<!-- 