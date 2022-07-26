<?php 
require 'layout/header.php';
?>
<title>Quản Lý Phòng Trọ</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Cambria", sans-serif}
</style>

  <div class="container">
    <h1> Danh sách Thuê Trọ</h1>
    <table class="table table-bordered">
            <tr>
                <th>ID Thuê Phòng</th>
                <th>user ID</th>
                <th>ID Phòng</th>
                <th>Giá Phòng</th>
                <th>Ngày Thuê</th>
                <th>Tiền Đặt Cọc</th>
                <th>Ngày Trả Phòng</th>
</tr>
</thread>
    <?php
$conn = mysqli_connect('localhost','root',"",'xdquanlypt') or die ('không thể kết nối sql');
$sql = " select * from tblthuephong";
$result=mysqli_query($conn,"SELECT * FROM tblthuephong ") or die ("Câu lệnh truy vấn sai");
   while($row = mysqli_fetch_assoc($result))
   {?>
   <tr>
       
       <td><?php echo $row['IdThuephong'];?></td>
       <td><?php echo $row['userID'];?></td>
       <td><?php echo $row['IdPhong'];?></td>
       <td><?php echo $row['Giaphong'];?></td>
       <td><?php echo $row['Ngaythue'];?></td>
       <td><?php echo $row['Tiendatcoc'];?></td>
       <td><?php echo $row['Ngaytraphong'];?></td>
     </td>
    </tr>
   <?php
   }
   ?>
   </table>
   <!-- <a href="muon_sach.php"class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;Thêm mới</a> -->
<?php require 'layout/footer.php'; ?>