
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
			echo "<h4 class=\"text-center\">Mật khẩu cũ không đúng</h4>";
	}
?>