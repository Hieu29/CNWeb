<?php
	include_once("Model/Category.php");
	include_once("Model/Products.php");
	$cate = new Category();
	$pro = new Products();

	$result = $cate->getCategory();

	
	include_once("View/Products/Phanloai.php");
?>