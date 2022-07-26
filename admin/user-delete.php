<?php

require 'libs/tblquanly.php';
require 'libs/tblphong.php';
 
// Thực hiện xóa, $_POST['id'] lấy từ input hidden name='id'
$userID = isset($_POST['userID']) ? (int)$_POST['userID'] : '';
if ($userID){
    delete_user($userID);
}
 
// Trở về trang danh sách người dùng
header("location: userlist.php");

 
// Thực hiện xóa, $_POST['id'] lấy từ input hidden name='id'
$idphong = isset($_POST['Idphong']) ? (int)$_POST['Idphong'] : '';
if ($idphong){
    delete_user($idphong);
}
 
// Trở về trang danh sách người dùng
header("location: userlist.php");
