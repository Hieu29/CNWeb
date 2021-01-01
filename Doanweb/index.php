<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->

    <?php
        if(!isset($_GET['mod'])){
            include_once ("View/Carousel.php");
        }
        if(isset($_GET['mod'])){
            $a = ucfirst($_GET['mod']);
            $b = ucfirst($_GET['act']);

            include_once("Controller/".$a."/".$b.".php");
        }

		
	?>
     <!--End Main-->
    <!--Start Phan loai-->
    <?php
    if(@ucfirst($_GET['act'])!="Aboutus"){
        include_once("Controller/Products/New.php");
        include("Controller/Products/Phanloai.php");
    }
    ?>
    <!--End Phan loai-->
    <!--Start Footer-->
    <?php
        include_once("View/Footer.php");
    ?>

<?php
    error_reporting(0);
    ob_end_flush();
?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fe61975a8a254155ab65027/1eqdd6sui';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->