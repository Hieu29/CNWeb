<form method="post" action="admin.php?mod=order&act=thongke">
  Từ ngày: <input type="date" name="bd" id="bd">  đến ngày: <input type="date" name="kt" id="kt"/> 
  <button class="btn btn-danger" type="submit" id="btnthongke" name="btnthongke">Thống kê</button>
</form>



<div>
<h2><span><a href="admin.php?mod=order&act=manage">Quản lý đơn hàng</a></span></h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Xem chi tiết</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	<?php
	foreach($order as $row)
	{
		$item = $oi->GetOrderItemByOrder($row['OrderID']);
		
		$sum=0;
		foreach($item as $rowitem)
		{
			$sum+=$rowitem['Quantity']*$rowitem['Price'];
		}	

		$chuoi = <<<EOD
		<tr>
	      <th scope="row">{$row["OrderID"]}</th>
	      <td>{$row["FullName"]}</td>
	      <td>{$row["AddedDate"]}</td>
	      <td>$sum</td>
	      <td><a href="admin.php?mod=order&act=chitietdonhang&id={$row["OrderID"]}" class="btn btn-danger">Xem</a></td>
	      <td>
	      	<a href="admin.php?mod=order&act=delete&id={$row["OrderID"]}"   onclick="return IsDelete()"><img src="Images/Delete.gif" /></a>
	      </td>
	    </tr>

EOD;
	    echo $chuoi;
	
	}
?>
    
  </tbody>
</table>

