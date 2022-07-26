<?php

require 'libs/tblphong.php';
 
// Thực hiện xóa, $_POST['id'] lấy từ input hidden name='id'
$idphong = isset($_POST['idphong']) ? (int)$_POST['Idphong'] : '';
if ($idphong){
    delete_phong($idphong);
}
 
// Trở về trang danh sách người dùng
header("location: phongtro.php");
