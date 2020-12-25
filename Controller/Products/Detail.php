<?php
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		include_once("Model/Products.php");
		$pro = new Products();
		$tang = $pro->updateView($id);
		$res = $pro->detailProduct($id);
		$newproducts = $pro->getProducts1();
		// if($res){
			$categoryID = $res['CategoryID'];
			// echo $categoryID;
			$resOther = $pro->getCategoryOther($id,$categoryID);
			// echo var_dump($resOther);
			include_once("View/Products/Detail.php");
		// } 
	}
?> 