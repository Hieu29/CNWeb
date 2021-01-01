<?php
	include_once("Model/Manufacturer.php");
	include_once("Model/Products.php");
	$manufacturer = new Manufacturer();
	$pro = new Products();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$res = $pro->getProductsByManuID($id);
		if(count($res)==0){
			$ret=$manufacturer->DeleteManufacturer($id);
			if($ret>0)
			{
				header("location:admin.php?mod=manufacturer&act=manage");
			}
		}
		else header("location:admin.php?mod=manufacturer&act=manage");
	}
?>