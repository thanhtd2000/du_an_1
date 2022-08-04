<?php
function viewcart(){
    global $img_path;
    $tong = 0;
                              foreach ($_SESSION['tour'] as $tour) {
                                    $hinh = $img_path . $tour[10];
                                    $total = $tour[2] * $tour[4] + $tour[3] * $tour[5];
                                    $tong += $total;
                                   
                                    echo '
                                    <div class="cart__infor">
                                    
                                    <h5>' . $tour[1] . '</h5>
                                    <p>' . $tour[6] . '</p>
                                    <div class=" d-flex justify-content-between">
                                          <p>Giá người lớn : </p>
                                          <span style="color: #f39f2d;font-size: 500;">' .  number_format($tour[2]) . ' đ</span>
                                    </div>
                                    <div class=" d-flex justify-content-between">
                                          <p>Giá trẻ em : </p>
                                          <span style="color: #f39f2d;font-size: 500;">' .  number_format($tour[3]) . ' đ</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                    <p>Số lượng người lớn</p>
                                    <span>' . $tour[4] . ' </span>
                              </div>
                              <div class="d-flex justify-content-between">
                                    <p>Số lượng trẻ em</p>
                                    <span>' . $tour[5] . ' </span>
                              </div>
                              </div>
                              
                                    ';
                                   
                                    
                              }
                              echo'
                              <div class="cart__totalValue d-flex justify-content-between">
                                    <p>Tổng tiền </p>
                                    <span>'. number_format($tong).' đ</span>
                              </div>
                              ';
                            }
function tongdonhang(){
   
    $tong = 0;
    foreach ($_SESSION['tour'] as $tour) {
        
        $total = $tour[2] * $tour[4] + $tour[3] * $tour[5];
        $tong += $total;
        
        
    }
    return $tong;
}
function bill_pttt(){
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
        if($bill['bill_pttt']=0){
            echo'Thẻ ATM / Tài khoản ngân hàng';
        }
        if($bill['bill_pttt']=1){
            echo'Thanh toán bằng mã QRCode';
        }
        if($bill['bill_pttt']=2){
            echo'Thanh toán trả góp 0% (Trong 6 tháng chỉ từ 2.500.000 đ/tháng)';
        }
    }
    
}
function insert_bill($bill_name,$bill_address,$bill_tell,$bill_email,$bill_pttt,$total,$ngaydathang) {
   $sql="INSERT INTO bill(bill_name, bill_adress, bill_tell, bill_email,bill_pttt,total,ngaydathang) VALUES ('$bill_name','$bill_address','$bill_tell','$bill_email','$bill_pttt','$total','$ngaydathang')";
   return pdo_execute_return_lastInsertId($sql);
} 
function insert_cart($iduser,$tourid ,$songuoilon,$ttien,$maloai,$sotreem ,$gianguoilon,$giatreem,$anh,$name,$idbill,$start,$finish,$maks) {
    $sql="INSERT INTO donhang(iduser, tourid, songuoilon, total,maloai,sotreem,gianguoilon,giatreem,anh,name,idbill,start,finish,maks) VALUES ('$iduser','$tourid' ,'$songuoilon','$ttien','$maloai','$sotreem' ,'$gianguoilon','$giatreem','$anh','$name','$idbill','$start','$finish','$maks')";
    return pdo_execute($sql);
 }  
 function loadone_bill($idbill)
 {
     $sql = "SELECT*FROM bill  where id = $idbill";
     $bill = pdo_query_one($sql);
     return $bill;
 }   
 function loadall_cart($idbill)
 {
     $sql = "SELECT*FROM donhang  where idbill = $idbill";
     $listbill = pdo_query($sql);
     return $listbill;
 }                                                                           
?>