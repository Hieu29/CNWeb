<?php
	if(isset($_POST["btnLogin"]))
	{
		$userName=trim($_POST["txtUserName"]);
		$passWord=trim($_POST["txtPassWord"]);
		if($userName!="" && $passWord!="")
		{
			include_once("Model/User.php");
			$user = new User();
			$row=$user->Login($userName,$passWord);
			if($row)
			{
				$_SESSION["lgUserName"]=$userName;
				$_SESSION["lgUserID"]=$row["UserID"];
				$_SESSION["lgGroupID"]=$row["GroupID"];
				$message = "Chào mừng ".$userName." đến với shop";
			echo "<script type='text/javascript'>alert('$message');window.location='index.php';</script>";
				// header("location: index.php");
			}
			else
			{

			    $message = "Tên đăng nhập hoặc mật khẩu không đúng!";
				echo "<script type='text/javascript'>alert('$message');window.history.go(-1);</script>";
			}
		}
	}
?>