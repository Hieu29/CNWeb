<div style="width: 500px;margin: 0 auto; margin-top: 20px;border: 5px double">
	<center><h2 style="font-weight: bold; font-size: 28px;margin-top: 30px;color:#ff6600">Thông tin cá nhân</h2></center>
	<table style="font-size: 18px;margin-left: 98px;">
	  <?php
	  	echo "<tr><td><b>Họ tên: </b></td><td>". $row['FullName']. "</td></tr>";
		echo "<tr><td><b>Username: </b></td><td>".$row['UserName']."</td></tr>";
		echo "<tr><td><b>Email: </b></td><td>".$row['Email']."</td></tr>";
	  ?>
  	</table>
  	  <?php
  	echo "<p><center><span class=\"btn\"><a style=\"color:red;font-weight:bold;font-size:18px\" href=\"index.php?mod=user&act=changepassword\">Đổi mật khẩu</a></span>";
	echo "<span class=\"btn\"><a style=\"color:red;font-weight:bold;font-size:18px\" href=\"index.php?mod=user&act=update\">Đổi thông tin</a></span><center></p>";
	?>
</div>
