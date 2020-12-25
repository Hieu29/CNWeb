<?php
	if(isset($_REQUEST['value']))
	{
	$value = $_REQUEST['value'];
		include_once ("../../Model/Products.php");
		$pro = new Products();
		$r = null;
		if($value=="Name"){
			$r =  $pro->GetProductsSortByName();
		}
		else if($value=="Price"){
			$r= $pro->GetProductsSortByName();
		}
		else{
			$r = $pro->GetProducts(0,3);
		}
		if($r!=null){
			include_once("../../View/Products/GetProducts.php");
		}
	}
?>