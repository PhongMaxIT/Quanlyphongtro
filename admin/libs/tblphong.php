<?php
include('ketnoi.php');
//lấy về tất cả user
function get_all_phong()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
// Câu truy vấn lấy tất cả user
    $sql = "select * from tblphong";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
  
    // Trả kết quả về
    return $result;
}
 // Hàm lấy user theo user_id
 function get_tblphong_by_Idphong($idphong)
 {    
 // Gọi tới biến toàn cục $conn
     global $conn;
 // Câu truy vấn lấy tất cả sinh viên
     $sql = "select * from tblphong where Idphong = $idphong";
      
     // Thực hiện câu truy vấn
     $query = mysqli_query($conn, $sql);
      
     // Mảng chứa kết quả
     $result = array();
      
     // Nếu có kết quả thì đưa vào biến $result
     if (mysqli_num_rows($query) > 0){
         $row = mysqli_fetch_assoc($query);
         $result = $row;
     }
      
     // Trả kết quả về
     return $result;
 }
 // Hàm sửa user
function edit_phong($idphong,$tenphong, $trangthai, $hinhanh)
{
       
   // Chống SQL Injection
   
   $idphong = addslashes($idphong);
   $tenphong = addslashes($tenphong);
   $trangthai=addslashes($trangthai);
   $hinhanh = addslashes($hinhanh);
  
   // Câu truy vấn thêm
   $sql = "
           UPDATE tblphong SET
           Idphong = '$idphong',            
           Tenphong='$tenphong',
           Trangthai = '$trangthai',
           Hinhanh = '$hinhanh'        
           WHERE Idphong = $idphong
           ";

// Gọi tới biến toàn cục $conn
   global $conn;    
// Thực hiện câu truy vấn
   $query = mysqli_query($conn, $sql);    
   return $query;
}
// Hàm xóa user
function delete_phong($idphong)
{
    // Gọi tới biến toàn cục $conn
   global $conn;   
   $sql = "
           DELETE FROM tblphong
           WHERE Idphong= $idphong
   ";
    
   // Thực hiện câu truy vấn
   $query = mysqli_query($conn, $sql);
    
   return $query;
}

