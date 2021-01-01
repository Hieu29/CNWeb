<?php
	include("Model/Group.php");
	$gr = new Group();
	$ret = $gr->getGroupManage();
	include_once("View/Group/Manage.php");
?>