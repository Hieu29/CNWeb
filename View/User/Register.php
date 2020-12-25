
<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px; width: 39%; margin: 0 auto;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>

	<form method="post" action="index.php?mod=user&act=register" onsubmit="return IsRegister()">
	<div class="form-group input-group">

        <input name="txtFullName" id="txtFullName" class="form-control" placeholder="Họ và tên" type="text" size=55>
    </div> <!-- form-group// -->
    <div class="form-group input-group">

        <input name="txtUserName" id="txtUserName" class="form-control" placeholder="Tên đăng nhập" type="text" size=55>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<input name="txtPassWord" id="txtPassWord" class="form-control" placeholder="Mật khẩu" type="password" size=55>
    </div> <!-- form-group// -->
    <div class="form-group input-group">

	</div> <!-- form-group end.// -->
    <div class="form-group input-group">

        <input name="txtPrePass" id="txtPrePass" class="form-control" placeholder="Mật khẩu xác nhận" type="password" size=55>
    </div> <!-- form-group// -->
    <div class="form-group input-group">

        <input name="txtEmail" id="txtEmail" class="form-control" placeholder="Email" type="email" size=55>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button name="btnRegister" id="btnRegister" type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="Login.php">Đăng nhập?</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

</article>


<!-- <div style="width: 380px; margin: 0 auto;">
	<h2><span><a href="index.php?mod=user&act=register">Đăng ký thành viên</a></span></h2>
  	<p>
  	<form class="form" method="post" action="index.php?mod=user&act=register" onsubmit="return IsRegister()">
        <p><label>Họ tên (*)</label><input type="text" name="txtFullName" id="txtFullName" size="30" style="margin-left: 28px;"/></p>
        <p><label>Tên đăng nhập (*)</label><input type="text" name="txtUserName" id="txtUserName" style="margin-left: 40px;"/></p>
        <p><label>Mật khẩu (*)</label><input type="password" name="txtPassWord" id="txtPassWord" style="margin-left: 78px;"/></p>
        <p><label>Mật khẩu xác nhận (*)</label><input type="password" name="txtPrePass" id="txtPrePass" style="margin-left: 16px;" /></p>
        <p><label>Email (*)</label><input type="text" name="txtEmail" id="txtEmail" size="30" style="margin-left: 33px;"/></p>
        <p><label>&nbsp;</label><input type="submit" value="Đăng ký" name="btnRegister" id="btnRegister" style="margin-left: 145px;"/></p>
        <p id="error" class="error"></p>
    </form>
  </p>
	</form>
</div> -->

