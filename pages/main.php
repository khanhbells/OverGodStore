<!-- ----------------------cartegory----------------- -->
<section class="cartegory1">
    <div class="container1">
        <div class="container1">
            <div class="row1">
                <?php 
                include("sidebar/sidebar.php")
                ?>
                <div class="cartegory-right">
                    <?php
                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }
                    else{
                        $tam = '';
                    }
                    if($tam=='danhmucsanpham'){
                        include("main/danhmuc.php");

                    }elseif($tam=='giohang'){
                        include("main/giohang.php");
                    }
                    elseif($tam=='danhmucbaiviet'){
                        include("main/danhmucbaiviet.php");
                    }

                    elseif($tam=='baiviet'){
                        include("main/baiviet.php");
                    }

                    elseif($tam=='tintuc'){
                        include("main/tintuc.php");
                    }

                    elseif($tam=='lienhe'){
                        include("main/lienhe.php");
                    }
                    elseif($tam=='gioithieu'){
                        include("main/gioithieu.php");
                    }
                    
                    elseif($tam=='sanpham'){
                        include("main/sanpham.php");
                    }
                    elseif($tam=='dangky'){
                        include("main/dangky.php");
                    }elseif($tam=='thanhtoan'){
                        include("main/thanhtoan.php");
                    }
                    elseif($tam=='dangnhap'){
                        include("main/dangnhap.php");
                    }
                    elseif($tam=='timkiem'){
                        include("main/timkiem.php");
                    }
                    elseif($tam=='camon'){
                        include("main/camon.php");
                    }
                    elseif($tam=='thank'){
                        include("main/thank.php");
                    }
                    elseif($tam=='thaydoimatkhau'){
                        include("main/thaydoimatkhau.php");
                    }

                    elseif($tam=='vanchuyen'){
                        include("main/vanchuyen.php");
                    }
                    elseif($tam=='thongtinthanhtoan'){
                        include("main/thongtinthanhtoan.php");
                    }
                    elseif($tam=='donhangdadat'){
                        include("main/donhangdadat.php");
                    }
                    elseif($tam=='lichsudonhang'){
                        include("main/lichsudonhang.php");
                    }
                    elseif($tam=='xemdonhang'){
                        include("main/xemdonhang.php");
                    }

                    else{
                        include("main/index.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>