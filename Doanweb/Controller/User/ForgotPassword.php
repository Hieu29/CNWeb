<?php
	include_once("Model/User.php");
	$user = new User();
	//$id=$_SESSION['lgUserID'];
	//$row=$user->getUserById($id);
	include_once("View/User/ForgotPassword.php");
	if(isset($_POST['btnChange']))
	{
		$new = $_POST['txtPass'];
		$ret=$user->ForgotPassword($id,$new);
		if($ret > 0)
		{
			unset($_SESSION["lgUserName"]);
			unset($_SESSION["lgUserID"]);
			unset($_SESSION["lgGroupID"]);
			header("location: index.php?mod=user&act=login");
			echo "<p class=\"error\"><center style=\"color:red;font-size:20px;\"><b>Khôi phục mật khẩu thành công</b></center><p>";
		}
		else
			echo "<p class=\"error\"><center style=\"color:red;font-size:20px;\"><b>Cập nhật thất bại</b></center><p>";
	}
?>