<?php
	include_once("Model/Products.php");
	include_once ("Model/Pages.php");
	define("MAX",8);
	$pro = new Products();	
	$count = $pro->CountProducts();
	$findStart = Pages::findStart(MAX);
	$findPage = Pages::findPages($count,MAX);
    if(isset($_REQUEST['value'])){
        $type=$_REQUEST['value'];
        $rs = $pro->getProductsByPrice($type);
    }
	if(!isset($_POST['selectPrice'])){	
		$rs = $pro->GetProducts($findStart,MAX);
	}


	include_once("View/Products/Allproducts.php");
?>