<div>
<h2><span><a href="admin.php?mod=user&act=edit&id=<?php echo $id; ?>">Chỉnh thành viên</a></span></h2>

	<form action="admin.php?mod=user&act=edit&id=<?php echo $id; ?>" method="post" class="form">
    <p><label>Tên đăng nhập</label><input readonly="readonly" type="text" name="txtUserName" id="txtUserName" value="<?php echo $row['UserName']; ?>"/></p>
    <p><label>Nhóm</label>
        <select name="slGroup" style="margin-left: 54px;">
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