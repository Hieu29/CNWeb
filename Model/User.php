<?php
include_once("DataProvider.php");
class User{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}

	function getUserFb($id){
		$sql = "SELECT * FROM users WHERE UserName = $id";
		return $this->da->Fetch($sql);
	}
	
	function saveUserFacebook($id,$fullname,$email){
		$sql = "Insert into users(GroupID,FullName,UserName,Email) values (3,'$fullname','$id','$email')";
		echo $sql;
		return $this->da->ExecuteQuery($sql);
	}
	function Login($user,$pass){
		$sql = "SELECT * FROM users WHERE  UserName = '".$user."' AND PassWord = '". md5($pass)."'";
		return $this->da->Fetch($sql);
	}
	function createNewUser($fullName,$userName,$passWord,$email){
		$sql = "Insert into users(GroupID,FullName,UserName,PassWord,Email) values (3,'$fullName','$userName',md5('$passWord'),'$email')";
		return $this->da->ExecuteQuery($sql);
	}
	function getUserByUserName($user){
		$sql = "SELECT * FROM users WHERE UserName = '$user'";
		// echo $sql;
		return $this->da->Fetch($sql);
	}
	
	function getUserById($id){
		$sql = "SELECT * FROM users WHERE UserID = $id";
		return $this->da->Fetch($sql);
	}
	function getUserManage(){
		$sql = "Select UserID, FullName, UserName, Email, GroupName from users u join groups g on u.GroupID = g.GroupID";
		return $this->da->FetchAll($sql);
	}
	function DeleteUser($id){
		$sql = "Delete from users where UserID=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function EditUser($userID,$groupID){
		$sql="Update users set GroupID=$groupID where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateUser($userID,$fullName,$email){
		$sql="Update users set FullName='$fullName',Email='$email' where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function ChangePassWord($userID,$newPassWord,$oldPassWord){
		$sql="Select UserID from users where UserID=$userID and PassWord=md5('$oldPassWord')";
		$ret = $this->da->NumRows($sql);
		if($ret==0)
			return 0;
		$sql="Update users set PassWord=md5('$newPassWord') where UserID=$userID";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>