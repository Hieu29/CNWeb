<?php
	require_once("../../Model/Products.php");
	
	if(!empty($_POST["keyword"])) {
		
		$pro = new Products();

		$r = $pro->Search($_POST["keyword"]);

		include_once("../../View/Products/SearchDetail.php");
	}	 
?>