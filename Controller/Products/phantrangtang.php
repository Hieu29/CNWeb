<?php
include_once("../../Model/Products.php");
$sl = 0;
	if(isset($_REQUEST['sl'])){
		$sl = $_REQUEST['sl'];
	}
$trang = 0;
	if(isset($_REQUEST['trang'])){
		$trang = $_REQUEST['trang'];
	}
	
	$pro = new Products();	
	$count = $pro->CountProducts();//đếm 10 sản phẩm
	define("MAX",$count);

	
$ketthuc = $sl;

if($_REQUEST['statusTang']==true){
	$trang = $trang+1;

	if($trang==1){
		$batdau = 1;
		$ketthuc = $batdau+$sl;
	}
	else{
		if($ketthuc<=MAX){
			$batdau = ($trang-1) * $sl+1;
			$ketthuc = $batdau + $sl;
			// echo "con". $sl ." || ". $trang . " || ".$batdau. " || ".$ketthuc . " || ".MAX;
			$r = $pro->GetProducts($batdau,$sl);
		}
	
	}
}
	// $rs = $pro->GetProducts($findStart,MAX);
	
	include_once("../../View/Products/showsanphamphantrang.php");

?>