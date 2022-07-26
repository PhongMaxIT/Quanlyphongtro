<?php
include("layout/header.php");
include("libs/tbldiennuoc.php");
$id = get_all_diennuoc();

?>
<div class="container">
  <h2>Trang Điện Nước</h2>
  <p>Thông Tin</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>STT</th>
        <th>ID Phòng</th>
        <th>Từ Ngày</th>
        <th>Đến Ngày</th>
        <th>Chỉ Số Cũ</th>
        <th>Chỉ Số Mới</th>
        <th>Đơn Giá</th>
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
          <td><?php echo $item['IdDiennuoc']; ?></td>
          <td><?php echo $item['IdThuephong']; ?></td>
          <td><?php echo $item['Tungay']; ?></td>
          <td><?php echo $item['Denngay']; ?></td>
          <td><?php echo $item['Chisocu']; ?></td>
          <td><?php echo $item['Chisomoi']; ?></td>
          <td><?php echo $item['Dongia']; ?></td>
      </tr>
      <?php }//end forech
        } // end if
        ?>  
    </tbody>
    </tbody>
  </table>
</div>
        <?php
include("layout/footer.php");
?>