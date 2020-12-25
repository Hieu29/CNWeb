<?php

	if(isset($_REQUEST['manufacturerID'])){
		@include_once("../../Model/Manufacturer.php");
		@include_once("../../Model/Products.php");
		$manu = new Manufacturer();
		$pro = new Products();
		// echo $id;
		$id = $_REQUEST["manufacturerID"];
		$r = $pro->getProductsByManuID($id);
		// $cateName= $cate->getCateName($id);
		include_once("../../View/Products/GetProducts.php");
	}	
?>