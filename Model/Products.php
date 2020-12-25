<?php
	include_once("DataProvider.php");
	class Products{ 
		private $da;
		function __construct(){
			$this->da = new DataProvider();
		}

		function getCode($date){
			$sql = "select * from discount where Date = '$date'";
			return $this->da->Fetch($sql);
		}

		function GetProductsSortByName(){
			$sql = "Select * from products order by products.ProductName";
			return $this->da->ExecuteQuery($sql);
		}

		function GetProductsSortByPrice(){
			$sql = "Select * from products order by products.Price";
			return $this->da->ExecuteQuery($sql);
		}

		function updateQuantity($id){
			$sql = "update products set Quantity = Quantity-1 where ProductID=$id";
			return $this->da->ExecuteQuery($sql);
		}

		function updateView($id){
			$sql = "update products set ViewCount = ViewCount+1 where ProductID=$id";
			return $this->da->ExecuteQuery($sql);
		}

		function getProductWithViewCountTheBest(){
			$sql="Select * from products order by ViewCount desc";
			return $this->da->FetchAll($sql);
		}

		function getProductById($id){
			$sql = "Select * from products where ProductID = $id";
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
			$sql="Select * from products order by ProductID desc limit $start,$end";
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
			$sql = "Select * from products where ProductName like '%$txtSearch%' or Price like '%$txtSearch%'";
			return $this->da->FetchAll($sql);
		}
	 	function getAllOther(){
			$sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity from products where CategoryID =2 or (CategoryID>3 and CategoryID <>5)";
			return $this->da->FetchAll($sql);
		}
		function detailProduct($id){
			$sql = "Select * from products where ProductID = $id";
			return $this->da->Fetch($sql);
		}
		function getCategoryOther($id,$CategoryID){
			$sql = "Select * from products where ProductID <> $id and CategoryID = $CategoryID";
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
			$sql = "Insert into products(ManufacturerID,CategoryID,ProductName,ImageUrl,Price,Quantity,Description,StatusHeader) values ($manuID,$cateID,'$proName','$Image',$Price,$Quantity,'$Description','$Body')";
			echo $sql;
			return $this->da->ExecuteQuery($sql);
		}
		function UpdateProduct($productID,$manufacturerID,$categoryID,$productName,$price,$quantity,$description,$body,$imageUrl=""){
			if($imageUrl=="")
			{
				$sql="Update products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName',Price=$price,Quantity=$quantity, Description='$description', StatusHeader='$body' where ProductID=$productID";
			}else
				$sql="Update products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName', ImageUrl='$imageUrl', Price=$price, Quantity=$quantity, Description='$description', StatusHeader='$body' where ProductID=$productID";
			return $this->da->ExecuteQuery($sql);
		}
		function __destruct(){
			unset($this->da);
		}
	}
?>