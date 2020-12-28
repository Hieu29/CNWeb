<?php
	include_once("Model/Products.php");
	$products = new Products();
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$ret = $products->DeleteProducts($id);
		// echo $ret;
		if($ret>0){
			header("location:admin.php?mod=products&act=manage");
		}
	}
?>