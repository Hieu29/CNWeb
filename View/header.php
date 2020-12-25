<?php
    session_start();
    ob_start();
    include_once("Controller/Facebook/xuly.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="images/favicon.png">
      

      
      <script type="text/javascript" src="js/function1.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/main.css"> -->


      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">      
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo" style="width: 250px;"><img src="images/icons/logoweb.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                                 <!-- <li class="dorpdown">
                                    <a href="#">Eng</a>
                                    <ul class="subnav">
                                       <li><a href="#">Eng</a></li>
                                       <li><a href="#">Vns</a></li>
                                       <li><a href="#">Fer</a></li>
                                       <li><a href="#">Gem</a></li>
                                    </ul>
                                 </li> -->
<!--                                  <li class="dorpdown">
                                    <a href="#">USD</a>
                                    <ul class="subnav">
                                       <li><a href="#">USD</a></li>
                                       <li><a href="#">UKD</a></li>
                                       <li><a href="#">FER</a></li>
                                    </ul>
                                 </li> -->
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="index.php?mod=user&act=aboutus">Thông tin</a></li>
                                 <li><a href="index.php?mod=order&act=history">Lịch sử đặt hàng</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
<?php
               // echo $_SESSION['lgUserID'];
               if(isset($_SESSION['lgUserID']) ){ 
                  if($_SESSION['lgGroupID']==1){
                     echo "<li><a href=\"admin.php\" class=\"log\">Quản trị</a></li>";
                  }
                  else
                     echo "<li><a href=\"index.php?mod=user&act=about\" class=\"log\">Xin chào {$_SESSION["lgUserName"]} </a></li>";
                     
                   echo "<li><a href=\"index.php?mod=user&act=logout\" class=\"log\">Đăng Xuất</a></li>";
                   
               }
               else{
                  $chuoi1 = <<<EOD
                   <li><a href="Login.php" class="log">Đăng Nhập</a></li>
                  <li><a href="index.php?mod=user&act=register" class="reg">Đăng Ký</a></li>
EOD;
                   echo $chuoi1;
               }
?>                 
                   
                   <!-- $chuoi1 = <<<EOD
                   <li><a href="index.php?mod=user&act=logout" class="log">Đăng xuất</a></li>
EOD;
                   echo $chuoi1;

                   if(isset($_SESSION["lgGroupID"])){
                        if($_SESSION['lgGroupID']==1){
                             echo "<li><a href=\"admin.php\" class=\"log\">Quản trị</a></li>";
                         }
                         else{
                           echo "<li><a href=\"index.php?mod=user&act=about\" class=\"log\">Xin chào $user </a></li>";
                        }
                   }
               }
               else{
                   $chuoi1 = <<<EOD
                   <li><a href="Login.php" class="log">Đăng Nhập</a></li>
                  <li><a href="index.php?mod=user&act=register" class="reg">Đăng Ký</a></li>
EOD;
                   echo $chuoi1;
                    -->              
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form id="fsearch">
                                 <input class="search-submit" type="submit" value="">
                                 <input class="search-input" placeholder="Enter your search term..." name="txtSearch" id="txtSearch" type="text">
                              </form>
                           </li>

<script type="text/javascript">
  // AJAX call for autocomplete 
   $(".search-input").keyup(function(){
      $.ajax({
      type: "POST",
      url: "Controller/Products/Search.php",
      data:'keyword='+$(this).val(),
      success: function(data){
         // alert("oke");
         // $("#result").show();
         
         $("#result").html(data);
         // $("#search-box").css("background","#FFF");
      }
      });
   });
});
</script>

                           <!--cart hover-->
<li class="option-cart">
  <a href="index.php?mod=Cart&act=Detail" class="cart-icon">cart <span class="cart_no" id="giohang">
     <?php
        if(isset($_SESSION['mycart'])){
           echo count($_SESSION["mycart"]);
        }
        else{
           echo "0";
        }
     ?>
  </span></a>
  <ul class="option-cart-item">
<?php
// include_once("Controller/Cart/cartmini.php");
if(isset($_SESSION["mycart"])){


$sum=0;
$total=0;
   foreach($_SESSION["mycart"] as $key=>$val){ 
         include_once("Model/Products.php"); 
         $pro = new Products();
         $row=$pro->GetProductByID($key);
         $sum=$val*$row["Price"];
         $total += $val*$row["Price"];
         $chuoi = <<<EOD

         <li>
            <div class="cart-item">
               <div class="image"><img src=Upload/{$row["ImageUrl"]} alt=""></div>
               <div class="item-description">
                  <p class="name">{$row["ProductName"]}</p>
                  <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">$val</span></p>
               </div>
               <div class="right">
                  <p class="price">$30.00</p>
                  <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
               </div>
            </div>
         </li>
EOD;
      echo $chuoi;
    }
}

?>

                              <!--    <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="images/products/thum/products-02.png" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">Lincoln chair</p>
                                          <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">$30.00</p>
                                          <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li> -->
                         <li><span class="total">Total <strong><?php if(isset($_SESSION["mycart"])){echo $total;} ?></strong></span>
                            <button class="checkout"><a href="index.php?mod=Cart&act=checkout">CheckOut</a></button></li>
                      </ul>
                   </li>
                   <!--end cart-->
                </ul>
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div class="navbar-collapse collapse">
                   <ul class="nav navbar-nav">                             
                      <li><a href="index.php">trang chủ</a></li>
                      <li><a href="index.php?mod=products&act=gridproducts">sản phẩm</a></li>
                   
                      <li><a href="index.php?mod=cart&act=detail">giỏ hàng</a></li>
                    
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>