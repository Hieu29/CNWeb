
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
	<h2 class="text-center">CHANGE PASSWORD</h2>
	<br/>
	<div class="row">
		<div class="col-sm-12">
		    <form action="index.php?mod=user&act=changepassword" method="post" class="form" onSubmit="return IsChangePass()">
		    <p>Current Password</p>
		    <div class="form-group pass_show"> 
                <input type="password" value="@123" class="form-control" name="txtOldPass" id="txtOldPass" placeholder="Current Password"> 
            </div> 
		       <p>New Password</p>
            <div class="form-group pass_show"> 
                <input type="password" value="@123" class="form-control" name="txtPass" id="txtPass" placeholder="New Password"> 
            </div> 
		       <p>Confirm Password</p>
            <div class="form-group pass_show"> 
                <input type="password" value="@123" class="form-control" name="txtPrePass" id="txtPrePass" placeholder="Confirm Password"> 
            </div> 

            <button type="submit" name="btnChange" id="btnChange" class="btn btn-danger">Đổi mật khẩu</button>
            </form>
            <br><br>
		</div>  
	</div>
</div>

<script type="text/javascript">
	  
$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  
</script>