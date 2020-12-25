<?php
    if(!isset($_SESSION["mycart"])){
        echo "<a href=\"index.php?mod=products&act=gridproducts\"><button class=\"btn btn-danger\" type=\"submit\"><h3>MỜI BẠN TIẾP TỤC MUA HÀNG</h3></button></a>";
    }
?>
<body>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Shopping Cart
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Image
                    </th>
                    <th>
                      Details
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Quantity
                    </th>
                    <th>
                      Delete
                    </th>
                  </tr>
                </thead>              
            <tbody>
<?php
if(isset($_SESSION["mycart"])){
  $sum=0;
$total=0;
    foreach($_SESSION["mycart"] as $key=>$val){
        // echo $key;
        
        $row=$pro->GetProductByID($key);
        $sum=$val*$row["Price"];
        $total += $val*$row["Price"];
        $chuoi = <<<EOD
        <tr>
            <td>
              <img src=Upload/{$row['ImageUrl']} alt="">
            </td>
            <td>
              <div class="shop-details">
                <div class="productname">
                  {$row['ProductName']}
                </div>
              </div>
            </td>
            <td>
              <h5>
                {$row['Price']}
              </h5>
            </td>
            <td>
              <a><input type="text" name="soluong" id="soluong" value={$val} style="width:50px;height:35px;"></a>
            </td>
            <td class="product-remove">";
            <a title="Remove this item" class="remove" href="index.php?mod=cart&act=delete&id=$key"     onclick="return IsDelete()"><img src="images/remove.png"></a></td>";
          </tr>
EOD;
          echo $chuoi;
    }
}
?>


                    
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                      <button class="pull-left">
                        <a href="index.php?mod=products&act=gridproducts">Continue Shopping</a>
                      </button>
                      <button class=" pull-right">
                        <a href="Controller/Cart/Add.php?id={$res['ProductID']}" onclick="return insertCart({$res['ProductID']})">Update Shopping Cart</a>
                      </button>
                    </td>
                  </tr>
                </tfoot>
              </table>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    


                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <h5>
                        MÃ GIẢM GIÁ
                    </h5>
                    <form>
                      <label>
                          Vui lòng nhập mã!
                      </label>
                      <input type="text" name="inputgiam" id="inputgiam">
                      <div class="clearfix">
                      </div>
                      <div id="error"></div>
                      <button id="btnGiamGia" onclick="return false;">
                        LẤY MÃ
                      </button>
                    </form>
                  </div>
                </div>

<script type="text/javascript">
  $(document).ready(function() {
      $('#btnGiamGia').click(function(e) {
          $.ajax({
              type: "POST",
              url: 'Controller/Products/giamgia.php',
              data: {'code': $('#inputgiam').val(), 'total': $('#subtotal').text()},
              success: function(result)
              {
                    if(result==-9999){
                        $("#error").html("KHÔNG ÁP DỤNG MÃ GIẢM GIÁ NÀY!");
                    }
                    else{
                        $("#result").html(result);
                        $_SESSION["total"] = result;
                        $("#error").html("");
                    }
             }
         });
         // var selectedCountry = $(this).children("option:selected").val();
         //  alert("You have selected the country - " + selectedCountry);
       });
  });
</script>

                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <h5>
                        Tạm tính
                      </h5>
                      <span id="subtotal">
                        <?php
                        if(isset($_SESSION["mycart"]))
                            echo $total;
                        ?>
                      </span>
                    </div>
                    <div class="grandtotal">
                      <h5>
                        Tổng
                      </h5>
                      <span id="result">
                        <?php
                        if(isset($_SESSION["mycart"]))
                            echo $total;
                        ?>
                      </span>
                    </div>
<?php
               if(!isset($_SESSION["lgUserID"])){
                   $chuoi1 = <<<EOD
                   <a href="index.php?mod=Cart&act=checkout">
                   <button>
                          Checkout
                    </button>
                    </a>
EOD;
                   echo $chuoi1;
                   
               }
               else{
                   $chuoi1 = <<<EOD
                   <a href="index.php?mod=order&act=add">
                   <button>
                          Đặt hàng
                    </button>
                    </a>
                    <div id="paypal-button-container"></div>
EOD;
                   echo $chuoi1;
               }

               ?>  
                  </div>
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
      <script src="https://www.paypal.com/sdk/js?client-id=AbDCvgGQ6AFsoY6rFxuIfmiE1bCJn0vjHQzsgslZJQx-5wDpmNT3ao5IbVoPpWcuuZQS-1_Z4ZlwuNl1&currency=USD"></script>   
 <script>
        // Render the PayPal button into #paypal-button-container
         paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php $currency=25000.00; echo $total/$currency; ?>'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Thanh toán thành công! Cảm ơn quý khách ' + details.payer.name.given_name + '!');
                });
            }

        }).render('#paypal-button-container');
    </script>
</body>
