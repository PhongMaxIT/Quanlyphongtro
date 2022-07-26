<?php 
 include("layout/header.php");
  ?>
<title>Quản lý thư viện</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <?php
 $conn = mysqli_connect('localhost','root',"",'xdquanlypt') or die ('không thể kết nối sql');
 $kq = "select * from tblphong";
 $kq_con=mysqli_query($conn,$kq);
 $rows = $kq_con->fetch_all(MYSQLI_ASSOC);
 ?>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Thêm Trọ Mới</h1>
        <label for=""> ID Phòng</label>
        <input type="text"name='Idphong'class="form-control"  value="">
        <label for=""> Tên Phòng</label>
        <input type="text"name='Tenphong'class="form-control"  value="">
        <label for=""> Trạng thái</label>
        <input type="text"name='Trangthai'class="form-control"  value="">
        <label for=""> Hình Ảnh</label>
        <input type="file"name='Hinhanh'class="form-control"  value="">
          <!-- <?php foreach ($rows as $key => $value) {?>
            <option value = "<?php echo $value['id']?>"> <?php echo $value['IdPhong']?>   </option>
            <?php } ?> -->
        </select>
       

        <br>
        <input type="submit" name ="btn" class="btn btn-primary"value="Thêm mới Trọ">
    </form>
    <?php
    if(isset($_POST['btn'])){
        $ma=$_POST['Idphong'];
        $ten=$_POST['Tenphong'];
        $trangthai=$_POST['Trangthai'];
        $file=$_FILES['Hinhanh'];
        $file_name=$file['name'];
        $conn = mysqli_connect('localhost','root',"",'xdquanlypt') or die ('không thể kết nối sql');
        $kq = " select * from tblphong where Idphong='$ma'";
        $kq_con=mysqli_query($conn,$kq);
        $dem=mysqli_num_rows($kq_con);
        if($dem > 0){
            echo "ID Phòng Đã Tồn Tại"; exit();
        }
        else{
            $sql = "INSERT INTO tblphong VALUES('$ma','$ten','$trangthai','image/$file_name')";
            $result=mysqli_query($conn,$sql);
        if($result == true){
             if($file_name!=""){
                 move_uploaded_file($file['tmp_name'],'image/'.$file_name);
             }
            echo "Thêm Sản Phẩm Thành Công !Hãy vào <a href='phongtro.php'>Danh sách phòng </a> để xem lại";
        }
        }
    }
    ?>
    <?php
 include("layout/footer.php");
  ?>
