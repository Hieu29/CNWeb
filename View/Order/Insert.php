<!-- <div>
<h2><span><a href="index.php?mod=order&act=add">Đặt hàng</a></span></h2>
  <p>
  	<form class="form" method="post" action="index.php?mod=order&act=add" onSubmit="return IsInsertOrder()">
        <p><label>Địa chỉ nhận hàng (*)</label><input type="text" name="txtAddress" id="txtAddress" style="margin-left:5px;" /></p>
        <p><label>Số điện thoại (*)</label><input type="text" name="txtPhone" id="txtPhone" style="margin-left:39px;"/></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" style="margin-left:140px;"/></p>
        <p id="error" class="error"></p>
    </form>
  </p>
</div>
<?php
	// include_once("Controller/Cart/Detail.php");	
?>


 -->

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	.pass_show{position: relative} 

.pass_show .ptxt { 

position: absolute; 

top: 50%; 

right: 10px; 

z-index: 1; 

color: #f36c01; 

margin-top: -10px; 

cursor: pointer; 

transition: .3s ease all; 

} 

.pass_show .ptxt:hover{color: #333333;} 
</style>
<div class="container" style="width: 40%; margin: 0 auto;">
	<h2 class="text-center">NHẬP THÔNG TIN ĐẶT HÀNG</h2>
	<br/>
	<div class="row">
		<div class="col-sm-12">
		    <form method="post" action="index.php?mod=order&act=add" onSubmit="return IsInsertOrder()">
		    <p>Địa chỉ nhận hàng</p>
		    <div class="form-group pass_show"> 
                <input type="text"  class="form-control" name="txtAddress" id="txtAddress"> 
            </div> 
		       <p>Số điện thoại</p>
            <div class="form-group pass_show"> 
                <input type="text"  class="form-control" name="txtPhone" id="txtPhone"> 
            </div> 
            <button type="submit" name="btnSave" id="btnSave" class="btn btn-danger">Đặt hàng</button>
              <p id="error" class="error"></p>
            </form>
            <br><br>
		</div>  
	</div>
</div>

<script type="text/javascript">
	  
$(document).ready(function(){

});  
</script>