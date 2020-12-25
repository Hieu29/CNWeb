<br>	
<div>
<center><h2><span><a href="admin.php?mod=user&act=manage">Quản lý thành viên</a></span></h2></center>
<p>
	<table width="100%">
    <tr class="title"><td>Họ tên</td><td>Tên đăng nhập</td><td>Nhóm</td><td>Email</td><td>Xóa</td><td>Sửa</td></tr>
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