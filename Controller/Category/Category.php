<?php
	include_once("Model/Category.php");
	$cate = new Category();
	$result = $cate->getCategory();
	include_once("View/Category/Category.php");
?>