<?php
	
	foreach ($result as $row) {
			echo "<a href=\"index.php?mod=manufacturer&act=resultmanufacturer&id={$row['ManufacturerID']}\">{$row['ManufacturerName']}</a>";
	}

?>