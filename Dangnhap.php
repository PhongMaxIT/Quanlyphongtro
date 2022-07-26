<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng Nhập </title>
<style>
* {
margin: 0;
padding: 0;
}
body{
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
<h1 class="h1"> ĐĂNG NHẬP</h1>
<input type="text" placeholder="Tài Khoản" name="username"/><br><br>

<input type="password" placeholder="Mật khẩu" name="password"/><br><br>


<input type="submit" class="form-submit" name ="btn"  value="Đăng Nhập">
<DIV>
<?php
    if(isset($_POST['btn']))
    {
        $Username=$_POST['username'];
        $Password=$_POST['password'];
        $ketnoi=mysqli_connect('localhost','root',"",'xdquanlypt');
        $sql=" select * from tblquanly where username='$Username'";
        $ketqua=mysqli_query($ketnoi,$sql);
        $dem=mysqli_num_rows($ketqua);
        if($dem==0) {
            echo "Tài khoản không tồn tại";
        }
        else
        {
            $row=mysqli_fetch_assoc($ketqua);
            if($Password == $row['password'])
            {
                $_SESSION['username']=$Username;
                header("Location: admin/phongtro.php");
              
            }
            else
            echo 'Sai mật khẩu';
        }
    }
 ?>
 </DIV>

</form>


</body>

</html>

