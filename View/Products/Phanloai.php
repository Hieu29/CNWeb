 <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

<?php

    //$result
 
    foreach ($result as $row) {
        $cateID = $row['CategoryID'];
        $res = $pro->getProductsByCateID($cateID);
    
        echo "<div class=\"col-md-4\">";
        echo            "<div class=\"single-product-widget\">";
        echo                "<h2 class=\"product-wid-title\">{$row['CategoryName']}</h2>";
        echo                "<a href=\"index.php?mod=products&act=viewallcategory&cateid=$cateID\" class=\"wid-view-more\">Xem tất cả</a>";
        $dem =1;

                foreach ($res as $r) {
                    if($dem==2) break;
                    $pr = (int)($r['Price']*1.2);
                    $chuoi=<<<EOD

                   <div class="single-wid-product">
                        <a href="index.php?mod=products&act=detail&id={$r['ProductID']}"><img src="Upload/{$r['ImageUrl']}" alt="" class="product-thumb"></a>
                        <h2><a href="index.php?mod=products&act=detail&id={$r['ProductID']}">{$r['ProductName']}</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>{$r['Price']}$</ins> <del>{$pr}$</del>
                        </div>                            
                    </div>
EOD;
    echo $chuoi;
    $dem++;
                }

                   echo" </div>";
                echo "</div>";
                        
    }
                
?>


            </div>
        </div>
    </div> 