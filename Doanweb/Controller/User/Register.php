 <?php
	include_once("View/User/Register.php");
	include_once("Model/User.php");

	
	if(isset($_POST["btnRegister"])){
		$fullName = trim($_POST["txtFullName"]);
		$userName = trim($_POST["txtUserName"]);
		$passWord = trim($_POST["txtPassWord"]);
		$email = trim($_POST["txtEmail"]);
		// echo$fullName;
		// echo $email;
		if($fullName!="" && $userName!="" && $passWord!="" && $email!=""){
			// echo"YES ne";
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