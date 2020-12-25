<br>
<center><h2 style="color: #5a88ca;">Sản phẩm mới nhất</h2></center>

<center>
  <form method="post" action="index.php?mod=products&act=allproducts">
    <span>Sắp xếp theo</span>
    <select name="selectPrice" id="cbbGia">
          <option value="all" selected="selected">--Tất cả sản phẩm--</option>
          <option value="asc">Giá tăng dần</option>
          <option value="des">Giá giảm dần</option>
    </select>
    <button type="submit" name="btnOK" style="font-size: 12px; border-radius: 10px; margin-left: 5px">Ok</button>
    </form>
</center>
<br>

<div class="main-ver2">
  <div class="fs-ihotslale hsalebotpro">
    <div class="owl-carousel fsihots owl-loaded owl-drag">
      <div class="owl-stage-outer">
        <div class="owl-stage">


<?php
  foreach($rs as $row){
    // $chuoi = <<<EOD
      echo  "<div class=\"owl-item active\" style=\"width: 240px;\">";
      echo  "<div class=\"item center\" style=\"text-align:center\">" ;
      echo    "<p class=\"fs-icimg\">";
      echo      "<img class=\"lazy\" src=\"Upload/{$row['ImageUrl']}\" title=\"{$row['ProductName']}\">";
      echo    "</p>";
      echo    "<div class=\"fs-hsif\">";
      echo    "<p><b>{$row['ProductName']}</b></p>";
      echo    "<p class=\"fs-icpri\">Giá: {$row['Price']}đ</p>";
      echo      "<div class=\"button\">";
      echo        "<a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\">";
      echo        "<button type=\"button\" class=\"btn btn-info\" id>Chi tiết</button>";
      echo        "</a>";
      echo        "<a href=\"Controller/Cart/Add.php?id={$row['ProductID']}\"  onclick=\"return insertCart({$row['ProductID']})\">";
      echo          "<button type=\"button\" class=\"btn btn-info\">Mua</button>";
      echo        "</a>";
      echo      "</div>";
      echo    "</div>";
      echo  "</div>";
      echo"</div>";       

            // echo $chuoi;
  }
?>
        </div>
      </div>    
    </div>
  </div>
</div>


<?php
  if($findPage>1){
    echo "<div><center>".Pages::PreNext($_GET['page'],"?mod=products&act=allproducts&",$findPage)."</center></div>";
  }
?>