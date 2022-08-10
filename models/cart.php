<?php
function viewcart(){
    $tong = 0;
    $tong1 = 0;
    $tong2 = 0;
                              foreach ($_SESSION['tour'] as $tour) {
                                    
                                    $total = $tour[2] * $tour[4] + $tour[3] * $tour[5];
                                    $tong1 += $total;
                                   
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
                              foreach ($_SESSION['khachsan'] as $ks) {
                                    
                                $total1 = $ks[3] ;
                                $tong2 += $total1;
                               
                                echo '
                                <div class="cart__infor">
                                
                                <h5>' . $ks[0] . '</h5>
                                <div class="d-flex justify-content-between">
                                                                  <p>loại phòng</p>
                                                                  <span>' . $ks[1] . ' </span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                  <p>Tên phòng phòng</p>
                                                                  <span>' . $ks[2] . ' </span>
                                                            </div>
                                <div class=" d-flex justify-content-between">
                                      <p>Giá phòng : </p>
                                      <span style="color: #f39f2d;font-size: 500;">' .  number_format($ks[3]) . ' đ/đêm </span>
                                </div>
                               
                               
                          </div>
                          
                                ';
                               
                                
                          }
                              echo'
                              <div class="cart__totalValue d-flex justify-content-between">
                                    <p>Tổng tiền </p>
                                    <span>'. number_format($tong=$tong1+$tong2).' đ</span>
                              </div>
                              ';
                            }
function tongdonhang(){
   
    
    $tong = 0;
    $tong1 = 0;
    $tong2 = 0;
    foreach ($_SESSION['tour'] as $tour) {
        
        $total1 = $tour[2] * $tour[4] + $tour[3] * $tour[5];
        $tong1 += $total1;
        
        
    }
    foreach ($_SESSION['khachsan'] as $ks) {
        
        $total2 = $ks[3];
        $tong2 += $total2;
        
        
    }
    return $tong=$tong1+$tong2;
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
 function insert_cart_ks($iduser,$tongtien,$maloai,$anh,$idbill,$maks,$tenphong,$giaphong) {
    $sql="INSERT INTO donhang(iduser,total, maloai,anh,idbill,maks,tenphong,giaphong) VALUES ('$iduser','$tongtien','$maloai','$anh','$idbill','$maks','$tenphong','$giaphong')";
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