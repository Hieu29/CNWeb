<div style="width: 780px; float: right; margin: 0 auto;">

<h2><span><a href="#">Sửa giỏ hàng</a></span></h2>
<p>
	<form method="post" action="index.php?mod=cart&act=edit&id=<?php echo $id; ?>" class="form" onSubmit="return IsEditCart()">
    	<p><label>Sản phẩm</label><input type="text" name="txtProduct" id="txtProduct" value="<?php echo $productName; ?>" readonly="readonly" style="margin-left: 15px;"/></p>
        <p><label>Số lượng</label><input type="text" name="txtQuantity" id="txtQuantity" value="<?php echo $quantity; ?>" style="margin-left: 18px;"></p>
        <p><label>&nbsp;</label><input type="submit" name="btnSave" id="btnSave" value="Lưu thay đổi" style="margin-left: 77px;"/></p>
        <p id="error" class="error"></p>
    </form>
</p>
</div>
