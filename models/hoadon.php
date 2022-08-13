<?php
function load_allhd($iduser)
{
    $sql = "SELECT a.*,b.* FROM donhang as a inner join bill as b on a.idbill = b.id where iduser =$iduser ORDER BY madh DESC ";
    $listhd = pdo_query($sql);
    return $listhd;
}
function load_allhd2($item_per_page, $offset)
{
    $sql = "SELECT a.*,b.* FROM donhang as a inner join bill as b on a.idbill = b.id ORDER BY madh DESC limit $item_per_page offset $offset";
    $listhd2 = pdo_query($sql);
    return $listhd2;
}
function delete_dh($madh, $id)
{
    $sql = "DELETE FROM donhang WHERE madh=$madh";
    $sql = "DELETE FROM bill WHERE id=$id";
    pdo_execute($sql);
}
function countdh($tourid)
{
    $sql = "SELECT COUNT (tourid) FROM donhang WHERE tourid = $tourid";
    pdo_execute($sql);
}
function edit_bill($id, $bill_status)
{
    $sql = "UPDATE bill SET id='$id',bill_status='$bill_status' WHERE id = $id";
    pdo_execute($sql);
}
function checktenphong($tenphong)
{
    $sql = "SELECT*FROM donhang as a join bill as b on a.idbill = b.id  WHERE tenphong='$tenphong' and (bill_status='Đã xác nhận' or bill_status='Đã đặt thành công')";
    $checktp = pdo_query_one($sql);
    return $checktp;
}



function update_stt($finish)
{    $sql = "SELECT*FROM donhang where finish=$finish";
    $today = date("Y/m/d");
    if (strtotime($today) > strtotime($finish)){
    $sql = "UPDATE bill SET bill_status='Hoàn thành' where bill_status='Đã xác nhận'";
    pdo_execute($sql);
} else{
    $sql = "UPDATE bill SET bill_status='Đã xác nhận' where bill_status='Hoàn thành' ";
    pdo_execute($sql);
}
}

