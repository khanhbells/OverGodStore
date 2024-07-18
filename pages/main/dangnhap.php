<?php
ob_start();
if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['email'] = $row_data['email'];
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        header("Location:index.php?quanly=giohang");
    }
    else{
        echo '<p style="color:red;">Email hoặc mật khẩu không đúng, vui lòng nhập lại</p>';
    }
}
ob_end_flush();
?>
<div class="wrapper">
        <h1>Đăng nhập khách hàng</h1>
        <form action="" autocomplete="off" method="POST">
            <div class="txt_field">
                <input type="text" required name="email" placeholder="Email...">
            </div>
            <div class="txt_field">
                <input type="password" required name="password" placeholder="Mật khẩu...">
            </div>
            <!-- <div class="pass">Quên mật khẩu?</div> -->
            <input style="margin-top: 20px;" type="submit" value="Đăng nhập" name="dangnhap">
            <div class="signup_link">
                Chưa có tài khoản? <a href="index.php?quanly=dangky">Đăng ký ngay</a>
            </div>
        </form>
    </div>