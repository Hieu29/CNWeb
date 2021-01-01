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
			$sql="Select * from categories where CategoryID='$id' order by Position";
			return $this->da->Fetch($sql);
		}
		function InsertCategory($categoryName,$position){
			$sql="Insert into categories (CategoryName,Position) Values('$categoryName',$position)";
			return $this->da->ExecuteQuery($sql);
		}
		function UpdateCategory($id,$categoryName,$position){
			$sql="Update categories set CategoryName='$categoryName',Position=$position where CategoryID=$id";
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