<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ ĐƠN HÀNG</h5>
        </div>
        <?php if (isset($_GET['message'])) : ?>
            <h4 style="color: red;"><?= $_GET['message'] ?></h4>
        <?php endif ?>
        <div class="addProducts_form">
            <h6>ĐƠN HÀNG TOUR</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Khách sạn</th>
                        <th>Hạng Phòng</th>
                        <th>Tour</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listhd2 as $dh) : ?>
                        <?php extract($dh) ?>
                        <?php if ($ldh == 0) : ?>
                            <tr>
                                <td><?= $madh ?></td>
                                <td><?= $maks ?></td>
                                <td><?= $maloai ?></td>
                                <td><?= $name ?></td>
                                <td><?= $start ?></td>
                                <td><?= $finish ?></td>
                                <td><?= $ngaydathang ?></td>
                                <td><?= number_format($total) ?> VNĐ</td>
                                
                                <td style="color: green;"><?= $bill_status ?></td>
                                <td>
                                    <a style="color: #FF7F50; border: 1px solid #59804e; border-radius: 3px;padding: 4px;display: contents;font-weight: 500;" href="index.php?act=suadh&&id=<?= $id ?>&&bill_status=Đã xác nhận">Xác nhận</a>

                                </td>
                                <td><a style="color: red; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500; display: contents;" href="index.php?act=suadh&&id=<?= $id ?>&&bill_status=Đã huỷ">Huỷ bỏ</a></td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <h6>ĐƠN HÀNG KHÁCH SẠN</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Khách sạn</th>
                        <th>Hạng Phòng</th>
                        <th>Tên phòng</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listhd2 as $dh) : ?>
                        <?php extract($dh) ?>
                        <?php if ($ldh == 1) : ?>
                            <tr>
                                <td><?= $madh ?></td>
                                <td><?= $maks ?></td>
                                <td><?= $maloai ?></td>
                                <td><?=$tenphong?></td>
                                <td><?=$start?></td>
                                <td><?=$finish?></td>
                                <?php $today = date("Y/m/d");
                                    if (strtotime($today) > strtotime($finish)) :?>
                                    <?php update_stt($finish,$idbill)?>
                                    <?php endif ?>
                                <td><?= $ngaydathang ?></td>
                                <td><?= number_format($total) ?> VNĐ</td>
                                <td style="color: green;"><?= $bill_status ?></td>
                                <td>
                                    <a style="color: #FF7F50; border: 1px solid #59804e; border-radius: 3px;padding: 4px;display: contents;font-weight: 500;" href="index.php?act=suadh&&id=<?= $id ?>&&bill_status=Đã xác nhận">Xác nhận</a>

                                </td>
                                <td><a style="color: red; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500; display: contents;" href="index.php?act=suadh&&id=<?= $id ?>&&bill_status=Đã huỷ">Huỷ bỏ</a></td>
                                <td><a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500; display: contents;" href="index.php?act=suadh&&id=<?= $id ?>&&bill_status=Hoàn thành">Hoàn thành</a></td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php for ($num = 1; $num <= $ttpage; $num++) : ?>
                        <?php if ($num != $current_page) : ?>
                            <li class="page-item"><a class="page-link" href="index.php?act=donhang&per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a></li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link" style="color: black;" href=""><strong><?= $num ?></a></strong></li>
                        <?php endif ?>
                    <?php endfor ?>

                </ul>
            </nav>
            <button type="button" id="checkAll" class="btn btn-secondary">Chọn tất cả</button>
            <button type="button" id="uncheckAll" class="btn btn-success">Bỏ chọn tất cả</button>
            <button type="button" class="btn btn-danger">Xoá các mục đã chọn</button>
            <a href="index.php?act=adddonhang"><button type="button" class="btn btn-info">Nhập thêm</button></a>

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