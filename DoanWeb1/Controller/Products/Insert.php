<?php
	include_once("Model/Manufacturer.php");
	include_once("Model/Category.php");
	include_once("Model/Products.php");
	$product = new Products();
	$manufacturer = new Manufacturer();
	$category = new Category();
	$manu = $manufacturer->getManufacturer();
	$cate = $category->getCategory();

	include_once("View/Products/Insert.php");

	if(isset($_POST['btnSave'])){
		include_once("Model/Upload.php");
		$productName = $_POST['txtProductName'];
		$filename = Upload::UploadImage("txtImageUrl","Upload");
		$price=$_POST["txtPrice"];
		$quantity=$_POST["txtQuantity"];
		$body = addslashes($_POST['txtBody']);
		$description=addslashes($_POST['txtDescription']);
		$categoryID=$_POST["slCategory"];
		$manufacturerID=$_POST["slManufacturer"];

		// echo $filename;
		if($filename!="")
		{	
			if(is_numeric($price) && is_numeric($quantity))
			{
				$ret = $product->InsertProduct($manufacturerID,$categoryID,$productName ,$filename,$price,$quantity,$description,$body);
				if($ret>0)
				{
					header("location:admin.php?mod=products&act=manage");
				}
				else
					echo "<p class=\"error\">Thêm bị lỗi</p>";
			}
			else
			{
				echo "<p>Giá hoặc số lượng không hợp lệ</p>";
			}
		
		}
		else
		{
			echo "<p>Vui lòng chọn file ảnh</p>";
		}
	}
?>