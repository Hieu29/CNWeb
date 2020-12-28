<?php
	session_start();
	if(isset($_GET['id'])){
		include_once("../../Model/Cart.php");
		$id=$_GET['id'];
		Cart::InsertCart($id);
		echo count($_SESSION['mycart']);
	}
?>