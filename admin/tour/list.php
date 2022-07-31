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
                        <th scope="col">Mã tour</th>
                        <th scope="col">Tên tour</th>
                        <th scope="col">Giá Người Lớn</th>
                        <th scope="col">Giá trẻ em</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Ngày bắt đầu</th>
                        <th scope="col">Ngày kết thúc</th>
                        <th scope="col">Khách sạn</th>
                        <th scope="col">Khu du lịch</th>
                        <th scope="col">Khu vực</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listtour2 as $tour) {
                        extract($tour);
                        echo '<tr>
                        <th scope="row"><input id="check" type="checkbox"></th>
                        <td>' . $tourid . '</td>
                        <td>' . $tourname . '</td>
                        <td>' . $gia_nl . '</td>
                        <td>' . $giatre_em . '</td>
                        <td><!--' . $mota . '--></td>
                        <td>' . $start . '</td>
                        <td>' . $finish . '</td>
                        <td>' . $maks . '</td>
                        <td>' . $makdl . '</td>
                        <td>' . $makv . '</td>
                        <td><img src="../img/tour/' . $anh . '" width="100" alt=""></td>
                        <td>
                            <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;"
                                href="index.php?act=suatour&&tourid=' . $tourid . '">Sửa</a>
                            <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;"
                                
                                href="index.php?act=xoatour&&tourid=' . $tourid . '" onclick="return confirm("bạn có muốn xoá")">Xoá</a>
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
                            <li class="page-item"><a class="page-link" href="index.php?act=listtour&per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a></li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link" style="color: black;" href=""><strong><?= $num ?></a></strong></li>
                        <?php endif ?>
                    <?php endfor ?>

                </ul>
            </nav>
            <button type="button" id="checkAll" class="btn btn-secondary">Chọn tất cả</button>
            <button type="button" id="uncheckAll" class="btn btn-success">Bỏ chọn tất cả</button>
            <button type="button" class="btn btn-danger">Xoá các mục đã chọn</button>
            <a href="index.php?act=addtour"><button type="button" class="btn btn-info">Nhập thêm</button></a>

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