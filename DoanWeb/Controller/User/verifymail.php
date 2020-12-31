<?php
$code=$_POST['code'];
if($code=$_SESSION['code']){
    header("Location:index.php?mod=user&act=sendmail");
    unset($_SESSION['code']);
}
?>