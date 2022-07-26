<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng Ký </title>
<style>
* {
margin: 0;
padding: 0;
}
body {
background-image: url('https://iweb.tatthanh.com.vn/pic/3/blog/images/image(4828).png');
background-size: cover;
background-position-y: -80px;
font-size: 16px;
}
.actionForm {
max-width: 600px;
margin: 0 auto;
display: block;
margin-top: 50px;
}
.actionForm input[type="text"],
.actionForm input[type="password"]
{
padding: 10px;
border: 1px solid #eee;
border-radius: 5px;
width: 100%;
}
.actionForm button[type="submit"] {
padding: 10px;
background: blue;
color: #fff;
border: 0;
outline: 0;
}
.h1{
    font-size: 25px;
    color: none;
    text-align: center;
    margin-bottom: 30px;
}
</style>

</head>

<body>

<form action="" method="post" class="actionForm">
<h1 class="h1"> ĐĂNG KÝ</h1>
<input type="text" placeholder="Tài Khoản" name="username"/><br><br>

<input type="password" placeholder="Mật khẩu" name="password"/><br><br>

<input type="password" placeholder="Nhập Lại Mật khẩu" name="password"/><br><br>

<input type="text" placeholder="email" name="Email"/><br><br>

<input type="text" placeholder="họ Tên" name="Hoten"/><br><br>
<input type="text" placeholder="ghi chú" name="Ghichu"/><br><br>
<input type="submit" class="form-submit" name ="btnd"  value="Đăng Ký">

</form>

<?php
    if(isset($_POST['btnd'])){
        $Username=$_POST['username'];
        $Password=$_POST['password'];
        $email=$_POST['Email'];
        $hoten=$_POST['Hoten'];
        $ghichu=$_POST['Ghichu'];
        $ketnoi=mysqli_connect('localhost','root',"",'xdquanlypt') or die("Kết nối database không thành công");
        $sql = "SELECT * FROM tblquanly WHERE username  = '$Username'";
        $result = mysqli_query($ketnoi, $sql) or die("Câu truy vấn sai!");
        if (!$Username || !$Password || !$email || !$hoten || !$ghichu ){echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;}
        if(mysqli_num_rows($result) > 0){
            echo "Tài khoản đã tồn tại";
            exit ();}
        $sql = "INSERT INTO tblquanly VALUES(null, '$Username','$Password','$email','$hoten','$ghichu')";
        $kq=mysqli_query($ketnoi,$sql);
        if($kq==true){
            echo "Đăng ký thành công ! Hãy vào trang <a href='http://localhost:86/phongit/UDQuanLy/Dangnhap.php'>Đăng Nhập</a>";
        }
        else
        echo "Đăng ký thất bại";
    }
    ?>

</body>

</html>