<div style="width: 700px; float: right; margin-le: 20px">
<h2><a style="color: #ff6600;font-weight: bold;font-size: 28px" href="admin.php?mod=products&act=edit&id=<?php echo $id; ?>">Chỉnh sửa sản phẩm</a></h2>

<div style="min-height: 400px"> 
		<form action="admin.php?mod=products&act=edit&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data" >
			<table>
				<tr>
					<th>Tên nhà sản phẩm</th>
					<td><input type="text" name="txtProductName" id="txtProductName" value="<?php echo $row['ProductName']; ?>"/></td>
				</tr>
				<tr>
					<th>Nhà cung cấp (*)</th>
					<td>
						<select name="slManufacturer">
				            <?php
								foreach($manu as $rowmanu)
								{
									if($rowmanu['ManufacturerID']==$row['ManufacturerID'])
									{
										echo "<option value=\"$rowmanu[ManufacturerID]\" selected=\"selected\" >$rowmanu[ManufacturerName]</option>";
									}
									else
										echo "<option value=\"$rowmanu[ManufacturerID]\" >$rowmanu[ManufacturerName]</option>";
								}
							?>
				        </select>
			    	</td>
				</tr>
				<tr>
					<th>Thể loại (*)</th>
					<td>
				        <select name="slCategory">
				            <?php
								foreach($cate as $rowcate)
								{
									if($rowcate['CategoryID']==$row['CategoryID'])
									{
										echo "<option value=\"$rowcate[CategoryID]\" selected=\"selected\" >$rowcate[CategoryName]</option>";
									}else{
										echo "<option value=\"$rowcate[CategoryID]\" >$rowcate[CategoryName]</option>";
									}
								}
							?>
				        </select>
			    	</td>
				</tr>

				<tr>
					<th>Giá (*)</th>
					<td><input type="text" name="txtPrice" id="txtPrice" value="<?php echo $row['Price']; ?>" /></td>
				</tr>
				<tr>
					<th>Số lượng (*)/th>
					<td><input type="text" name="txtQuantity" id="txtQuantity" value="<?php echo $row['Quantity']; ?>" /></td>
				</tr>
				<tr>
					<th>Ảnh</th>
					<td><img src="Upload/<?php echo $row['ImageUrl'] ?>" width="100" /></td>
				</tr>
				<tr>
					<td><input type="file" name="txtImageUrl" id="txtImageUrl"/></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<th>Mô tả</th>
					<td><textarea name="txtDescription"><?php echo $row['Description']; ?></textarea></td>
				</tr>
				<tr>
					<th>Chi tiết</th>
					<td><textarea id="txtBody" name="txtBody" cols="50" rows="5"></textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>