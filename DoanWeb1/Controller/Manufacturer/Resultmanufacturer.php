<?php
	include_once("Model/Manufacturer.php");
	include_once("Model/Products.php");
	$manu = new Manufacturer();
	$pro = new Products();
	$id = $_GET['id'];

	$result = $pro->getProductsByManuID($id);
	$manuName= $manu->getManuName($id);
	include_once("View/Manufacturer/Resultmanufacturer.php");
?>