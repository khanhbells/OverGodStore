<?php
if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else{
    $page = 1;
}
if($page == '' || $page == 1){
    $begin = 0;
}else{
    $begin = ($page*8)-8;
}
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,8";
$query_pro = mysqli_query($mysqli,$sql_pro);
?>
<p>BỘ SƯU TẬP</p>
                    <div class="cartegory-right-content row1 ">
                        <?php
                        while($row = mysqli_fetch_array($query_pro)){
                        ?>
                        <div class="cartegory-right-item">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                               <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                            </a>
                            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                                <h1>
                                    <?php echo $row['tensanpham'] ?>
                                </h1>
                                <div class="price_cartegory">
                                    <p><?php echo number_format($row['giasp'],0,',','.')."<sup>đ</sup>" ?></p>
                                    <div class="giohang">
                                        <a href="index.php?quanly=giohang"><i class="fa-solid fa-bag-shopping"></i></a>
                                    </div>  
                                </div>
                                <p style="color:#d2b48cce"><?php echo $row['tendanhmuc'] ?></p>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div style="clear: both;"></div>  
                    <div class="cartegory-right-bottom row1">
                    <?php 
                        $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
                        $row_count = mysqli_num_rows($sql_trang);
                        $trang = ceil($row_count/8);
                        ?>
                        <div class="cartegory-right-bottom-item">
                            <p>Trang hiện tại: <?php echo $page ?> <span>| </span><?php echo $trang ?></p>
                        </div>
                        <ul class="list_trang">
                            <?php 
                            for($i=1;$i<=$trang;$i++){
                            ?>
                                <li <?php if($i==$page){echo 'style="background:#d2b48cce"';}else{echo '';} ?> ><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>  