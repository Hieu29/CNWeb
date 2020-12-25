<?php
// if(isset($_REQUEST['soluong'])){
if(isset($_REQUEST['soluong']))
{
$soluong = $_REQUEST['soluong'];
	include_once ("../../Model/Products.php");
	$pro = new Products();
	// $soluong = $_REQUEST['soluong'];
	$r =  $pro->GetProducts(0,$soluong);
	if($r!=null){
		include_once("../../View/Products/GetProducts.php");
	}
}
// }
?>