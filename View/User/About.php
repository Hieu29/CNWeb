
 <style type="text/css">
 	 .inf-content{
    border:1px solid #DDDDDD;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
}			                                                      
 </style>

 <div class="container bootstrap snippet">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <strong>THÔNG TIN CÁ NHÂN</strong><br>
            <div class="table-responsive">
            <table class="table table-condensed table-responsive table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Họ tên:                                              
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php
                            	echo $row['FullName'];
                            ?>    
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Tên đăng nhập:                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php
                            	echo $row['UserName'];
                            ?>       
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                Email:                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php
                            	echo $row['Email'];
                            ?>   
                        </td>
                    </tr>

                    <tr>        
                        <td>
                                <a href="index.php?mod=user&act=changepassword"><button type="button" class="btn btn-danger">Đổi mật khẩu</button></a>
                        </td>
                        <td class="text-primary">
                            <a href="index.php?mod=user&act=update"><button type="button" class="btn btn-danger">Đổi thông tin</button></a>
                        </td>
                    </tr>                                
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>                                        