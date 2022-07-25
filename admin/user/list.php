<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ TOUR</h5>
        </div>
        <div class="addProducts_form">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã user</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Họ Tên</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Vai trò(1:ADMIN;0:KH;2:NV)</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listuser as $user) {
                        extract($user);
                        echo '<tr>
                        <th scope="row"><input id="check" type="checkbox"></th>
                        <td>' . $iduser . '</td>
                        <td>' . $password . '</td>
                        <td>' . $diachi . '</td>
                        <td>' . $hoten . '</td>
                        <td><img src="../img/user/' . $anh . '" width="100" alt=""></td>
                        <td>' . $sdt . '</td>
                        <td>' . $email . '</td>
                        <td>' . $vaitro . '</td>
                        <td>
                            <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;"
                                href="index.php?act=suauser&&iduser=' . $iduser . '">Sửa</a>
                            <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;"
                                
                                href="index.php?act=xoauser&&iduser=' . $iduser . '" onclick="return confirm("bạn có muốn xoá")">Xoá</a>
                        </td>

                    </tr>';
                    }
                    ?>

                </tbody>
            </table>

            <button type="button" id="checkAll" class="btn btn-secondary">Chọn tất cả</button>
            <button type="button" id="uncheckAll" class="btn btn-success">Bỏ chọn tất cả</button>
            <button type="button" class="btn btn-danger">Xoá các mục đã chọn</button>
            <a href="index.php?act=adduser"><button type="button" class="btn btn-info">Nhập thêm</button></a>

        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
    checkAll = document.getElementById('checkAll');
    uncheckAll = document.getElementById('uncheckAll');
    checkAll.onclick = function() {
        check = document.getElementById('check');
        array = document.querySelectorAll("input");
        for (var i = 0; i < array.length; i++) {
            array[i].checked = true;
        }
    }
    uncheckAll.onclick = function() {
        check = document.getElementById('check');
        array = document.querySelectorAll("input");
        for (var i = 0; i < array.length; i++) {
            array[i].checked = false;
        }
    }
</script>