<div>

<h2><span><a href="admin.php?mod=manufacturer&act=edit&id=<?php echo $id; ?>">Chỉnh sửa nhà cung cấp</a></span></h2>

<form action="admin.php?mod=manufacturer&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên nhà cung cấp</label><input type="text" name="txtManufacturerName" id="txtManufacturerName" value="<?php echo $row['ManufacturerName']; ?>"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>

</div>