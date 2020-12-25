<?php
	include_once("Model/DataProvider.php");
	class Category{
		private $da; //biến kết nối dữ liệu
		function __construct(){
			$this->da=new DataProvider();
		}
		function getCategoryManage(){
			$sql = "Select * from categories";
			return $this->da->FetchAll($sql);
		}
		function getCategory(){
			$sql= "Select * from categories";
			return $this->da->FetchAll($sql);
			
		}
		function GetCategoryByID($id){
			$sql="Select * from categories where CategoryID='$id' order by CategoryName";
			return $this->da->Fetch($sql);
		}
		function InsertCategory($categoryName){
			$sql="Insert into categories (CategoryName) Values('$categoryName')";
			return $this->da->ExecuteQuery($sql);
		}
		function UpdateCategory($id,$categoryName){
			$sql="Update categories set CategoryName='$categoryName' where CategoryID=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function DeleteCategory($id){
			$sql="Delete from categories where CategoryID=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function getCateName($cateID){
			$sql = "SELECT CategoryName FROM categories WHERE CategoryID=$cateID";
			return $this->da->Fetch($sql);
		}
		function __destruct(){
			unset($this->da);
		}
	}
?>