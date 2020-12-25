<?php
	include_once("Model/Group.php");
	$group = new Group();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$group->DeleteGroup($id);
		if($ret>0)
		{
			header("location:admin.php?mod=group&act=manage");
		}
	}
?>