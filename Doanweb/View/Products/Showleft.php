    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                    <h2 style="color: #ff6600;font-size: 20px;font-weight: bold;" class="sidebar-title">Sản phẩm mới nhất</h2>

                    <?php
                        $dem=0;
                        foreach ($newproducts as $row) {
                            $pr = number_format($row['Price'],0);
                            if($dem==6) break;

                            echo "<div class=\"thubmnail-recent\">";
                            echo   "<a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\"><img src=\"Upload/{$row['ImageUrl']}\" class=\"recent-thumb\"></a>";
                            echo   "<h2><a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\">{$row['ProductName']}</a></h2>";
                            echo   "<p style=\"color: #5A88CA;font-size: 16px; font-weight:bold;\">Giá: $pr VND</p>";
                            echo   "</div>";
                            $dem++;
                        }   
                    ?>   
                    </div>
                </div>