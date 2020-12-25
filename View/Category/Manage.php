<br>	
<div>
<center><h2><a href="admin.php?mod=category&act=manage">Quản lý thể loại</a></h2></center>

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

<p class="btn-more box noprint"><strong><a href="admin.php?mod=category&act=insert">Thêm</a></strong></p>
</div> 