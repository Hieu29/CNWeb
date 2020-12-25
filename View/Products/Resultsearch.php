<center><h2 style=" background-color: #5a88ca;color:#fff;padding: 10px; font-size: 40px;">Kết quả tìm kiếm</h2></center>
<br/>
<div class="main-ver2">
	<div class="fs-ihotslale hsalebotpro">
		<div class="owl-carousel fsihots owl-loaded owl-drag">
			<div class="owl-stage-outer">
				<div class="owl-stage">

<?php
	if($result){
		foreach($result as $row){
			// echo $row['ImageUrl'];
			$chuoi = <<<EOD
					<div class="owl-item active" style="width: 240px;">
						<div class="item center" style="text-align:center">	
							<p class="fs-icimg">
								<img class="lazy" src="Upload/{$row['ImageUrl']}" title="{$row['ProductName']}">
							</p>
							<div class="fs-hsif">
							<p><b>{$row['ProductName']}</b></p>
							<p class="fs-icpri">Giá: {$row['Price']}đ</p>
								<div class="button">
									<a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
										<button type="button" class="btn btn-info">Chi tiết</button>
									</a>
									<a href="Controller/Cart/Add.php?id={$row['ProductID']}"  onclick="return insertCart({$row['ProductID']})">
										<button type="button" class="btn btn-info">Mua hàng</button>
									</a>
								</div>
							</div>
						</div>
					</div>				
EOD;
							echo $chuoi;
		}
	}
	else {
		echo "<center><p style=\"color: red; font-size: 20px;\">Không tìm thấy sản phẩm nào!<p></center>";
	}
	?>
				</div>
			</div>		
		</div>
	</div>
</div>
<hr/>