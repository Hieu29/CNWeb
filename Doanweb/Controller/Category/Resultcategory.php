<?php
	include_once("Model/Category.php");
	include_once("Model/Products.php");
	$cate = new Category();
	$pro = new Products();
	$id = $_GET['id'];

	$result = $pro->getProductsByCateID($id);
	$cateName= $cate->getCateName($id);
	include_once("View/Category/Resultcategory.php");
?>