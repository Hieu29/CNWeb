<div class="row">
<?php
		foreach ($r as $row) {                 
	        $chuoi = null;
	   
	            $chuoi = <<<OED

	            <div class="col-md-4 col-sm-6">
	                <div class="products">
	                  <div class="thumbnail">
	                    <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
	                      <img src=Upload/{$row['ImageUrl']} alt={$row['ProductName']}>
	                    </a>
	                  </div>
	                  <div class="productname">
	                    {$row['ProductName']}
	                  </div>
	                  <h4 class="price">
	                    {$row['Price']}
	                  </h4>
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
                             
echo $chuoi;
}                            	
?>