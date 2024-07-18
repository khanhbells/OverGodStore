<?php
$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
$query_bv = mysqli_query($mysqli,$sql_bv);

$query_bv_all = mysqli_query($mysqli,$sql_bv);

$row_bv_title = mysqli_fetch_array($query_bv);
?>
<h1><span style="text-align: center;text-transform:uppercase;"><?php echo $row_bv_title['tenbaiviet']?></span></h1>
                    <div class="cartegory-right-content row1 ">
                        <?php
                        while($row_bv = mysqli_fetch_array($query_bv_all)){
                         ?>
                        <div class="baiviet">
                            <h4><?php echo $row_bv['tenbaiviet'] ?></h4>
                            <!-- <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>"> -->
                            <h4><?php echo $row_bv['tomtat'] ?></h4>
                            <p><?php echo $row_bv['noidung'] ?></p>

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