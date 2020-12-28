<div style="width: 700px; float: right; margin: 0 auto;">
<h2><span><a style="color: #ff6600;font-weight: bold;font-size: 28px" href="admin.php?mod=user&act=edit&id=<?php echo $id; ?>">Chỉnh thành viên</a></span></h2>

	<form action="admin.php?mod=user&act=edit&id=<?php echo $id; ?>" method="post" class="form">
    <p><label>Tên đăng nhập</label><input readonly="readonly" type="text" name="txtUserName" id="txtUserName" value="<?php echo $row['UserName']; ?>" style="margin-left: 10px"/></p>
    <p><label>Nhóm</label>
        <select name="slGroup" style="margin-left: 70px;">
            <?php
				foreach($ret as $rowgroup)
				{
					if($rowgroup['GroupID']==$row['GroupID'])
					{
						echo "<option value=\"$rowgroup[GroupID]\" selected=\"selected\" >$rowgroup[GroupName]</option>";
					}
					else
						echo "<option value=\"$rowgroup[GroupID]\" >$rowgroup[GroupName]</option>";
				}
			?>
        </select></p>
        <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="margin-left: 94px;" /></p>
    </form>

</div>