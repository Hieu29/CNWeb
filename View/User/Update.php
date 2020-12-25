<!-- <div>
<h2><span><a href="index.php?mod=user&act=login">Đổi thông tin cá nhân</a></span></h2>
     <p>
<form action="index.php?mod=user&act=update" method="post" class="form" onsubmit="return IsUpdateUser()">
	<p><label>Họ tên</label><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row['FullName']; ?>" size="30" style="margin-left: 20px;"/></p>
    <p><label>Email</label><input type="text" name="" id="txtEmail" value="<?php echo $row['Email'] ?>" size="30" style="margin-left: 27px;"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="margin-left: 90px;"/></p>
    <p id="error" class="error"></p>
</form>
</p>
</div> -->


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
	<h2 class="text-center">ĐỔI THÔNG TIN</h2>
	<br/>
	<div class="row">
		<div class="col-sm-12">
		    <form action="index.php?mod=user&act=update" method="post" class="form" onsubmit="return IsUpdateUser()">
		    <p>Họ và tên</p>
		    <div class="form-group pass_show"> 
                <input type="text" value="<?php echo $row['FullName']; ?>" class="form-control" name="txtFullName" id="txtFullName" placeholder="Họ và tên"> 
            </div> 
		       <p>Email</p>
            <div class="form-group pass_show"> 
                <input type="email" value="<?php echo $row['Email'] ?>" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email"> 
            </div> 
            <button type="submit" name="btnChange" id="btnChange" class="btn btn-danger">Đổi thông tin</button>
            </form>
            <br><br>
		</div>  
	</div>
</div>

<script type="text/javascript">
	  
$(document).ready(function(){

});  
</script>