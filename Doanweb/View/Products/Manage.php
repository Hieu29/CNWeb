<div style="width: 900px; float: right;margin-right: 50px">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 25px" href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></h2></center><br>

	<table width="100%">
    <tr class="title"><th>Tên sản phẩm</th><th>Nhà cung cấp</th><th>Thể loại</th><th>Giá</th><th>Số lượng</th><th>Hình</th><th>Xóa</th><th>Sửa</th></tr>
    <?php

	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['ProductName']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo $row['CategoryName']."</td><td>";
		echo number_format($row['Price'],0)."VND</td><td>";
		echo $row['Quantity']."</td><td>";
		echo "<img src=\"Upload/$row[ImageUrl]\" width=\"30\" /></td><td>";
		echo "<a href=\"admin.php?mod=products&act=delete&id=$row[ProductID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=products&act=edit&id=$row[ProductID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>
<br>
<button style="background-color: #000"><a style="color: #fff;font-size: 20px" href="admin.php?mod=products&act=insert">Thêm</a></button>
</div> <!-- /article -->