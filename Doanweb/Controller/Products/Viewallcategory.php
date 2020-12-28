<?php
	$cateID = $_GET['cateid'];
	include_once("Model/Products.php");
	include_once("Model/Category.php");
	$cate = new Category();
	$pro = new Products();
	$result = $pro->getProductsByCateID($cateID);
	$cateName = $cate->getCateName($cateID);
	include_once("View/Products/Viewallcategory.php");
?>