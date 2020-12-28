<br>	
<div style="width: 900px; float: right;margin-right: 50px">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 30px;"href="admin.php?mod=order&act=manage">Quản lý đơn hàng</a></h2></center>
<p>
    <?php
    echo "<div style=\"width:500px;margin-left:100px\">";
	foreach($order as $row)
	{
		$count = 0;
		echo "<p>Mã đơn hàng: $row[OrderID]</p>";
		echo "<p><b>Tên khách hàng: $row[FullName]</b></p>";
		echo "<p><b>Ngày đặt hàng: $row[AddedDate]</b></p>";
		$item = $oi->GetOrderItemByOrder($row['OrderID']);
		echo "<table>";
		echo "<tr><th>Tên sản phẩm</th><th> Số lượng</th><th> Giá</th></tr>";
		$sum=0;
		foreach($item as $rowitem)
		{
			echo "<tr><td>";
			echo $rowitem['ProductName']."</td><td>";
			echo $rowitem['Quantity']."</td><td>";
			echo number_format($rowitem['Price'],0)."VND</td>";
			echo "</tr>";
			$sum+=$rowitem['Quantity']*$rowitem['Price'];
		}
		echo "</table>";
		echo "<b>Tổng đơn hàng là: ".number_format($sum,0). "</b> (VND)";
		echo "<br>";
		echo "<a href=\"admin.php?mod=order&act=delete&id=$row[OrderID]\" onclick=\"return IsDelete()\">Xóa đơn hàng<img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<hr/>";
	}
	?>
    </table>
	</div>
</p>
</div>