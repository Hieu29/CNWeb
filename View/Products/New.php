
<!-- <script type="text/javascript">
  $(document).ready(function() {
      $('.add-cart').click(function(e) {
        var id = $(this).attr('data-url');
        alert(ID);
        // $.ajax({
        //     type: "POST",
        //     url: 'Controller/Category/resultcategory.php',
        //     data: {'categoryID': categoryID},
        //     success: function(result)
        //     {
        //         $("#result").html(result);
        //    }
        //  });
       });
  });
</script>
 -->


<div class="container_fullwidth">
            <div class="container"> -->
                <!--sản phẩm xem nhiều-->
               <div class="hot-products">
                  <h3 class="title">Sản phẩm<strong> xem nhiều nhất</strong></h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                    <li>
                        <div class="row">
                        <?php
                        $i=0;
                            foreach ($rs as $row) {
                                # code...
                                $chuoi = null;
                                if($i<4){
                                    if($row['StatusHeader']==null || $row['StatusHeader']==''){
                                    $chuoi = <<<OED
                                    <div class="col-md-3 col-sm-6">
                                      <div class="products">
                                         <div class="thumbnail"><a href="index.php?mod=products&act=detail&id={$row['ProductID']}"><img src=Upload/{$row['ImageUrl']} alt=Upload/{$row['ProductName']}></a></div>
                                         <div class="productname">{$row['ProductName']}</div>
                                         <h4 class="price">{$row['Price']}</h4>
                                         <div class="button_group">
                                             <a href="Controller/Cart/Add.php?id={$row['ProductID']}" onclick="return insertCart({$row['ProductID']})" class="add-to-cart-link" data-url={$row['ProductID']} >
                                             <button class="button add-cart" type="button">
                                             <i class="fa fa-shopping-cart"></i>
                                             </button>
                                             </a>

                                             <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
                                             <button class="button wishlist" type="button" style="width:70px;">
                                             
                                             <i class="fa fa-info-circle" aria-hidden="true"></i>
                                             
                                             </button>
                                             </a>
                                        </div>
                                      </div>
                                   </div>
OED;
                                }
                                else{
                                    $chuoi = <<<OED
                                    <div class="col-md-3 col-sm-6">
                                      <div class="products">
                                         <div class="offer">{$row['StatusHeader']}</div>
                                         <div class="thumbnail"><a href="index.php?mod=products&act=detail&id={$row['ProductID']}"><img src=Upload/{$row['ImageUrl']} alt=Upload/{$row['ProductName']}></a></div>
                                         <div class="productname">{$row['ProductName']}</div>
                                         <h4 class="price">{$row['Price']}</h4>
                                         <div class="button_group">
                                             <a href="Controller/Cart/Add.php?id={$row['ProductID']}" onclick="return insertCart({$row['ProductID']})" class="add-to-cart-link">
                                             <button class="button add-cart" type="button">
                                             <i class="fa fa-shopping-cart"></i>
                                             </button>
                                             </a>

                                             <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
                                             <button class="button wishlist" type="button" style="width:70px;">
                                             
                                             <i class="fa fa-info-circle" aria-hidden="true"></i>
                                             
                                             </button>
                                             </a>
                                        </div>
                                      </div>
                                   </div>
OED;
                                }
                                

                               echo $chuoi;
                               $i++;
                                }
                            }
                        ?>  
                        </div>
                    </li>
                  </ul>
               </div>
               <!--end san pham xem nhie-->
               <div class="clearfix"></div>
               <!--sản phẩm moi nhat-->
               <div class="featured-products">
                  <h3 class="title">Sản phẩm<strong> mới nhất </strong></h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php
                        $i=0;
                            foreach ($rsnew as $row) {
                                # code...
                                $chuoi = null;
                                if($i<4){
                                    if($row['StatusHeader']==null || $row['StatusHeader']==''){
                                    $chuoi = <<<OED
                                    <div class="col-md-3 col-sm-6">
                                      <div class="products">
                                         <div class="thumbnail"><a href="index.php?mod=products&act=detail&id={$row['ProductID']}"><img src=Upload/{$row['ImageUrl']} alt=Upload/{$row['ProductName']}></a></div>
                                         <div class="productname">{$row['ProductName']}</div>
                                         <h4 class="price">{$row['Price']}</h4>
                                         <div class="button_group">
                                             <a href="Controller/Cart/Add.php?id={$row['ProductID']}" onclick="return insertCart({$row['ProductID']})" class="add-to-cart-link">
                                             <button class="button add-cart" type="button">
                                             <i class="fa fa-shopping-cart"></i>
                                             </button>
                                             </a>

                                             <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
                                             <button class="button wishlist" type="button" style="width:70px;">
                                             
                                             <i class="fa fa-info-circle" aria-hidden="true"></i>
                                             
                                             </button>
                                             </a>
                                        </div>
                                      </div>
                                   </div>
OED;
                                }
                                else{
                                    $chuoi = <<<OED
                                    <div class="col-md-3 col-sm-6">
                                      <div class="products">
                                         <div class="offer">{$row['StatusHeader']}</div>
                                         <div class="thumbnail"><a href="index.php?mod=products&act=detail&id={$row['ProductID']}"><img src=Upload/{$row['ImageUrl']} alt=Upload/{$row['ProductName']}></a></div>
                                         <div class="productname">{$row['ProductName']}</div>
                                         <h4 class="price">{$row['Price']}</h4>
                                         <div class="button_group">
                                         <a href="Controller/Cart/Add.php?id={$row['ProductID']}" onclick="return insertCart({$row['ProductID']})" class="add-to-cart-link">
                                             <button class="button add-cart" type="button">
                                             <i class="fa fa-shopping-cart"></i>
                                             </button>
                                             </a>
                                             <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
                                             <button class="button wishlist" type="button" style="width:70px;">
                                             
                                             <i class="fa fa-info-circle" aria-hidden="true"></i>
                                             
                                             </button>
                                             </a>
                                        </div>
                                      </div>
                                   </div>
OED;
                                }
                                

                               echo $chuoi;
                               $i++;
                                }
                            }
                        ?>  
                        </div>
                     </li>
                  </ul>
               </div>
               <!--end san pham moi nhat-->
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Our </strong> Brands</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
        <!-- </div> -->
<!-- </div>