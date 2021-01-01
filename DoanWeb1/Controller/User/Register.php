 <?php
	include_once("View/User/Register.php");
	include_once("Model/User.php");

	
	if(isset($_POST["btnRegister"])){
		$fullName = trim($_POST["txtFullName"]);
		$userName = trim($_POST["txtUserName"]);
		$passWord = trim($_POST["txtPassWord"]);
		$email = trim($_POST["txtEmail"]);
		if($fullName!="" && $userName!="" && $passWord!="" && $email!=""){
			$user = new User();
			$res = $user->createNewUser($fullName,$userName,$passWord,$email);
			if($res){
				header("location: index.php");
			}
			else{
				echo "<p class=\"error\">Tên đăng nhập bị trùng<p>";
			} 
		}
	}
?> 