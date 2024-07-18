<?php
session_start();
include('config/config.php');
if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
    }
    else{
        echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại");</script>';
        header("Location:login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css"  href="css/stylelogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <h1>Đăng nhập</h1>
        <form action="" autocomplete="off" method="POST">
            <div class="txt_field">
                <input type="text" required name="username">
                <span></span>
                <label>Tên đăng nhập</label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password">
                <span></span>
                <label>Mật khẩu</label>
            </div>
            <div class="pass">Quên mật khẩu?</div>
            <input type="submit" value="Đăng nhập" name="dangnhap">
            <div class="signup_link">
            </div>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>
</html>