<br>	
<div>
<h2><a href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></h2>

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

<p class="btn-more box noprint"><strong><a href="admin.php?mod=manufacturer&act=insert">Thêm</a></strong></p>
</div> 