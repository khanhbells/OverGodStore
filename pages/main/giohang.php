<p>
    <?php
    if(isset($_SESSION['dangky'])){
        echo 'Xin chào:'.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
    }
    ?>
</p>
<?php
if(isset($_SESSION['cart'])){
}
?>
<?php
if(isset($_SESSION['id_khachhang'])){
?>
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <a href="index.php?quanly=giohang"><i class="fas fa-shopping-cart "></i></a>
                </div>
                <div class="cart-top-adress" >
                    <a href="index.php?quanly=vanchuyen"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="cart-top-payment">
                    <a href="index.php?quanly=thongtinthanhtoan"><i class="fas fa-money-check-alt "></i></a>
                </div>
            </div>
        </div>
<?php
}
?>
<div class="cart-content-left">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <!-- <th>Màu</th> -->
                        <!-- <th>Size</th> -->
                        <th>SL</th>
                        <th>Giá sản phẩm</th>
                        <th>Thành tiền</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php 
                    if(isset($_SESSION['cart'])){
                        $i = 0;
                        $tongtien = 0;
                        foreach($_SESSION['cart'] as $cart_item){
                            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                            $tongtien=$tongtien+$thanhtien;
                            $i++;
                    ?>
                    <tr>
                        <td><p><?php echo $i; ?></p></td>
                        <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"></td>
                        <td><p><?php echo $cart_item['tensanpham']; ?></p></td>
                        <td><p><?php echo $cart_item['masp']; ?></p></td>
                        <!-- <td><img src="img/maughi.png" alt=""></td> -->
                        <!-- <td><p>L</p></td> -->
                        <td>
                            <p><a href="pages/main/addcart.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-sharp fa-solid fa-caret-up"></i></a></p>
                            <p><?php echo $cart_item['soluong']; ?></p>
                            <p><a href="pages/main/addcart.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-sharp fa-solid fa-caret-down"></i></a></p>
                        </td>
                        <td><p><?php echo number_format($cart_item['giasp'],0,',','.')."<sup>đ</sup>";?></p></td>
                        <td><p><?php echo number_format($thanhtien,0,',','.')."<sup>đ</sup>";?></p></td>
                        <td><a href="pages/main/addcart.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                        <!-- <td><span>X</span></td> -->
                    </tr>
                    <?php
                         }
                    ?>
                     <tr>
                        <td colspan="8">
                            <p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.')."<sup>đ</sup>";?></p><br>
                            <p style="float: right;"><a href="pages/main/addcart.php?xoatatca=1">Xóa tất cả</a></p>
                            <div style="clear:both;"></div>
                            <?php
                            if(isset($_SESSION['dangky'])){
                            ?>
                            <p><a href="index.php?quanly=vanchuyen">Thanh toán</a></p>
                            <?php
                            }else{
                            ?>
                            <p><a href="index.php?quanly=dangky">Đăng ký Đặt hàng</a></p>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php       
                    }else{
                    ?>
                     <tr>
                        <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
               