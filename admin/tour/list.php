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
                                          <th scope="col">Giá</th>
                                          <th scope="col">Mô tả</th>
                                          <th scope="col">Ngày bắt đầu</th>
                                          <th scope="col">Ngày kết thúc</th>
                                          <th scope="col">Khách sạn</th>
                                          <th scope="col">Khu du lịch</th>
                                          <th scope="col">Ảnh</th>
                                          <th scope="col">Khu vực</th>
                                          <th scope="col"></th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          <th scope="row"><input id="check" type="checkbox"></th>
                                          <td>1</td>
                                          <td>2</td>
                                          <td>3</td>
                                          <td>4</td>
                                          <td>5</td>
                                          <td>6</td>
                                          <td>6</td>
                                          <td>7</td>
                                          <td>7</td>
                                          <td>
                                                <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;" href="sua.php?id=<?= $dm['id'] ?>">Sửa</a>
                                                <a style="color: #59804e; border: 1px solid #59804e; border-radius: 3px;padding: 4px;font-weight: 500;" onclick="return confirm('Bạn có muốn xoá không ?')" href="xoa.php?id=<?= $dm['id'] ?>">Xoá</a>
                                          </td>
                                          
                                    </tr>
                              </tbody>
                        </table>

                        <button type="button" id="checkAll" class="btn btn-secondary">Chọn tất cả</button>
                        <button type="button" id="uncheckAll" class="btn btn-success">Bỏ chọn tất cả</button>
                        <button type="button" class="btn btn-danger">Xoá các mục đã chọn</button>
                        <a href="index.php?act=addtour"><button type="button" class="btn btn-info">Nhập thêm</button></a>

                  </div>
            </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
      <script>
            checkAll = document.getElementById('checkAll');
            uncheckAll= document.getElementById('uncheckAll');
            checkAll.onclick= function(){
                  check = document.getElementById('check');
                  array = document.querySelectorAll("input");
                  for(var i= 0;i<array.length;i++){
                        array[i].checked = true;
                  }
            }
            uncheckAll.onclick= function(){
                  check = document.getElementById('check');
                  array = document.querySelectorAll("input");
                  for(var i= 0;i<array.length;i++){
                        array[i].checked = false;
                  }
            }
            

      </script>