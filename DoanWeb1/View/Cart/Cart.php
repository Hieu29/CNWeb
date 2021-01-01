<div style="background-color: #000" class="shopping-item mx-4">
	<a style="color:white; font-size: 12px	" href="index.php?mod=cart&act=detail" id="btnGioHang">Giỏ hàng<span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i>

	<?php
		if(isset($_SESSION['mycart'])){
			$sum=0;
			foreach($_SESSION["mycart"] as $item)
			{
				$sum+=$item;
			}
			echo "<span class=\"product-count\" id=\"sl\">".$sum."</span></a>";
		}
		else{
			echo "<span class=\"product-count\" id=\"sl\">"."0"."</span></a>";
		}
	?>
</div>