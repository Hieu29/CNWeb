<div style="width: 500px;margin: 0 auto; margin-top: 20px;border: 5px double">
<h2><center><a style="color: #ff6600;font-size: 25px;font-weight: bold;" href="index.php?mod=user&act=login">Đổi thông tin cá nhân</a></center></h2>
<p>
<form action="index.php?mod=user&act=update" method="post" class="form" onsubmit="return IsUpdateUser()">
	<p style="margin-left: 88px"><label>Họ tên</label><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row['FullName']; ?>" size="30" style="margin-left: 20px;"/></p>
 
    <p style="margin-left: 88px"><label>Email</label><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row['Email'] ?>" size="30" style="margin-left: 27px;"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="margin-left: 178px;font-weight: bold;background-color: #000"/></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>