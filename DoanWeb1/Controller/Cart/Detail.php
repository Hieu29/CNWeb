<?php

	include_once ("Model/Products.php");
	$pro = new Products();
	$newproducts = $pro->getProducts1();
	if(isset($_SESSION['mycart']))	
		include_once ("View/Cart/Detail.php");
	else
		include_once("View/Cart/Cartempty.php");

?> 