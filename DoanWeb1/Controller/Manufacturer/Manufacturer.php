<?php
	include_once("Model/Manufacturer.php");
	$manu = new Manufacturer();
	$result = $manu->getManufacturer();
	include_once("View/Manufacturer/Manufacturer.php");
?>