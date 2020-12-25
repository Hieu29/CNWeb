<?php
	include_once("Model/Group.php");
	$group = new Group();
	include_once("View/Group/Insert.php");
	if(isset($_POST['btnSave']))
	{
		$groupName = $_POST['txtGroupName'];
		if($groupName != "")
		{
			$ret=$group->InsertGroup($groupName);
			if($ret>0)
			{
				header("location:admin.php?mod=group&act=manage");
			}
			else
				echo "<p class=\"error\">Thêm bị lỗi</p>";
		}
		echo "<p class=\"error\">Dữ liệu không hợp lệ</p>";
	}
?>