<?php


	if(isset($_SESSION["lgUserID"]) && isset($_SESSION["mycart"])){
		include_once("View/Order/Insert.php");
		if(isset($_POST['btnSave'])){
			include_once("Model/Order.php");
			include_once("Model/OrderItem.php");
			include_once("Model/Products.php");
			$order = new Order();
			$product = new Products();
			$orderItem = new OrderItem();

			$address = $_POST['txtAddress'];
			$phone = $_POST['txtPhone'];

			$orderID = $order->InsertOrder($_SESSION['lgUserID'],$address,$phone);

			if($orderID>0){
				$sum=0;
				foreach ($_SESSION["mycart"] as $key => $value) {
					$row = $product->getProductById($key);	
					$price = $row['Price'];	
					$sum += $value*$price;
					$orderItem->InsertOrderItem($orderID,$key,$value);
				}
				// echo $orderID."<br>";
				$order->UpdateSum($orderID,$sum);
				unset($_SESSION['mycart']);
				
				header("location: index.php");
			}
		}
	}
	else{
		include_once("View/User/Login.php");
	}
?> 