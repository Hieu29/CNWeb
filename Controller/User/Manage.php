<?php
	include_once("Model/User.php");
	$user = new User();
	$ret = $user->getUserManage();
	include_once("View/User/Manage.php");
?>