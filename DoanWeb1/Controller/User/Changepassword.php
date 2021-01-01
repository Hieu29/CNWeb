<?php
	include_once("Model/User.php");
	$user = new User();
	$id=$_SESSION['lgUserID'];
	$row=$user->getUserById($id);
	include_once("View/User/Changepassword.php");
	if(isset($_POST['btnChange']))
	{
		$old = $_POST['txtOldPass'];
		$new = $_POST['txtPass'];
		$ret=$user->ChangePassWord($id,$new,$old);
		if($ret > 0)
		{
			unset($_SESSION["lgUserName"]);
			unset($_SESSION["lgUserID"]);
			unset($_SESSION["lgGroupID"]);
			header("location: index.php?mod=user&act=login");
		}else
			echo "<p class=\"error\"><center style=\"color:red;font-size:20px;\"><b>Mật khẩu cũ không đúng</b></center><p>";
	}
?>