<?php
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		include_once("Model/Products.php");
		include_once("Model/Cart.php");
		$cart = new Cart();
		$pro = new Products();
		$product = $pro->getProductById($id);
		$productName = $product['ProductName'];
		$quantity = $_SESSION['mycart'][$id];
		include_once("View/Cart/Edit.php");
		if(isset($_POST['btnSave'])){
			$quantity = $_POST['txtQuantity'];
			if(is_numeric($quantity)){
				$cart->UpdateCart($id,$quantity);
				header("location:index.php?mod=cart&act=detail");
			}
		}
	}
	include_once("Controller/Products/New.php");
?>