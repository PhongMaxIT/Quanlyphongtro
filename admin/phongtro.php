<?php
include("layout/header.php");
include("libs/tblphong.php");
$id = get_all_phong();

?>
<div class="container">
  <h2>Trang Phòng Trọ</h2>
  <p>Phòng Trọ</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>STT</th>
        <th>idPhong</th>
        <th>Tenphong</th>
        <th>Trangthai</th>
        <th>Hinhanh</th>
        <th>Chức Năng</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $stt = 0;
        if(!empty($id)){
            foreach($id as $item){
                $stt++;
        ?>
      <tr>
          <td><?php echo $stt;?></td>
          <td><?php echo $item['IdPhong']; ?></td>
          <td><?php echo $item['Tenphong']; ?></td>
          <td><?php echo $item['Trangthai']; ?></td>
          <td><img src ="<?php echo $item['Hinhanh']; ?>"width = "80" height="80" /></td>
          <form method="post" action="phong-delete.php">
          <td><input onclick="window.location='phong-edit.php?id=<?php echo $item['IdPhong']; ?>'" name="edit" id="" class="btn btn-success" type="button" value="Sửa">
          <input type="hidden" name="IdPhong" value="<?php echo $item['IdPhong']; ?>"/>
          <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete"  class="btn btn-success"value="Xóa"/></td>
        </form>
        
      </tr>
      <?php }//end forech
        } // end if
        ?>  
    </tbody>
  </table>
</div>
        <?php
include("layout/footer.php");
?>