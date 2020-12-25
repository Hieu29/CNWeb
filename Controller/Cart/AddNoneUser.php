<?php
	if(isset($_GET['id'])){
		include_once("../../Model/Cart.php");
		$id=$_GET['id'];
		Cart::InsertCart($id);
		include_once("../../Model/Products.php");
		$pro = new Products();
		$pro->updateQuantity($id);
		echo count($_SESSION['mycart']);
	}
?>