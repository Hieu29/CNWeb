<?php

	if(isset($_POST["btnthongke"])){
		$bd = $_POST["bd"];
		$kt = $_POST["kt"];
		// echo $kt;
		include_once("Model/Order.php");
		include_once("Model/OrderItem.php");
		$ord = new Order();
		$order = $ord->getOrderDate($bd,$kt);

		$oi = new OrderItem();
	

		include_once("View/Order/thongke.php");
		// location: "View/Order/thongke.php";
	}
	else
		echo "ko";
	
?>