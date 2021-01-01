<?php
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		include_once("Model/Products.php");
		$pro = new Products();
		$res = $pro->detailProduct($id);
		$newproducts = $pro->getProducts1();
		if($res){
			$categoryID = $res['CategoryID'];
			$resOther = $pro->getCategoryOther($id,$categoryID);
			include_once("View/Products/Detail.php");
		} 
	}
	else echo "<br><center><h3>Vui lòng chọn 1 sản phẩm bất kỳ để xem thông tin chi tiết!</h3><center><br>"
?> 