<?php
	
	if(isset($_REQUEST['categoryID'])){
		@include_once("../../Model/Category.php");
		@include_once("../../Model/Products.php");
		$cate = new Category();
		$pro = new Products();
		// echo $id;
		$id = $_REQUEST["categoryID"];
		$r = $pro->getProductsByCateID($id);
		// $cateName= $cate->getCateName($id);
		include_once("../../View/Products/GetProducts.php");
	}	
?>