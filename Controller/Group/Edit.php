<?php
	include_once("Model/Group.php");
	$group = new Group();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$row=$group->GetGroupByID($id);
		include_once("View/Group/Edit.php");
		if(isset($_POST['btnChange']))
		{
			$groupName = $_POST['txtGroupName'];
			$ret=$group->UpdateGroup($id,$groupName);
			if($ret>0)
			{
				header("location:admin.php?mod=group&act=manage");
			}
		}
	}
?>