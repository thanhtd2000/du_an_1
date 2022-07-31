<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ KHÁCH SẠN</h5>
        </div>
        <?php if (isset($_GET['message'])) : ?>
            <h4 style="color: red;"><?= $_GET['message'] ?></h4>
        <?php endif ?>
        <div class="addProducts_form">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mã phòng</th>
                        <th scope="col">Tên phòng</th>
                        <th scope="col">Mã khách sạn</th>
                        <th scope="col">Mã loại phòng</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listphong as $phong) {
                        extract($phong);
                        echo '<tr>
                                        <th scope="row"><input id="check" type="checkbox"></th>
                                        <td>' . $maphong . '</td>
                                        <td>' . $tenphong . '</td>
                                        <td>' . $maks . '</td>
                                        <td>' . $tenloai . '</td>
                                        <td><img src="../img/phong/' . $anh . '" width="100" alt=""></td>
                                        <td>
                                              <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;" href="index.php?act=suaphong&&maphong=' . $maphong . '">Sửa</a>
                                              <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;"  href="index.php?act=xoaphong&&maphong=' . $maphong . '" onclick="return confirm("bạn có muốn xoá")">Xoá</a>
                                        </td>
                                        
                                  </tr>';
                    }
                    ?>

                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php for ($num = 1; $num <= $ttpage; $num++) : ?>
                        <?php if ($num != $current_page) : ?>
                            <li class="page-item"><a class="page-link" href="index.php?act=phong&per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a></li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link" style="color: black;" href=""><strong><?= $num ?></a></strong></li>
                        <?php endif ?>
                    <?php endfor ?>
                
                </ul>
            </nav>
            <button type="button" id="checkAll" class="btn btn-secondary">Chọn tất cả</button>
            <button type="button" id="uncheckAll" class="btn btn-success">Bỏ chọn tất cả</button>
            <button type="button" class="btn btn-danger">Xoá các mục đã chọn</button>
            <a href="index.php?act=addphong"><button type="button" class="btn btn-info">Nhập thêm</button></a>

        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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