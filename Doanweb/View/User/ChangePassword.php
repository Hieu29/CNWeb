<div style="width: 500px;margin: 0 auto; margin-top: 20px;border: 5px double">
<center><h2><a style="font-weight: bold; font-size: 28px;margin-top: 30px;color:#ff6600" href="index.php?mod=user&act=login">Đổi mật khẩu</a></h2></center>
<p>
<form action="index.php?mod=user&act=changepassword" method="post" class="form" onSubmit="return IsChangePass()">
	<p style="margin-left: 88px"><label>Mật khẩu cũ</label><input type="password" name="txtOldPass" id="txtOldPass" style="margin-left:55px;"/></p>
    <p style="margin-left: 88px"><label>Mật khẩu mới</label><input type="password" name="txtPass" id="txtPass" style="margin-left:45px;"/></p>
    <p style="margin-left: 88px"><label>Mật khẩu xác nhận</label><input type="password" name="txtPrePass" id="txtPrePass" style="margin-left:10px;"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="margin-left:168px;font-weight: bold;background-color: #000"/></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>