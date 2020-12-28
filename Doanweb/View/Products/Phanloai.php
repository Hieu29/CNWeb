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
        echo        "<div class=\"single-product-widget\">";
        echo              "<h2 style=\"font-family:Tahoma;\" class=\"product-wid-title\"><b>{$row['CategoryName']}</b></h2>";
        echo              "<a href=\"index.php?mod=products&act=viewallcategory&cateid=$cateID\" class=\"wid-view-more\">Xem tất cả</a>";
        $dem =1;

                foreach ($res as $r) {
                    if($dem==2) break;
                    $pr = number_format((int)($r['Price']));
                    $chuoi=<<<EOD

                   <div class="single-wid-product">
                        <a href="index.php?mod=products&act=detail&id={$r['ProductID']}"><img src="Upload/{$r['ImageUrl']}" alt="" class="product-thumb"></a>
                        <h2><b><a href="index.php?mod=products&act=detail&id={$r['ProductID']}">{$r['ProductName']}</a></b></h2>
                        <div class="product-wid-price">
                            <ins>Giá: {$pr} VND</ins>
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