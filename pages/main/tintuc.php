<h3 style="font-weight: bold;">Tin tức mới nhất</h3>
<?php
$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1  ORDER BY id DESC";
$query_bv = mysqli_query($mysqli,$sql_bv);
?>
                    <div class="cartegory-right-content row1 ">
                        <?php
                        while($row_bv = mysqli_fetch_array($query_bv)){
                         ?>
                        <div class="cartegory-right-item">
                            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                               <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">
                            </a>
                            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                               <h1><?php echo $row_bv['tenbaiviet'] ?></h1>
                            </a>
                            <p><?php echo $row_bv['tomtat'] ?></p>
                        </div>
                        <?php
                        }
                        ?>
                    </div>  
                    <div class="cartegory-right-bottom row1">
                        <div class="cartegory-right-bottom-item">
                            <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                        </div>
                        <div class="cartegory-right-bottom-item">
                            <p><span>&#10233;<span>1 2 3 4 5</span>&#10232;</span>Trang cuối</p>
                        </div>
                    </div>  