<?php
	include_once("Model/User.php");
	$User = new User();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$User->DeleteUser($id);
		if($ret>0)
		{
			header("location:admin.php?mod=user&act=manage");
		}
	}
?>