<?php
    ob_start();
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = md5($_POST['matkhau']);
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if($sql_dangky){
            $_SESSION['dangky'] = $tenkhachhang;
            $_SESSION['email'] = $email;
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
    }
    ob_end_flush();
?>
<p style="font-weight: bold; font-size: 35px; margin-left: 230px; ">Đăng ký thành viên</p>
<form action="" method="POST">
<table class="dangky" width="50%">
    <tr>
        <!-- <td>Họ và tên</td> -->
        <td><input required placeholder="Họ Và Tên..." type="text" size="50" name="hovaten"></td>
    </tr>
    <tr>
        <!-- <td>Email</td> -->
        <td><input required placeholder="Email..." type="text" size="50" name="email"></td>
    </tr>
    <tr>
        <!-- <td>Điện thoại</td> -->
        <td><input required placeholder="Điện thoại..." type="text" size="50" name="dienthoai"></td>
    </tr>
    <tr>
        <!-- <td>Địa chỉ</td> -->
        <td><input required placeholder="Địa chỉ" type="text" size="50" name="diachi"></td>
    </tr>
    <tr>
        <!-- <td>Mật khẩu</td> -->
        <td><input required placeholder="Mật khẩu" type="password" size="50" name="matkhau"></td>
    </tr>
    <tr>
        <td><input type="submit" name="dangky" value="ĐĂNG KÝ"></td>
    </tr>
</table>
<div class="sign">
<p>Đã có tài khoản? <a href="index.php?quanly=dangnhap">Đăng nhập ngay</a></p>
</div>
</form>