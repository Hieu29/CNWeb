<div style="height: 280px" class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-about-us">
                        <h2 style="font-family:Impact;"><span style="color: #ff6600">TECH-EQUIPMENT.COM</span></h2>
                       <address>
                        <h5 style="color: #fff">Chuyên cung cấp sản phẩm công nghệ</h5>
                        <p style="font-size: 20px;color: #fff"><i class="fa fa-phone"></i> +84 0909-113-999</p>
                        <h5><u><a style="color: #ff6600;font-size: 15px" href="https://g.page/HCMUE?share"><i class="fa fa-map"></i> 280 An Dương Vương, Q5, TpHCM, Việt Nam.</a></u></h5>
                    </address>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/kimhieu1314" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://twitter.com/?lang=vi" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="color: #ff6600"> Điều Hướng </h2>
                        <ul>
                            <li><a href="index.php?mod=user&act=about">Tài khoản</a></li>
                            <?php
                            if(isset($_SESSION["lgUserID"])){
                            $chuoi1 = <<<EOD
                            <li><a href="index.php?mod=user&act=logout"><i class="fa fa-user"></i>Đăng xuất</a></li>

EOD;
                            echo $chuoi1;
                            if($_SESSION['lgGroupID']==1){
                                echo "<li><a href=\"admin.php\"><i class=\"fa fa-user\"></i>Admin</a></li>";
                            }
                        }
                        else{
                            $chuoi1 = <<<EOD
                            <li><a href="index.php?mod=user&act=login"><i class="fa fa-user"></i>Đăng Nhập</a></li>
                            <li><a href="index.php?mod=user&act=register"><i class="fa fa-user"></i>Đăng Ký</a></li>
EOD;
                            echo $chuoi1;
                        }

                            ?>
                            <li><a href="index.php?mod=cart&act=detail">Giỏ Hàng</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="color: #ff6600">Loại Sản Phẩm</h2>
                        <ul>

                            <?php
                                include("Controller/Category/CategoryFooter.php");
                            ?>
                            
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p><span style="color: orange;">Tech-equipment.com - Team123</span> <a href="index.php" target="_blank">Tech-equipment.com</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fab fa-cc-discover"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-paypal"></i>
                        <i class="fab fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

     <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min1.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <script src="js/main.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
  
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>
</html>