<?php
	include_once("Model/Order.php");
	$order = new Order();
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$ret=$order->DeleteOrder($id);
		if($ret>0)
		{
			header("location:admin.php?mod=order&act=manage");
		}
	}
?>