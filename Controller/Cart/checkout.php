<?php
// if(!isset($_REQUEST["Lastname"]) || !isset($_REQUEST["Firstname"]) || !isset($_REQUEST["Email"]) || !isset($_REQUEST["Phone"]) || !isset($_REQUEST["Address"])){
//   if(!isset($_REQUEST["Status"])){}
//     else{
//       echo "chuanhap"; 
//     }
  
// } 

if(isset($_REQUEST["Firstname"])&&isset($_REQUEST["Lastname"])&&isset($_REQUEST["Address"])&&isset($_REQUEST["Phone"])&&isset($_REQUEST["Email"])&& ($_REQUEST["Status"])==true){
		if($_REQUEST["Firstname"]!=null&&$_REQUEST["Lastname"]!=null&&$_REQUEST["Address"]!=null&&$_REQUEST["Phone"]!=null&&$_REQUEST["Email"]!=null){
    			echo "true";
    		}
}

if(isset($_GET["mod"])){
    include_once("View/Cart/checkout.php");
}
?>