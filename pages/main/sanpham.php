<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>

<div class="product-content row1">
                <div class="product-content-left row1">

                    <div class="product-content-left-big-img">
                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                    </div>
                </div>
                <form method="POST" action="pages/main/addcart.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                    <div class="product-content-right">
                        <div class="product-content-right-product-name">
                            <h1><?php echo $row_chitiet['tensanpham'] ?></h1>
                            <p><?php echo $row_chitiet['masp'] ?></p>
                            <div class="star">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content-right-product-price row1">
                            <p><?php echo number_format($row_chitiet['giasp'],0,',','.')."<sup>đ</sup>" ?></p>
                            <!-- <del>3.090.000<sup>đ</sup></del>
                            <div class="product-content-right-product-price-sale">
                            <span>-30%</span>
                            </div> -->
                        </div> 
                        <div class="product-content-right-product-size">
                            <p style="font-weight: bold;">Size: </p>
                                <div class="size">
                                    <select name="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select>
                                </div>
                        </div>
                        <div class="quantity">
                            <!-- <p style="font-weight: bold;">Số lượng trong kho: <?php echo $row_chitiet['soluong'] ?></p> -->
                        </div>
                        <div class="quantity">
                            <p style="font-weight: bold;">Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
                        </div>
                        <div class="product-content-right-product-button">
                            <button name="themgiohang"><i class="fas fa-shopping-cart"></i><p>THÊM GIỎ HÀNG</p></button>
                            <a href="index.php"><p>TIẾP TỤC MUA SẮM</p></a>
                        </div>
                        <div class="tabs">
                            <ul id="tabs-nav">
                                <li><a href="#tab1">Chi tiết sản phẩm</a></li>
                                <li><a href="#tab2">Giới thiệu</a></li>
                                <li><a href="#tab3">Liên hệ</a></li>
                            </ul> <!-- END tabs-nav -->
                            <div id="tabs-content">
                                <div id="tab1" class="tab-content">
                                    <?php echo $row_chitiet['tomtat'] ?> 
                                </div>
                                <div id="tab2" class="tab-content">
                                    <?php echo $row_chitiet['noidung'] ?>   
                                </div>
                                <div id="tab3" class="tab-content">
                                    <p>Liên hệ với chúng tôi để được tư vấn thêm qua:</p>
                                           <p>1. Số điện thoại: 0342410886 or 0856378628 Bảo Khánh</p>
                                           <p>2. Zalo: 0856378628 Vũ Bảo Khánh</p>
                                           <p>3. Facebook: https://www.facebook.com/vu.baokhanh.71 </p>
                                    </p> 
                                </div>
                            </div> <!-- END tabs-content -->
                            </div> <!-- END tabs -->
                    </div>
            </form>
</div>
<div class="clear"></div>

<?php
}
?>