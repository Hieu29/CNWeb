<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>CHI TIẾT GIỎ HÀNG</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm kiếm</h2>
                        <!--Start Search Products-->
                        <?php
                            include_once("Controller/Products/Search.php");
                        ?>
                        <!--End search products-->
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản phẩm mới nhất</h2>

                    <?php
                        $dem=0;
                        foreach ($newproducts as $row) {
                            $pr = $row['Price']*1.2;
                            if($dem==4) break;

                            echo "<div class=\"thubmnail-recent\">";
                            echo    "<a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\"><img src=\"Upload/{$row['ImageUrl']}\" class=\"recent-thumb\"></a>";
                            echo   "<h2><a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\">{$row['ProductName']}</a></h2>";
                            echo    "<div class=\"product-sidebar-price\">";
                            echo        "<ins>{$row['Price']}$</ins> <del>$pr$</del>";
                            echo    "</div></div>";
                            $dem++;
                        }   
                    ?>   
                    </div>
</div>
<center><a href="index.php?mod=products&act=allproducts" class="btn btn-primary" type="button" style="font-size: 30px; margin-bottom: 15px;">Mời bạn tiếp tục mua hàng!</a></center>
<div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">Ảnh</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-remove">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr style="height: 10px;">
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>