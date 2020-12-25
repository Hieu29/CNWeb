<?php
	include_once("Model/Manufacturer.php");
	$manufacturer = new Manufacturer();
	include_once("View/Manufacturer/Insert.php");
	if(isset($_POST['btnSave']))
	{
		$manufacturerName = $_POST['txtManufacturerName'];
		if($manufacturerName != "")
		{
			$ret=$manufacturer->InsertManufacturer($manufacturerName);
			if($ret>0)
			{
				header("location:admin.php?mod=manufacturer&act=manage");
			}
			else
				echo "<p class=\"error\">Thêm bị lỗi</p>";
		}
		echo "<p class=\"error\">Dữ liệu không hợp lệ</p>";
	}
?>