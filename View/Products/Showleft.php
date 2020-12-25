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