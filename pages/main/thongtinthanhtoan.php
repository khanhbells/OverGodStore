<p>Thông tin thanh toán</p>
<!-- <div class="container2"> -->
  <?php
    if(isset($_SESSION['id_khachhang'])){
  ?>
          <div class="payment-top-wrap">
            <div class="payment-top">
                <div class="payment-top-delivery payment-top-item">
                    <a href="index.php?quanly=giohang"><i class="fas fa-shopping-cart "></i></a>
                </div>
                <div class="payment-top-adress payment-top-item">
                    <a href="index.php?quanly=vanchuyen"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="payment-top-payment payment-top-item">
                    <a href="index.php?quanly=thongtinthanhtoan"><i class="fas fa-money-check-alt "></i></a>
                </div>
            </div>
        </div>
  <!-- <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
  </div> -->
  <?php
    }
  ?>
  <form action="pages/main/xulythanhtoan.php" method="POST">
  <div class="row">
   
      <?php
      $id_dangky = $_SESSION['id_khachhang'];
      $sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
      $count = mysqli_num_rows($sql_get_vanchuyen);
      if($count>0){
        $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
        $name = $row_get_vanchuyen['name'];
        $phone = $row_get_vanchuyen['phone'];
        $address = $row_get_vanchuyen['address'];
        $note = $row_get_vanchuyen['note'];
      }else{

        $name = '';
        $phone = '';
        $address = '';
        $note = '';
      }
      ?>
    <div class="col-md-8">
      <h4>Thông tin vận chuyển và giỏ hàng</h4>
      <ul style="list-style: none;">
        <li>Họ và tên vận chuyển: <b><?php echo $name ?></b></li>
        <li>Số điện thoại: <b><?php echo $phone ?></b></li>
        <li>Địa chỉ: <b><?php echo $address ?></b></li>
        <li>Ghi chú: <b><?php echo $note ?></b></li>
      </ul>
      <h5>Giỏ hàng của bạn</h5>
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
                            <!-- <p><a href="pages/main/addcart.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-sharp fa-solid fa-caret-up"></i></a></p> -->
                            <p><?php echo $cart_item['soluong']; ?></p>
                            <!-- <p><a href="pages/main/addcart.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-sharp fa-solid fa-caret-down"></i></a></p> -->
                        </td>
                        <td><p><?php echo number_format($cart_item['giasp'],0,',','.')."<sup>đ</sup>";?></p></td>
                        <td><p><?php echo number_format($thanhtien,0,',','.')."<sup>đ</sup>";?></p></td>
                        <!-- <td><span>X</span></td> -->
                    </tr>
                    <?php
                         }
                    ?>
                     <tr>
                        <td colspan="8">
                            <p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.')."<sup>đ</sup>";?></p><br>
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
    </div>
    <div class="col-md-4 hinhthucthanhtoan">
      <h4>Phương thức thanh toán</h4>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tienmat" checked>
          <label class="form-check-label" for="exampleRadios1">
            Tiền mặt
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="chuyenkhoan" checked>
          <label class="form-check-label" for="exampleRadios1">
            Chuyển khoản
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="vnpay">
          <img src="img/vnpay.jpg" alt="" width="32" height="32">
          <label class="form-check-label" for="exampleRadios2">
            VNpay
          </label>
      </div>
      <input type="submit" value="Thanh toán ngay" name="redirect" id="redirect" class="btn btn-danger">

      <p></p>
      
      </form>
      <?php
		$tongtien = 0;
		foreach($_SESSION['cart'] as $key => $value){
			$thanhtien = $value['soluong']*$value['giasp'];
  			$tongtien+=$thanhtien;

		} 
		$tongtien_vnd = $tongtien;
		$tongtien_usd = round($tongtien/23675);
		?>
		<input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">
    <div id="paypal-button"></div>

    <p></p>
		
    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán MOMO QRcode" class="btn btn-danger">
    </form>
    
    <p></p>

    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo_atm.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">
    </form>

    <p></p>

    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/onepay.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán ONEPAY" class="btn btn-danger">
    </form>

    </div>
  </div>
</div>