<?php
if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
}
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
$query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h1>Kết quả tìm kiếm: <?php echo $_POST['tukhoa']; ?></h1>
                    <div class="cartegory-right-content row1 ">
                        <?php
                        while($row = mysqli_fetch_array($query_pro)){
                        ?>
                        <div class="cartegory-right-item">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                               <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                            </a>
                            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">   
                               <h1><?php echo $row['tensanpham'] ?></h1>
                               <p><?php echo number_format($row['giasp'],0,',','.')."<sup>đ</sup>" ?></p>
                               <p style="color:#ddd"><?php echo $row['tendanhmuc'] ?></p>
                            </a>
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