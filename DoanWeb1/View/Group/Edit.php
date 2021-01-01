<div style="width: 700px; float: right; margin: 0 auto;">

<h2><span><a style="color: #ff6600;font-weight: bold;font-size: 28px" href="admin.php?mod=group&act=edit&id=<?php echo $id; ?>">Chỉnh sửa nhóm thành viên</a></span></h2>

<form action="admin.php?mod=group&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên nhóm</label><input style="margin-left: 10px" type="text" name="txtGroupName" id="txtGroupName" value="<?php echo $row['GroupName']; ?>"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>

</div>