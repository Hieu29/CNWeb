<?php
	include_once("Model/Order.php");
	include_once("Model/OrderItem.php");
	if(isset($_GET["id"])){
		$id=$_GET["id"];
	}
	$ord = new Order(); 
	$order = $ord->getOrdersById($id);
	$oi = new OrderItem();
	
	include_once("View/Order/chitiet.php");
?>