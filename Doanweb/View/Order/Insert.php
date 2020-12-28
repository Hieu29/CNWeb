<div style="width: 400px; margin: 0 auto;">
<h2><span><a href="index.php?mod=order&act=add">Đặt hàng</a></span></h2>
  <p>
  	<form class="form" method="post" action="index.php?mod=order&act=add" onSubmit="return IsInsertOrder()">
        <p><label>Địa chỉ nhận hàng (*)</label><input type="text" name="txtAddress" id="txtAddress" style="margin-left:5px;" /></p>
        <p><label>Số điện thoại (*)</label><input type="text" name="txtPhone" id="txtPhone" style="margin-left:39px;"/></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" style="margin-left:140px;"/></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>
<?php
	include_once("Controller/Cart/Detail.php");
?> 