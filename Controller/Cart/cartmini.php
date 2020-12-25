<?php

	include_once ("Model/Products.php");
	$pro = new Products();
	$newproducts = $pro->getProducts1();
	if(isset($_SESSION['mycart']))	
		include_once ("View/Cart/cartmini.php");
?> 