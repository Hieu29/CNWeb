<hr>
<center><h2 style="background-color: #808080;width:900px;color:#fff;padding: 10px; font-size:35px;">Kết quả tìm kiếm</h2></center>
<br/>
<div class="main-ver2">
	<div class="fs-ihotslale hsalebotpro">
		<div class="owl-carousel fsihots owl-loaded owl-drag">
			<div class="owl-stage-outer">
				<div style="margin-left: 80px" class="owl-stage">

<?php
	if($result){
		foreach($result as $row){
			$pr= number_format($row['Price'],0);
			// echo $row['ImageUrl'];
			$chuoi = <<<EOD
					<div class="owl-item active" style="width: 200px;">
						<div class="item center" style="text-align:center">	
							<p class="fs-icimg">
								<img class="lazy" src="Upload/{$row['ImageUrl']}" title="{$row['ProductName']}">
							</p>
							<div class="fs-hsif">
							<p><b>{$row['ProductName']}</b></p>
							<p class="fs-icpri">Giá: $pr VND</p>
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
		echo "<center><p style=\"color: red; font-size: 25px;\">Không tìm thấy sản phẩm nào!<p></center>";
	}
	?>
				</div>
			</div>		
		</div>
	</div>
</div>
<hr/>