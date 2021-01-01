<br>	
<div style="width: 900px; float: right; margin-right: 50px;">
<center><h2><a style="color: #ff6600;font-weight: bold;font-size: 30px" href="admin.php?mod=category&act=manage">Quản lý nhóm thành viên</a></h2></center>

	<table width="100%">
    <tr class="title"><th>Mã nhóm</th><th>Tên nhóm</th><th>Xóa</th><th>Sửa</th></tr>
    <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['GroupID']."</td><td>";
		echo $row['GroupName']."</td><td>";
		echo "<a href=\"admin.php?mod=group&act=delete&id=$row[GroupID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=group&act=edit&id=$row[GroupID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>

<button style="background-color: #000"><a style="color: #fff;font-size: 20px" href="admin.php?mod=group&act=insert">Thêm</a></button>
</div>