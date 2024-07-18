<!------------------------- menu---------------------- -->
<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

?>
<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
   unset($_SESSION['dangky']);
}
?>
<header>
        <div class="logo">
           <a href="http://localhost:81/thuctapcsdl/trangchu.php">
               <img src="img/LOGO_preview_rev_1.png" alt="">
           </a>
        </div>
        <div class="menu">
            <!-- <div class="home"> -->
               <li><a href="index.php">BỘ SƯU TẬP</a></li>
            <!-- </div> -->
           <!-- <li><a href="index.php?quanly=giohang">GIỎ HÀNG</a></li> -->
           <li><a href="index.php?quanly=tintuc">TIN TỨC MỚI</a></li>
           <!-- <div class="gioithieu"> -->
              <li><a href="index.php?quanly=gioithieu">GIỚI THIỆU</a>
              </li>
            <!-- </div> -->
           <!-- <div class="lienhe"> -->
               <li><a href="index.php?quanly=lienhe">LIÊN HỆ</a>
               </li>
           <!-- </div> -->
        </div>
        <div class="timkiem">
            <form action="index.php?quanly=timkiem" method="POST">
               <li>
                  <input placeholder="Tìm kiếm" type="text" name="tukhoa">
                  <button value="Tìm kiếm" name="timkiem" style="border: none; cursor:pointer">
                  <i class="fas fa-search"></i>
                  </button>
               </li>
            </form>   
        </div>
            <div class="icon">
               <?php
               if(isset($_SESSION['dangky'])){
               ?>
               <li><a class="fa-solid fa-clock-rotate-left" href="index.php?quanly=lichsudonhang"></a></li>
               <li><a class="fa-solid fa-right-from-bracket" href="index.php?dangxuat=1"></a>
                  <ul class="doimk">
                     <li><a href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>
                  </ul>
               </li>
               <?php
               }else{
               ?>
               <li><a class="fa fa-user" href="index.php?quanly=dangky"></a></li>
               <?php
               }
               ?>
               <li><a class="fa fa-shopping-bag" href="index.php?quanly=giohang"></a></li>
            </div>
        
</header>