<?php
	include_once("Model/Order.php");
	include_once("Model/OrderItem.php");
	if(isset($_SESSION["lgUserID"])){
		$id=$_SESSION["lgUserID"];
		$ord = new Order(); 
		$order = $ord->getOrdersByUserId($id);
		$oi = new OrderItem();
		
		include_once("View/Order/history.php");
	}

	
?>