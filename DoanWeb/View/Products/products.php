<?php
foreach($rs as $row){
    // $chuoi = <<<EOD
    echo  "<div class=\"owl-item active\" style=\"width: 200px;\">";
    echo  "<div class=\"item center\" style=\"text-align:center\">" ;
    echo    "<p class=\"fs-icimg\">";
    echo      "<img class=\"lazy\" src=\"Upload/{$row['ImageUrl']}\" title=\"{$row['ProductName']}\">";
    echo    "</p>";
    echo    "<div class=\"fs-hsif\">";
    echo    "<p><b><a href=\"index.php?mod=products&act=detail&id={$row['ProductID']}\">{$row['ProductName']}</a></b></p>";
    echo    "<p class=\"fs-icpri\">Giá:".number_format($row["Price"],0)."VND</p>";
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