<div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="products-details">
                <div class="preview_image">
                  <div class="preview-small">
                    <?php
                        $im = "Upload/".$res["ImageUrl"];
                    ?>
                    <img id="zoom_03" src=<?php echo $im?>  data-zoom-image=<?php echo $im?> alt="">
                  </div>
                  
                </div>
                <div class="products-description">
                  <h5 class="name">
                    <?php echo $res["ProductName"];?>
                  </h5>
                  <p>
                    Availability: 
                    <span class=" light-red">
                      <?php echo $res["ProductName"];?>
                    </span>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Price : 
                    <span class="new_price">
                       <?php echo $res["Price"];?>
                      <sup>
                        $
                      </sup>
                    </span>
                    <span class="old_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    
                    <div class="button_group">

<?php
  $chuoi = <<<EOD
  <button class="button add-cart" type="button">
   <a href="Controller/Cart/Add.php?id={$res['ProductID']}" onclick="return insertCart({$res['ProductID']})" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i><span>  </span>Add to cart</a>

   </button>
EOD;
   echo $chuoi;
?>

                      <button >
                        
                      </button>
                      <button >
                        
                      </button>
                      <button >
                        
                      </button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#Descraption">
                        Mô tả
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
                      <?php echo $res["Description"];?>
                    </p>
                    
                  </div>
                  
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  <strong>
                    Sản phẩm 
                  </strong>
                  liên quan
                </h3>
                <div class="control">
                  <a id="prev_hot" class="prev" href="#">
                    &lt;
                  </a>
                  <a id="next_hot" class="next" href="#">
                    &gt;
                  </a>
                </div>
                <ul id="hot">
                  <li>
                    <div class="row">
                      <?php
                      $ii=0;
                        foreach ($resOther as $row) {
                          # code...
                          if($ii<3){
                            $chuoi = <<<EOD
                            <div class="col-md-4 col-sm-4">
                              <div class="products">
                                         <div class="offer">{$row['StatusHeader']}</div>
                                         <div class="thumbnail"><a href="index.php?mod=products&act=detail&id={$row['ProductID']}"><img src=Upload/{$row['ImageUrl']} alt=Upload/{$row['ProductName']}></a></div>
                                         <div class="productname">{$row['ProductName']}</div>
                                         <h4 class="price">{$row['Price']}</h4>
                                         <div class="button_group">
                                         <a href="Controller/Cart/Add.php?id={$row['ProductID']}" onclick="return insertCart({$row['ProductID']})" class="add-to-cart-link">
                                             <button class="button add-cart" type="button">
                                             <i class="fa fa-shopping-cart"></i>
                                             </button></a>

                                            <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
                                             <button class="button wishlist" type="button" style="width:70px;">
                                             
                                             <i class="fa fa-info-circle" aria-hidden="true"></i>
                                             
                                             </button></a>
                                        </div>
                                      </div>
                            </div>

EOD;

                            echo $chuoi;
                          }

                          $ii++;

                        }
                      ?>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
            </div>

            <div class="col-md-3">
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Tìm  
                  <strong>
                    kiếm
                  </strong>
                </h3>
                <form>
                  <input class="email" type="text" name="txtTimKiem" id="txtTimKiem" placeholder="Bạn tìm gì...?">
                </form>
              </div>

<script type="text/javascript">
  // AJAX call for autocomplete 
$(document).ready(function(){
   $("#txtTimKiem").keyup(function(){
      $.ajax({
      type: "POST",
      url: "Controller/Products/SearchDetail.php",
      data:'keyword='+$(this).val(),
      success: function(data){
         $("#kq").html(data);      }
      });
   });
});
</script>

              <div class="clearfix">
              </div>
              <div class="special-deal leftbar" id="kq">
                <h4 class="title"  >
                  Sản phẩm  
                  <strong>
                    mới
                  </strong>
                </h4>
                <?php
                $i= 0;
                  foreach ($newproducts as $rs) {
                    # code...
                    if($i<10){
                      $chuoi = <<<EOD
                      <div class="special-item">
                        <div class="product-image">
                          <a href="index.php?mod=products&act=detail&id={$rs['ProductID']}">
                            <img src=Upload/{$rs["ImageUrl"]} alt={$rs["ProductName"]}>
                          </a>
                        </div>
                        <div class="product-info">
                          <p>
                            {$rs["ProductName"]}
                          </p>
                          <h5 class="price">
                            {$rs["Price"]}
                          </h5>
                        </div>
                      </div>
EOD;
                        echo $chuoi;
                        $i++;
                    }                   
                  }
                ?>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>