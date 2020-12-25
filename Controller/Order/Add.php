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
			echo $_SESSION["total"];
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
				$message = "Đặt hàng thành công!";
			echo "<script type='text/javascript'>alert('$message');window.location='index.php';</script>";
				// header("location: index.php");
			}
		}
	}
	else{
		// echo "chua dang nhap";
		$Firstname = $_POST["Firstname"];
		$Lastname = $_POST["Lastname"];
		$Email = $_POST["Email"];
		$Phone = $_POST["Phone"];
		$Address = $_POST["Address"];

		if($Firstname==null||$Lastname==null||$Email==null|$Phone==null||$Address==null){
			$message = "Vui lòng nhập đầy đủ thông tin!";
			echo "<script type='text/javascript'>alert('$message');window.history.go(-1)</script>";
		}
		else{

			include_once("Model/Order.php");
			include_once("Model/OrderItem.php");
			include_once("Model/Products.php");
			$order = new Order();
			$product = new Products();
			$orderItem = new OrderItem();

			$grID=4;
			//nsertOrderNoneUser($fname,$lname,$email,$address,$phone){
			$orderID = $order->InsertOrderNoneUser($Firstname,$Lastname,$Email,$Address,$Phone);
			
			if($orderID>0){
				echo "đã vô";
				$sum=0;
				foreach ($_SESSION["mycart"] as $key => $value) {
					$row = $product->getProductById($key);	
					$price = $row['Price'];	
					$sum += $value*$price;
					$orderItem->InsertOrderItem($orderID,$key,$value);
				}
				// echo $orderID."<br>";
				$order->UpdateSumNoneUser($orderID,$sum);
				unset($_SESSION['mycart']);
				$message = "Đặt hàng thành công!";
			echo "<script type='text/javascript'>alert('$message');window.location='index.php';</script>";
				// header("location: index.php");
			}
		
		}
	}	
?> 