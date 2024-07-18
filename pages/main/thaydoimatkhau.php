<?php
if(isset($_POST['doimatkhau'])){
    $taikhoan = $_POST['email'];
    $matkhau_cu = md5($_POST['password_cu']);
    $matkhau_moi = md5($_POST['password_moi']);
    $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
        $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
        echo '<p style="color:green;">Mật khẩu đã được thay đổi</p>';
    }
    else{
        echo '<p style="color:red;">Email hoặc Mật khẩu cũ không đúng, vui lòng nhập lại</p>';
    }

}
?>
<form action="" autocomplete="off" method="POST">
<p style="font-weight: bold; font-size: 35px; margin-left: 230px; " >Đổi mật khẩu</p>
            <div class="txt_field">
                <input type="text" required name="email" placeholder="Email">
                <span></span>
                <!-- <label>Tên đăng nhập</label> -->
            </div>
            <div class="txt_field">
                <input type="password" required name="password_cu" placeholder="Mật khẩu cũ">
                <span></span>
                <!-- <label>Mật khẩu cũ</label> -->
            </div>
            <div class="txt_field">
                <input type="password" required name="password_moi" placeholder="Mật khẩu mới">
                <span></span>
                <!-- <label>Mật khẩu mới</label> -->
            </div>
            <!-- <div class="pass">Quên mật khẩu?</div> -->
            <input style="margin-top: 15px;" type="submit" value="Đổi mật khẩu" name="doimatkhau">
</form>