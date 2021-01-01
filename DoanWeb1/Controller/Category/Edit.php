<?php
	include_once("Model/Category.php");
	$cate = new Category();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$cate->GetCategoryByID($id);
		include_once("View/Category/Edit.php");
		if(isset($_POST['btnChange']))
		{
			$categoryName = $_POST['txtCategoryName'];
			$position = $_POST['txtPosition'];
			$ret=$cate->UpdateCategory($id,$categoryName,$position);
			if($ret>0)
			{
				header("location:admin.php?mod=category&act=manage");
			}
		}
	}
?>