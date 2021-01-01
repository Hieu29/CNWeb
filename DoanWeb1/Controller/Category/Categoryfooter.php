<?php
	include_once("Model/Category.php");
	$cate = new Category;
	$result = $cate->getCategory();
	include("View/Category/Categoryfooter.php");
?>