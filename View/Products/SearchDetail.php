<?php
foreach ($r as $row) {
  $chuoi=<<<EOD
  <div class="special-item">
    <div class="product-image">
      <a href="#">
        <img src=Upload/{$row["ImageUrl"]} alt={$row["ProductName"]}>
      </a>
    </div>
    <div class="product-info">
      <p>
        {$row["ProductName"]}
      </p>
      <h5 class="price">
        {$row["Price"]}
      </h5>
    </div>
  </div>
EOD;
echo $chuoi;
}
?>