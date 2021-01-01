<?php
	include_once("Model/Products.php");
	$pro = new Products();
	$ret = $pro->getProductsManage();
	include_once("View/Products/Manage.php");
?>