<?php
$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]' ORDER BY id DESC";
$query_bv = mysqli_query($mysqli,$sql_bv);
//tendanhmuc
$sql_cate = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli,$sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>
<h1><span style="text-align: center;text-transform:uppercase;"><?php echo $row_title['tendanhmuc_baiviet']?></span></h1>
<!-- <div class="cartegory-right-top-item">
                        <p>SẢN PHẨM NỮ</p>
                    </div> -->
                    <!-- <div class="cartegory-right-top-item">
                        <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                    </div> -->
                    <!-- <div class="cartegory-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                    </div> -->
                    <div class="cartegory-right-content row1 ">
                        <?php
                        while($row_bv = mysqli_fetch_array($query_bv)){
                         ?>
                        <div class="cartegory-right-item">
                            <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
                               <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>">
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