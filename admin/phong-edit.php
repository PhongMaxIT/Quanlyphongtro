<?php
require 'libs/tblphong.php';
$idphong = isset($_GET['id']) ? (int)$_GET['id'] : '';
$data = array();
$errors = array();
if($user_id){
    $data = get_tblphong_by_idphong($idphong);
}
//nếu nhấn nút Cập nhật
if (!empty($_POST['btnCapNhat'])){
    echo "Hello";
    //Lấy dữ liệu từ form
    $idphong  = isset($_POST['Idphong'])?addslashes($_POST['Idphong']):'';   
    $tenphong   = isset($_POST['Tenphong'])?addslashes(md5($_POST['Tenphong'])):'';
    $trangthai   = isset($_POST['Trangthai'])?addslashes($_POST['Trangthai']):'';
    $hinhanh  = isset($_POST['Hinhanh'])?addslashes($_POST['Hinhanh']):'';
   
    $data['Idphong'] = $idphong;
    $data['Tenphong'] =$tenphong;
    $data['Trangthai'] = $trangthai;
    $data['Hinhanh'] =  $hinhanh;
    // Validate
    if (empty($data['Idphong'])){
        $errors['Idphong'] = 'Bạn chưa nhập Idphong';
    }     
    
    if (empty($data['Tenphong'])){
        $errors['Tenphong'] = 'Bạn chưa nhập Tên phòng';
    }
    if (empty($data['Trangthai'])){
        $errors['Trangthai'] = 'Bạn chưa nhập trạng thái';
    }
    if (empty($data['Hinhanh'])){
        $errors['Hinhanh'] = 'Bạn chưa nhập hình ảnh';
    }
    
    
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_phong($idphong,$data['Idphong'],$data['Tenphong'],$data['Trangthai'], $data['Hinhanh']);
        header("location: phongtro.php");
    }
}
?>
<?php require 'layout/header.php'; ?>
    <div class="container">
  <h1>Trang Sửa Phòng Trọ</h1>
  <div class="form-group">
  <form  method="POST"> 
  <input type="hidden" name="token" value="<?php echo $token ?>
    <div class="form-group">
      <label for="">Idphong</label>
      <input type="text" value="<?php echo !empty($data['Idphong']) ? $data['Idphong'] : ''; ?>"
        class="form-control" name="Idphong" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Tên phòng</label>
      <input type="text" value="<?php echo !empty($data['Tenphong']) ? $data['Tenphong'] : ''; ?>"

        class="form-control" name="Tenphong" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Trạng Thái</label>
      <input type="text"value="<?php echo !empty($data['Trangthai']) ? $data['Trangthai'] : ''; ?>"
        class="form-control" name="Trangthai" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
      <label for="">Hình Ảnh</label>
      <input type="text"value="<?php echo !empty($data['Hinhanh']) ? $data['Hinhanh'] : ''; ?>"

        class="form-control" name="Hinhanh" id="" aria-describedby="helpId" placeholder="">
    </div>
   
    </div>
    <input type="submit" class="btn btn-primary" name = "btnCapNhat" > 
    

   </form>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php
require("layout/footer.php");
?>