<?php
	// include_once("Model/Products.php");
	// $pro=new Products();
	// $r = $pro->GetProducts(0,3);
 //  	include_once("View/Products/gridproducts.php");


	include_once("Model/Products.php");
	include_once ("Model/Pages.php");

	$soluong = 3;
	if(isset($_REQUEST['soluong'])){
		$soluong = $_REQUEST['soluong'];
	}
	define("MAX",$soluong);
	$pro = new Products();	
	$count = $pro->CountProducts();
	$findStart = Pages::findStart(MAX);
	$findPage = Pages::findPages($count,MAX);

	
	$r = $pro->GetProducts($findStart,MAX);

	include_once("Model/Category.php");
	$cate = new Category();
	$ca = $cate->getCategory();

	include_once("Model/Manufacturer.php");
	$manu = new Manufacturer();
	$ma = $manu->getManufacturer();
	
	include_once("View/Products/gridproducts.php");

?>