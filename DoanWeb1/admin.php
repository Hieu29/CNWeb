<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->

    <div id="page" class="box">
        <div id="page-in" class="box">

            <!-- Content -->
            <div id="content">
            <?php                    
                    if(isset($_GET["mod"]))
                    {
                         $a = ucfirst($_GET['mod']);
                         $b = ucfirst($_GET['act']);
                        include_once("Controller/".$a."/".$b.".php");
                    }
                    else
                    {
                        include_once("Controller/Products/Manage.php");
                    }
            ?>
            </div> <!-- /content -->

            <!-- Right column -->
            <div id="col" style="float: left; width: 250px; margin-left: 50px; border-right: 3px solid #000; min-height: 200px;">
                <div id="col-in">
                    <center><h2 style="color: #ff6600;font-weight: bold;font-size: 20px">Danh mục quản lý</h2></center>
                    <ol style="color: black;font-weight: bold;font-size: 15px" id="archive" style="list-style-type: square"> 
                        <li><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></li>
                        <li><a href="admin.php?mod=user&act=manage">Quản lý thành viên</a></li>
                        <li><a href="admin.php?mod=category&act=manage">Quản lý thể loại</a></li>
                        <li><a href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></li>
                        <li><a href="admin.php?mod=group&act=manage">Quản lý nhóm</a></li>
                        <li><a href="admin.php?mod=order&act=manage">Quản lý đơn hàng</a></li>
                    </ol>
                    
                    </div> <!-- /col-in -->
            </div> <!-- /col -->


        </div> <!-- /page-in -->
        </div> <!-- /page -->
    <!--End content-->

<div style="clear: both;"></div>
     <!--End Main-->
    
    <!--Start Footer-->
    <?php
        include_once("View/Footer.php");
    ?>

<?php
    ob_end_flush();
?>