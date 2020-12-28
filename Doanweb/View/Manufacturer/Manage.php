<br>	
<div style="width: 900px; float: right; margin-right: 50px;">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 30px" href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></h2></center>

	<table width="100%">
    <tr class="title"><th>Mã nhà cung cấp</th><th>Tên nhà cung cấp</th><th>Xóa</th><th>Sửa</th></tr>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['ManufacturerID']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=delete&id=$row[ManufacturerID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=edit&id=$row[ManufacturerID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>
<br>
<button style="background-color: #000"><a style="color: #fff;font-size: 15spx" href="admin.php?mod=manufacturer&act=insert">Thêm</a></button>
</div> 