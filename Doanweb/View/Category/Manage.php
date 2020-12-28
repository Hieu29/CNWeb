<br>	
<div style="width: 900px; float: right; margin-right: 50px;">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 30px"href="admin.php?mod=category&act=manage">Quản lý thể loại</a></h2></center>

	<table width="100%">
    <tr class="title"><th>Mã thể loại</th><th>Tên thể loại</th><th>Xóa</th><th>Sửa</th></tr>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['CategoryID']."</td><td>";
		echo $row['CategoryName']."</td><td>";
		echo "<a href=\"admin.php?mod=category&act=delete&id=$row[CategoryID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=category&act=edit&id=$row[CategoryID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>
<br>
<button style="background-color: #000"><a style="color: #fff;font-size: 15px" href="admin.php?mod=category&act=insert">Thêm</a></button>
</div> 