<?php
	include_once("Model/Manufacturer.php");
	$manufacturer = new Manufacturer();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$manufacturer->GetManufacturerByID($id);
		include_once("View/Manufacturer/Edit.php");
		if(isset($_POST['btnChange']))
		{
			$manufacturerName = $_POST['txtManufacturerName'];
			$ret=$manufacturer->UpdateManufacturer($id,$manufacturerName);
			if($ret>0)
			{
				header("location:admin.php?mod=manufacturer&act=manage");
			}
		}
	}
?>