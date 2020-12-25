<?php
	include_once("Model/Category.php");
	$cate = new Category();
	include_once("View/Category/Insert.php");
	if(isset($_POST['btnSave']))
	{
		$categoryName = $_POST['txtCategoryName'];

		if($categoryName != "" )
		{
			$ret=$cate->InsertCategory($categoryName);
			if($ret>0)
			{
				header("location:admin.php?mod=category&act=manage");
			}
			else
				echo "<p class=\"error\">Thêm bị lỗi</p>";
		}
		echo "<p class=\"error\">Dữ liệu không hợp lệ</p>";
	}
?>