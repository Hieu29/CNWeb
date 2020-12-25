<br>	
<div>
<h2><span><a href="admin.php?mod=order&act=manage">Quản lý đơn hàng</a></span></h2>
<p>
    <?php
    echo "<div style=\"width:300px;\">";
	foreach($order as $row)
	{
		$count = 0;
		echo "<p>Mã đơn hàng: $row[OrderID]</p>";
		echo "<p>Tên khách hàng: $row[FullName]</p>";
		echo "<p>Ngày đặt hàng: $row[AddedDate]</p>";
		$item = $oi->GetOrderItemByOrder($row['OrderID']);
		echo "<table class=\"table\">";
  		echo "<thead class=\"thead-dark\">";
		echo "<tr scope=\"col\"><td>Tên sản phẩm</td><td>Số lượng</td><td>Giá</td></tr>";
		$sum=0;
		foreach($item as $rowitem)
		{
			echo "<tr scope=\"col\"><td>";
			echo $rowitem['ProductName']."</td><td>";
			echo $rowitem['Quantity']."</td><td>";
			echo $rowitem['Price']."</td>";
			echo "</tr>";
			$sum+=$rowitem['Quantity']*$rowitem['Price'];
		}
		echo "</table>";
		echo "Tổng đơn hàng là: ".$sum. "(VNĐ)";
		echo "<br>";

		echo "<hr/>";
	}
	?>
    </table>
	</div>
</p>
</div>