<?php
	include_once("Model/Manufacturer.php");
	$ma = new Manufacturer();
	$ret = $ma->getManufacturerManage();
	include_once("View/Manufacturer/Manage.php");
?>