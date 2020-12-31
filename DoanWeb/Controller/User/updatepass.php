<?php
$name=$_POST['txtOldname'];
$pas=$_POST['txtPass'];
$repass=$_POST['txtPrePass'];
if($repass=$pas) {
    include_once("Model/User.php");
    $user = new User();
    $user->updatepass($name, $pas);
    header("location: index.php?mod=user&act=login");
}else{
    header("Location:../../View");}

?>