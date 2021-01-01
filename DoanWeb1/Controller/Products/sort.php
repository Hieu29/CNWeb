<?php
include_once("../../Model/Products.php");
include_once ("../../Model/Pages.php");
$pro = new Products();
if(isset($_REQUEST['value'])){
    $type=$_REQUEST['value'];
    if($_REQUEST['value']='asc'){
        $rs = $pro->getProductsByPrice($type);
    }
}
include_once("../../View/Products/products.php");
?>