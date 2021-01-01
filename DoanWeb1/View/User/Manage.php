<div style="width: 900px; float: right; margin-right: 50px;">
<center><h2><span><a style="color: #ff6600;font-weight: bold;font-size: 30px" href="admin.php?mod=user&act=manage">Quản lý thành viên</a></span></h2></center>
<p>
	<table width="100%">
    <tr class="title"><th>Họ tên</th><th>Tên đăng nhập</th><th>Nhóm</th><th>Email</th><th>Xóa</th><th>Sửa</th></tr>
    <?php

	foreach($ret as $row)
	{
			echo "<tr><td>";
			echo $row['FullName']."</td><td>";
			echo $row['UserName']."</td><td>";
			echo $row['GroupName']."</td><td>";
			echo $row['Email']."</td><td>";
			echo "<a href=\"admin.php?mod=user&act=delete&id={$row["UserID"]}\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
			echo "<a href=\"admin.php?mod=user&act=edit&id={$row["UserID"]}\"><img src=\"Images/Edit.gif\" /></a>";
			echo "</td></tr>";
	}
	?>
    </table>
</p>
</div>