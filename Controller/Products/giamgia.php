<?php
    if(isset($_REQUEST["code"]) && isset($_REQUEST["total"])){
        // echo $_REQUEST["total"];
        include_once("../../Model/Products.php");
        $pro = new Products();
        $date = date("Y-m-d");
        $code = $pro->getCode($date);
        // echo var_dump($code);
        if($code["Code"] == $_REQUEST["code"]){
            echo (integer)$_REQUEST["total"] - $code["Value"];
            // echo var_dump($_REQUEST["total"] );
        }
        else echo -9999;
    }   
    if(isset($_GET["mod"])){
        include_once("Model/Products.php");
        $pro = new Products();
        $date = date("Y-m-d");
        $code = $pro->getCode($date);
        $check = false;
        if($code>0){
            $check = true;
        }
        include_once("View/Cart/Detail.php");
    }
?>