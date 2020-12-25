<?php
	include_once("Model/Category.php");
	$cat = new Category();
	$ret = $cat->getCategoryManage();
	include_once("View/Category/Manage.php");
?>