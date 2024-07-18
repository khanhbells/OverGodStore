<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli,$sql_pro);
//tendanhmuc
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli,$sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<p><?php echo $row_title['tendanhmuc']?></p>
                    <div class="cartegory-right-content row1 ">
                        <?php
                        while($row_pro = mysqli_fetch_array($query_pro)){
                         ?>
                        <div class="cartegory-right-item">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                               <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                            </a>
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                                <h1>
                                    <?php echo $row_pro['tensanpham'] ?>
                                </h1>
                                <div class="price_cartegory">
                                    <p><?php echo number_format($row_pro['giasp'],0,',','.')."<sup>đ</sup>" ?></p>
                                    <div class="giohang">
                                         <a href="index.php?quanly=giohang"><i class="fa-solid fa-bag-shopping"></i></a>
                                    </div>
                                </div>  
                            </a>  
                        </div>
                        <?php
                        }
                        ?>
                    </div>  
