<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		include_once("Model/User.php");
		$user = new User();
		$row = $user->getUserById($id);
		include_once("Model/Group.php");
		$group=new Group();
		$ret = $group->GetGroups();
		include_once("View/User/Edit.php");
		if(isset($_POST['btnChange']))
		{
			$groupID = $_POST['slGroup'];
			$ret=$user->EditUser($id,$groupID);
			if($ret>0)
			{
				header("location:admin.php?mod=user&act=manage");
			}
		}
	}
?>