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

$batdau = 1;
$ketthuc = $sl;

if($_REQUEST['statusGiam']==true){
	// echo $sl;
	$trang = $trang -1;
	// echo $trang;
	if($trang>=1){
		// echo $sl ." || ". $trang;
		if($trang==1){
			$batdau = 1;
			$ketthuc = $sl;
			$r = $pro->GetProducts($batdau,$sl);
		}

		if($trang!=1){
			$batdau = ($trang* $sl) -$sl;
			$ketthuc = $batdau + $sl;
			echo $batdau ."||".$ketthuc;
			$r = $pro->GetProducts($batdau,$sl);
		}
	}
}
	
	

	
	// $rs = $pro->GetProducts($findStart,MAX);
	
	include_once("../../View/Products/showsanphamphantrang.php");

?>