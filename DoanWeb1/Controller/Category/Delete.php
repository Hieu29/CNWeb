<?php
	include_once("Model/Category.php");
	include_once("Model/Products.php");
	$cate = new Category();
	$pro = new Products();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$res = $pro->getProductsByCateID($id);
		if(count($res)==0){
			$ret=$cate->DeleteCategory($id);
			if($ret>0)
			{
				header("location:admin.php?mod=category&act=manage");
			}
		}
		else header("location:admin.php?mod=category&act=manage");
	}
?>
