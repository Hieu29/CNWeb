<br>	
<div>
<center><h2><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></h2></center><br>

	<table width="100%">
    <tr class="title"><th>Tên sản phẩm</th><th>Nhà cung cấp</th><th>Thể loại</th><th>Giá</th><th>Số lượng</th><th>Hình</th><th>Xóa</th><th>Sửa</th></tr>
    <?php

	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['ProductName']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo $row['CategoryName']."</td><td>";
		echo "Giá ".number_format($row["Price"],0)." VND</td><td>";
		echo $row['Quantity']."</td><td>";
		echo "<img src=\"Upload/$row[ImageUrl]\" width=\"30\" /></td><td>";
		echo "<a href=\"admin.php?mod=products&act=delete&id=$row[ProductID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=products&act=edit&id=$row[ProductID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>

<p><strong><a href="admin.php?mod=products&act=insert">Thêm</a></strong></p>
</div> <!-- /article -->