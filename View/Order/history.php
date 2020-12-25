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
	      <td><a href="index.php?mod=order&act=chitiet&id={$row["OrderID"]}&index=1" class="btn btn-danger">Xem</a></td>

	    </tr>

EOD;
	    echo $chuoi;
	
	}
?>
    
  </tbody>
</table>

