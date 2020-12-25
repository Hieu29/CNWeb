<?php
	include_once("Model/User.php");
	$user = new User();
	$check = true;
	if(isset($_SESSION["lgUserID"])){
		$id = $_SESSION["lgUserID"];
		$row = $user->getUserById($id);
		if($row<=0){
			$username=$_SESSION["lgUserID"];
			$row=$user->getUserByUserName($username); 
			if($row>0){
				$check = false;
				include_once ("View/User/About.php");
			}
		}
		else{
			include_once ("View/User/About.php");
		}
		
	}
	else{
		header("location: Login.php");
	}
?>