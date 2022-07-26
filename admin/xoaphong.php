<?php
$ten=$_GET['x'];
$file_name=$_GET['Hinhanh'];
$cn=mysqli_connect('localhost','root',"",'xdquanlypt')or die("Kết nối database không thành công");
$sql="delete from tblphong where Idphong='$ten'";
$ketqua=mysqli_query($cn, $sql) or die("Câu truy vấn sai!");
if($ketqua==true)
{
     if($file_name!='')
     unlink("admin/image/".$file_name);
     header("Location:http://localhost:86/phongit/UDQuanLy/admin/phongtro.php");
}
?>