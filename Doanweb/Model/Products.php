<?php
	include_once("DataProvider.php");
	class Products{ 
		private $da;
		function __construct(){
			$this->da = new DataProvider();
		}
		function getProductById($id){
			$sql = "Select CategoryID,ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from products where ProductID = $id";
			return $this->da->Fetch($sql);
		}
		function getProductsByCateID($cateID){
			$sql = "SELECT * FROM products WHERE CategoryID=$cateID";
			return $this->da->FetchAll($sql);
		}
		function getProductsByManuID($ManuID){
			$sql = "Select * from products where ManufacturerID = $ManuID";
			return $this->da->FetchAll($sql);
		}
		function GetProducts($start,$end){
			$sql="Select ProductID,ProductName,ImageUrl,Price,Quantity from products order by ProductID desc limit $start,$end";
			return $this->da->FetchAll($sql);
		}
		function getProducts1(){
			$sql="Select * from products";
			return $this->da->FetchAll($sql);
		}
		function getProductsByPrice($type){
			if($type=="asc"){
				$sql="Select * from products order by Price";
			}
			else{
				$sql="Select * from products order by Price desc";
			}
			return $this->da->FetchAll($sql);
		}
		function CountProducts(){
			$sql="Select ProductID from products";
			return $this->da->NumRows($sql);
		}
		function Search($txtSearch){
			$sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity from products where ProductName like '%$txtSearch%' or Price like '%$txtSearch%'";
			return $this->da->FetchAll($sql);
		}
	 	function getAllOther(){
			$sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity from products where CategoryID =2 or (CategoryID>3 and CategoryID <>5)";
			return $this->da->FetchAll($sql);
		}
		function detailProduct($id){
			$sql = "Select CategoryID,ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from products where ProductID = $id";
			return $this->da->Fetch($sql);
		}
		function getCategoryOther($id,$CategoryID){
			$sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from products where ProductID <> $id and CategoryID = $CategoryID";
			return $this->da->FetchAll($sql);
		}
		function getProductsManage(){
			$sql = "Select ProductID, ProductName, ImageUrl, Price, Quantity, ManufacturerName, CategoryName from products p join Categories c on p.CategoryID=c.CategoryID join Manufacturers m on p.ManufacturerID=m.ManufacturerID order by ProductID";
			return $this->da->FetchAll($sql); 
		}
		function DeleteProducts($id){
			$sql = "Delete from products where ProductID=$id";
			return $this->da->ExecuteQuery($sql);
		}
		function InsertProduct($manuID,$cateID,$proName,$Image,$Price,$Quantity,$Description,$Body){
			$sql = "Insert into products(ManufacturerID,CategoryID,ProductName,ImageUrl,Price,Quantity,Description,Body) values ($manuID,$cateID,'$proName','$Image',$Price,$Quantity,'$Description','$Body')";

			return $this->da->ExecuteQuery($sql);
		}
		function UpdateProduct($productID,$manufacturerID,$categoryID,$productName,$price,$quantity,$description,$body,$imageUrl=""){
			if($imageUrl=="")
			{
				$sql="Update products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName',Price=$price,Quantity=$quantity, Description='$description', Body='$body' where ProductID=$productID";
			}else
				$sql="Update products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName', ImageUrl='$imageUrl', Price=$price, Quantity=$quantity, Description='$description', Body='$body' where ProductID=$productID";
			return $this->da->ExecuteQuery($sql);
		}
		function __destruct(){
			unset($this->da);
		}
	}
?>