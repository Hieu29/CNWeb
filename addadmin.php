<?php
//include_once ('Model/DataProvider.php');
$user=$_GET['username'];
$pass=$_GET['Password'];
$fullname=$_GET['fullname'];
$email=$_GET['fullname'];
$con=mysqli_connect("127.0.0.1","root","","shoponline")or die("Lỗi kết nối");
$sql="INSERT INTO users VALUES (1,'$fullname','$user','$pass','$email')";
mysqli_query($con,$sql);
?>