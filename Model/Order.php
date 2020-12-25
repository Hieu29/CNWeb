<?php
include_once("DataProvider.php");
include_once("OrderItem.php");
class Order{
	private $da;
	function __construct(){
		$this->da = new DataProvider();
	}

	function getOrderDate($bd,$kt){
		$sql = "SELECT * FROM orders o join users u on o.UserID = u.UserID WHERE o.AddedDate>='$bd' and o.AddedDate<='$kt'";
		// echo $sql;
		return $this->da->FetchAll($sql);
	}
	function getOrdersByUserId($id){
		$sql = "Select * from orders o join users u on o.UserID = u.UserID where o.UserID=$id";
		return $this->da->FetchAll($sql);
	}

	function getOrdersById($id){
		$sql = "Select * from orders o join users u on o.UserID = u.UserID where OrderID=$id";
		return $this->da->FetchAll($sql);
	}

	function getOrders(){
		$sql = "Select * from orders o join users u on o.UserID = u.UserID";
		return $this->da->FetchAll($sql);
	}
	function InsertOrderNoneUser($fname,$lname,$email,$address,$phone){
		$sql="Insert into ordernoneuser(AddedDate,LastName,FirstName,Email,Address,Phone) values(now(),'$lname','$fname','$email','$address','$phone')";
		echo $sql;
		return $this->da->ExecuteQueryInsert($sql);
	}
	function InsertOrder($userID,$address,$phone){
		$sql="Insert into orders(UserID,AddedDate,Address,Phone) values('$userID',now(),'$address','$phone')";
		return $this->da->ExecuteQueryInsert($sql);
	}
	function UpdateSumNoneUser($orderID,$sum){
		$sql = "Update ordernoneuser set Sum = $sum where OrderNoneUserID = $orderID";
		echo $sql;
		return $this->da->ExecuteQuery($sql);	
	}

	function UpdateSum($orderID,$sum){
		$sql = "Update orders set Sum = $sum where OrderID = $orderID";

		return $this->da->ExecuteQuery($sql);	
	}
	function DeleteOrder($orderID){
		$item = new OrderItem();
		$item->DeleteOrderItem($orderID);
		$sql="Delete from orders where OrderID=$orderID";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct(){
		unset($this->da);
	}
}
?>