<?php
	if(isset($_POST["btnTimKiem"])){
		$name = $_POST["txtSearch"];
		if($name!=""){
			include_once("Model/Products.php");
			$pro = new Products();
			$result = $pro->Search($name);
			// echo var_dump($result);
			include_once("View/Products/Resultsearch.php");
		}
	}
?> 