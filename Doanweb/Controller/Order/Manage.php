<?php
	include_once("Model/Order.php");
	include_once("Model/OrderItem.php");
	$ord = new Order(); 
	$order = $ord->getOrders();
	$oi = new OrderItem();
	
	include_once("View/Order/Manage.php");
?>