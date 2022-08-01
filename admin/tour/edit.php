<?php
if(is_array($onetour)){
    extract($onetour);
}
?>
<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts__title">
            <h5>QUẢN LÝ TOUR</h5>
        </div>
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" hidden value="<?= $onetour['tourid'] ?>" name="tourid" id="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên tour</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tourname"
                        value="<?= $onetour['tourname'] ?>" aria-describedby="emailHelp" placeholder="Nhập tên tour">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá người lớn</label>
                    <input type="number" name="gia_nl" class="form-control" id="exampleInputEmail1"
                        value="<?= $onetour['gia_nl'] ?>" aria-describedby="emailHelp" placeholder="">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá trẻ em</label>
                    <input type="number" name="giatre_em" class="form-control" id="exampleInputEmail1"
                        value="<?= $onetour['giatre_em'] ?>" aria-describedby="emailHelp" placeholder="">
                </div>
               
                <div class="form-group">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả</label>
                    <textarea name="mota" id="" cols="30" rows="10"><?=$onetour['mota']?></textarea>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày bắt đầu</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="start"
                        value="<?= $onetour['start'] ?>" aria-describedby="emailHelp" placeholder="">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày kết thúc</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="finish"
                        value="<?= $onetour['finish'] ?>" aria-describedby="emailHelp" placeholder="">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Hình ảnh</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="anh">
                    <img src="../img/tour/<?= $onetour['anh'] ?>" width="100" alt="">
                    <p style="color:red;">
                        <?= isset($error['anh']) ? $error['anh'] : '' ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Khách sạn</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="maks">
                        <option value="" selected></option>
                        <?php foreach($listkhachsan as $khachsan){
                                    extract($khachsan);
                                    if($khachsan['maks']==$onetour['maks']) echo '<option value="'.$maks.'" selected>'.$tenks.'</option>';
                                    else echo '<option value="'.$maks.'" >'.$tenks.'</option>';
                                }
                                ?>
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Khu du lịch</label>
                    <br>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="makdl">
                        <option value="" selected></option>
                        <?php foreach($listkhudulich as $kdl){
                                    extract($kdl);
                                    if($kdl['makdl']==$onetour['makdl']) echo '<option value="'.$makdl.'" selected>'.$tenkdl.'</option>';
                                    else echo '<option value="'.$makdl.'" >'.$tenkdl.'</option>';
                                }
                                ?>
                    </select>
                   

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Khu vực</label>
                    <br>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="makv">
                        <!-- <option value="" selected></option> -->
                        <?php foreach($listkhuvuc as $lkv){
                         extract($lkv);
                         if($lkv['makv']==$onetour['makv']) echo '<option value="'.$makv.'" selected>'.$tenkv.'</option>';
                         else echo '<option value="'.$makv.'" >'.$tenkv.'</option>';
                        }
                  ?>
                    </select>
                   

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Loại phòng</label>
                    <br>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="maloai">
                        <!-- <option value="" selected></option> -->
                        <?php foreach($listloaiphong as $lp){
                         extract($lp);
                         if($lp['maloai']==$onetour['maloai']) echo '<option value="'.$maloai.'" selected>'.$tenloai.'</option>';
                         else echo '<option value="'.$maloai.'" >'.$tenloai.'</option>';
                        }
                  ?>
                    </select>
                   

                </div>
                <input type="submit" name="themmoi" value="Cập nhật" class="btn btn-success">
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="danhSachKh.html"><button type="button" class="btn btn-info">Danh sách</button></a>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>