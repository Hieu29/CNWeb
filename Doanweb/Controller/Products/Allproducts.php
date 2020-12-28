<?php
	include_once("Model/Products.php");
	include_once ("Model/Pages.php");
	define("MAX",8);
	$pro = new Products();	
	$count = $pro->CountProducts();
	$findStart = Pages::findStart(MAX);
	$findPage = Pages::findPages($count,MAX);

	if(!isset($_POST['selectPrice'])){	
		$rs = $pro->GetProducts($findStart,MAX);
	}
	else{
		$type=$_POST['selectPrice'];
		if($type=='all') $rs = $pro->GetProducts($findStart,MAX);
		else $rs = $pro->getProductsByPrice($type);
	}

	include_once("View/Products/Allproducts.php");
?>