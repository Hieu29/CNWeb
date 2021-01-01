<?php
include_once("DataProvider.php");
class OrderItem{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}
	function GetOrderItemByOrder($orderID){
		$sql="Select orderitems.ProductID,ProductName,Price, orderitems.Quantity from orderitems inner join products on orderitems.ProductID=products.ProductID where OrderID=$orderID";
		return $this->da->FetchAll($sql);
	}
	function InsertOrderItem($orderID,$id,$quantity){
		$sql="Insert into orderitems (OrderID,ProductID,Quantity) values($orderID,$id,$quantity)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteOrderItem($orderID){
		$sql="Delete from orderitems where OrderID=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>