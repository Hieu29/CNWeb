<?php
include_once("DataProvider.php");
class UserFacebook{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function ok(){
		echo "ok";	
	}
	function Login($user,$pass){
		$sql = "SELECT * FROM users WHERE  UserName = '".$user."' AND PassWord = '". md5($pass)."'";
		return $this->da->Fetch($sql);
	}
	
	function __destruct(){
		unset($this->da);
	}
}
?>