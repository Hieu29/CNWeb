<br>	
<div>
<h2><a href="admin.php?mod=category&act=manage">Quản lý nhóm thành viên</a></h2>

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

<p class="btn-more box noprint"><strong><a href="admin.php?mod=group&act=insert">Thêm</a></strong></p>
</div>