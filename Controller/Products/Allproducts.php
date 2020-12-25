<?php
	include_once("Model/Products.php");
	include_once ("Model/Pages.php");

	$soluong = 0;
	if(isset($_REQUEST['soluong'])){
		$soluong = $_REQUEST['soluong'];
	}
	define("MAX",$soluong);
	$pro = new Products();	
	$count = $pro->CountProducts();
	$findStart = Pages::findStart(MAX);
	$findPage = Pages::findPages($count,MAX);

	
	$rs = $pro->GetProducts($findStart,MAX);
	
	include_once("View/Products/Allproducts.php");
?>