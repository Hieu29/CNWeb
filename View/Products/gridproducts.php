<div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <!--category-->
              <div class="category leftbar">
                <h3 class="title">
                  Categories
                </h3>
                <ul id="category">
                  <?php
                  // echo var_dump($ca);
                    foreach ($ca as $c) {
                        $chuoi= <<<EOD
                        <li>
                          <a href="#" class="click" data-url = "{$c["CategoryID"]}">
                            {$c["CategoryName"]}
                          </a>
                        </li>
EOD;
                      echo $chuoi;
                    }
                  ?>
<script type="text/javascript">
  $(document).ready(function() {
      $('#category li a').click(function(e) {
        var categoryID = $(this).attr('data-url');
        // alert(categoryID);
        $.ajax({
            type: "POST",
            url: 'Controller/Category/resultcategory.php',
            data: {'categoryID': categoryID},
            success: function(result)
            {
                $("#result").html(result);
           }
         });
       });
  });
</script>


                </ul>
              </div>
              <!--end category-->
              <div class="clearfix">
              </div>
              <!--branch-->
              <div class="branch leftbar">
                <h3 class="title">
                  Branch
                </h3>
                <ul id="branch">
                  <?php
                  // echo var_dump($ca);
                    foreach ($ma as $m) {
                        $chuoi= <<<EOD
                        <li>
                          <a href="#" data-url = "{$m["ManufacturerID"]}">
                            {$m["ManufacturerName"]}
                          </a>
                        </li>
EOD;
                      echo $chuoi;
                    }
                  ?>
                </ul>
              </div>

<script type="text/javascript">
  $(document).ready(function() {
      $('#branch li a').click(function(e) {
        var manufacturerID = $(this).attr('data-url');
        $.ajax({
            type: "POST",
            url: 'Controller/Manufacturer/resultmanufacturer.php',
            data: {'manufacturerID': manufacturerID},
            success: function(result)
            {
                $("#result").html(result);
           }
         });
       });
  });
</script>
              <!--end brach-->
              <div class="clearfix">
              </div>
              <!--price-->
              <!-- <div class="price-filter leftbar">
                <h3 class="title">
                  Price
                </h3>
                <form class="pricing">
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <span class="separate">
                    - 
                  </span>
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <input type="submit" value="Go">
                </form>
              </div> -->
              <!--end price-->
 
              
              <div class="clearfix">
              </div>
            </div>
            <div class="col-md-9">
              <!--banner-->
              <div class="banner">
                <div class="bannerslide" id="bannerslide">
                  <ul class="slides">
                    <li>
                      <a href="#">
                        <img src="images/banner-01.jpg" alt=""/>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/banner-02.jpg" alt=""/>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--end banner-->
              <div class="clearfix">
              </div>
              <div class="products-grid">
                <!--tool bar-->
                <div class="toolbar">
                  <div class="sorter">
                    <div class="view-mode">
                      <a href="index.php?mod=products&act=listproducts" class="list">
                        List
                      </a>
                      <a href="#" class="grid active">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select class="sortby" >
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="Price">
                          Price
                        </option>
                      </select>

<script type="text/javascript">
  $(document).ready(function() {
      $('select.sortby').change(function(e) {
          $.ajax({
              type: "POST",
              url: 'controller/products/sortby.php',
              data: {'value': $(this).children("option:selected").val()},
              success: function(result)
              {
                  $("#result").html(result);
             }
         });
         // var selectedCountry = $(this).children("option:selected").val();
         //  alert("You have selected the country - " + selectedCountry);
       });
  });
</script>

                    </div>                  
                  </div>
                </div>
                <!--end tool bar-->
                <div class="clearfix">
                </div>

             <!--    <li id="search" class="search">
                              <form>
                                 <input class="search-submit" type="submit" value="">
                                 <input class="search-input" placeholder="Enter your search term..." name="txtSearch" id="txtSearch" type="text">
                              </form>
                           </li> -->

                 <!-- Search form -->
                <div class="active-pink-3 active-pink-4 mb-4">
                  <input class="form-control" name="txtSearch" id="txtSearch" type="text" placeholder="Bạn muốn tìm gì?" aria-label="Search">
                </div>

<script type="text/javascript">
  // AJAX call for autocomplete 
$(document).ready(function(){
   $(".form-control").keyup(function(){
      $.ajax({
      type: "POST",
      url: "Controller/Products/Search.php",
      data:'keyword='+$(this).val(),
      success: function(data){
         $("#result").html(data);      }
      });
   });
});
</script>

                <!--product-->
                <div class="row" id="result">
                    <?php
                      foreach ($r as $row) {                 
                        $chuoi = null;
                       
                          $chuoi = <<<OED
                            <div class="col-md-4 col-sm-6">
                                <div class="products">
                                  <div class="thumbnail">
                                    <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
                                      <img src=Upload/{$row['ImageUrl']} alt={$row['ProductName']}>
                                    </a>
                                  </div>
                                  <div class="productname">
                                    {$row['ProductName']}
                                  </div>
                                  <h4 class="price">
                                    {$row['Price']}
                                  </h4>
                                  <div class="button_group">
                                             <a href="Controller/Cart/Add.php?id={$row['ProductID']}" onclick="return insertCart({$row['ProductID']})" class="add-to-cart-link">
                                             <button class="button add-cart" type="button">
                                             <i class="fa fa-shopping-cart"></i>
                                             </button>
                                             </a>

                                             <a href="index.php?mod=products&act=detail&id={$row['ProductID']}">
                                             <button class="button wishlist" type="button" style="width:70px;">
                                             
                                             <i class="fa fa-info-circle" aria-hidden="true"></i>
                                             
                                             </button>
                                             </a>
                                        </div>
                                </div>
                              </div>                                  
OED;
                                               
                  echo $chuoi;
                  }                             
?>
                </div>
                <!--end product-->
                <div class="clearfix">
                </div>
                <!--toolbar-->
                <div class="toolbar">
                  <div class="sorter bottom">
                    <!--show page-->
                    <div class="limiter">
                      Show : 
                      <select class="showpage">
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>

<script type="text/javascript">
  $(document).ready(function() {
      $('select.showpage').change(function(e) {
          $.ajax({
              type: "POST",
              url: 'controller/products/showpage.php',
              data: {'soluong': $(this).children("option:selected").val()},
              success: function(result)
              {
                  $("#result").html(result);
             }
         });
         // var selectedCountry = $(this).children("option:selected").val();
         //  alert("You have selected the country - " + selectedCountry);
       });
  });
</script>
                    <!--end show page-->
                  </div>
                  <!--phân trang-->
                  <div class="pager">
                    <?php
                      if($findPage>1){
                        $chuoi = <<<EOD
                          <a href="#" class="prev-page" id="btnGiam">
                          <i class="fa fa-angle-left"></i></a>

                          <a><input type="text" name="trang" id="trang" value="1" style="width:50px;height:25px;"></a>

                          <a href="#" class="next-page" id="btnTang"><i class="fa fa-angle-right"></i> </a>
EOD;


                          echo $chuoi;
// echo "<div><center>".Pages::PreNext($_GET['page'],"?mod=products&act=gridproducts&",$findPage)."</center></div>";
                      }
                    ?>
            
<script type="text/javascript">
  $(document).ready(function() {
      $('#btnGiam').click(function(e) {
          $.ajax({
              type: "POST",
              url: 'Controller/Products/phantranggiam.php',
              data: {'sl': $(".showpage option:selected").val(), 'trang': $('#trang').val(), 'statusGiam': true},
              success: function(result)
              {
                  $("#result").html(result);
                  $("#trang").val($('#trang').val()-1);
             }
         });
         // var selectedCountry = $(this).children("option:selected").val();
         //  alert("You have selected the country - " + selectedCountry);
       });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#btnTang').click(function(e) {
          $.ajax({
              type: "POST",
              url: 'controller/products/phantrangtang.php',
              data: {'sl': $(".showpage option:selected").val(), 'trang': $('#trang').val(), 'statusTang': true},
              success: function(result)
              {
                  $("#result").html(result);
                  var st = document.getElementById("trang").value;
                  // alert (typeof(st));
                  $("#trang").val(Number(st)+1);
             }
         });
         // var selectedCountry = $(this).children("option:selected").val();
         //  alert("You have selected the country - " + selectedCountry);
       });
  });
</script>

                    <!--   <button type="button" onclick='alert($(".showpage option:selected").val());'>test</button> -->
                  </div>
                  <!--end phân trang-->
                </div>
                <!--end toolbar-->
                <div class="clearfix">
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>