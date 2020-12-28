<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><span><a href="admin.php?mod=products&act=insert">Thêm sản phẩm</a></span></h2>

  	<form class="form" method="post" action="admin.php?mod=products&act=insert" enctype="multipart/form-data">
        <p><label>Tên sản phẩm (*)</label><input type="text" name="txtProductName" id="txtProductName" style="margin-left: 10px;" /></p>
        <p><label>Nhà cung cấp (*)</label>
        <select name="slManufacturer" style="margin-left: 10px;">
        	<option value="0">Chọn nhà cung cấp</option>
            <?php
				foreach($manu as $row)
				{
					echo "<option value=\"$row[ManufacturerID]\" >$row[ManufacturerName]</option>";
				}
			?>
        </select></p>
        <p><label>Thể loại (*)</label>
        <select name="slCategory" style="margin-left: 50px;">
        	<option value="0">Chọn thể loại</option>
            <?php
				foreach($cate as $row)
				{
					echo "<option value=\"$row[CategoryID]\" >$row[CategoryName]</option>";
				}
			?>
        </select></p>
        
        <p><label>Giá (*)</label><input type="text" name="txtPrice" id="txtPrice" value="0" style="margin-left: 85px;"/></p>
        <p><label>Số lượng (*)</label><input type="text" name="txtQuantity" id="txtQuantity" value="0" style="margin-left: 44px;"/></p>
        <p><label>Ảnh hiển thị</label><input type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file" style="margin-left: 125px;"/></p>
        <p><label>Mô tả</label></p>
        <textarea name="txtDescription" cols="60" ></textarea>
        <p>Chi tiết</p>
        <textarea id="txtBody" name="txtBody" cols="60" rows="5" ></textarea>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave"/></p>
        
        <p id="error" class="error"></p>
    </form>
</div>