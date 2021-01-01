<?php
    foreach ($result as $row) {
    	echo "<li><a href=\"index.php?mod=category&act=resultcategory&id={$row['CategoryID']}\">{$row['CategoryName']}</a></li>";
    }
?>