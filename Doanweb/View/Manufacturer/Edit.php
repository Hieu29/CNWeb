<div style="width: 700px; float: right; margin: 0 auto;">

<h2><span><a style="color: #ff6600;font-weight: bold;font-size: 28px" href="admin.php?mod=manufacturer&act=edit&id=<?php echo $id; ?>">Chỉnh sửa nhà cung cấp</a></span></h2>

<form action="admin.php?mod=manufacturer&act=edit&id=<?php echo $id; ?>" method="post" class="form">
	<p><label>Tên nhà cung cấp</label><input style="margin-left: 10px" type="text" name="txtManufacturerName" id="txtManufacturerName" value="<?php echo $row['ManufacturerName']; ?>"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></p>
</form>

</div>