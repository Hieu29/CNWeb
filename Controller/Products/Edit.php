<?php
	include_once("Model/Products.php");
	$product = new Products();
	
	include_once("Model/Manufacturer.php");
	$manufacturer= new Manufacturer();
	$manu = $manufacturer->getManufacturer();

	include_once("Model/Category.php");
	$category=new Category();
	$cate = $category->getCategory();
	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$product->getProductById($id);
		include_once("View/Products/Edit.php");
		if(isset($_POST['btnChange']))
		{
			include("Model/Upload.php");
			$productName=$_POST["txtProductName"];
			if(isset($_FILES['txtImageUrl']))
				$fileName = Upload::UploadImage("txtImageUrl","Upload");
			$price=$_POST["txtPrice"];
			$quantity=$_POST["txtQuantity"];
			$body = addslashes($_POST['txtBody']);
			$description=addslashes($_POST['txtDescription']);
			$categoryID=$_POST["slCategory"];
			$manufacturerID=$_POST["slManufacturer"];
			if(!isset($_FILES['txtImageUrl']))
				$ret=$product->UpdateProduct($id,$manufacturerID,$categoryID,$productName,$price,$quantity,$description,$body);
			else
			{
				//print_r($_FILES);
				$ret=$product->UpdateProduct($id,$manufacturerID,$categoryID,$productName,$price,$quantity,$description,$body,$fileName);
			}
			if($ret>0)
			{
				header("location:admin.php?mod=products&act=manage");
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
		}
	}
?>