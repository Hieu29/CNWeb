<!---Header-->
<?php
   include_once("View/header.php");
?>
<!--End header-->

         <div class="clearfix"></div>
         
<!--          <?php
            // include_once("View/carousel.php");
         ?> -->
         

         <div class="clearfix"></div>
         <!--Content-->

     <!--Start Main-->    

          <?php
              if(!isset($_GET['mod'])){
                // <!--Carousel-->
                  include_once ("View/carousel.php");
                  // <!--end Carousel-->

                  // include_once("Controller/Products/New.php");
                  echo "<div class=\"container_fullwidth\">";
                  echo "<div class=\"container\">";
                  include_once("Controller/Products/New.php");
                  echo "</div>";
                  echo "</div>";
              }
              ?>


<?php
              if(isset($_GET['mod'])){
                  $a = ucfirst($_GET['mod']);
                  $b = ucfirst($_GET['act']);
                  echo "<div class=\"container_fullwidth\">";
                  echo "<div class=\"container\">";
                  include_once("Controller/".$a."/".$b.".php");
                  echo "</div>";
                  echo "</div>";
                  
              }
         ?>
        <!--End Main-->

        
         <!--end content-->

         <div class="clearfix"></div>
         <!--footer-->
         <?php
            include_once("View/footer.php");
         ?>
          <!--end footer-->
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/script.min.js" ></script>


    <script defer src="js/jquery.flexslider.js"></script>

    <script type="text/javascript" src='js/jquery.elevatezoom.js'></script></script>
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
   </body>
</html>