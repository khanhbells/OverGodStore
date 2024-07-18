<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
   unset($_SESSION['dangky']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OverGod Shop</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
<!------------------------- menu---------------------- -->
<header>
        <div class="logo">
           <a href="">
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
<!-- ----------------------MID------------------------- -->
<section id="Slider">
<div class="aspect-ratio-169">
    <img src="img/ads5.jpg">
    <img src="img/ads2.jpg">
    <img src="img/ads3.jpg">
</div>
<div class="dot-container">
    <div class="dot active"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
</section>
<!-- -----------------link contact--------------- -->
<section class="app-container">
    <p>TÌM HIỂU THÊM TẠI ĐÂY</p>
    <div class="link-contact">
        <a href=""><img src="img/fb.png"></a>
        <a href=""><img src="img/instagram.png"></a>
        <a href=""><img src="img/youtube.png"></a>
    </div>
    <p>ĐĂNG KÝ NHẬN TIN</p>
    <input type="text" placeholder="Nhập email của bạn...">
</section>
<!-- ------------------footer-------------------- -->
<div class="footer-top">
    <li><a href=""><img src="img/dathongbao.jpg" alt=""></a></li>
    <li><a href="">PRIVACY POLICY</a></li>
    <li><a href="">TERMS OF USE</a></li>
    <li><a href="">RECRUITMENT</a></li>
    <li>
        <a href=""class="fab fa-facebook-f"></a>
        <a href=""class="fab fa-twitter"></a>
        <a href=""class="fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
    <p>
        Công ty TNHH một thành viên với số đăng ký kinh doanh: 0123456 <br>
        Địa chỉ đăng ký: Tổ dân phố 8, P.Đồng Quang, Tp.Thái Nguyên, T.Thái Nguyên - 0856378628 <br>
        Đặt hàng online : <b>034 241 0886</b> .
     </p>
</div>
<div class="footer-bottom">
    @Overgodshop All rights reserved
</div>
</body>
<script>
    const header = document.querySelector("header")
        window.addEventListener("scroll",function(){
        x = window.pageYOffset
        // console.log(x)
        if(x>0){
            header.classList.add("sticky")
        }
        else{
            header.classList.remove("sticky")
        }
    }
)
const imgPositon = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll(".dot")
let imgNumber = imgPositon.length
let index = 0
// console.log(imgPositon)
imgPositon.forEach(function(image,index){
    image.style.left = index*100 + "%"
    dotItem[index].addEventListener("click",function(){
    slider (index)

    })
})
function imgSlide (){
    index++;
    console.log(index)
    if (index>=imgNumber) {index=0}
    slider (index)

}

function slider (index){
    imgContainer.style.left = "-" +index*100+ "%"
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}
setInterval(imgSlide,5000)
</script>
</html>