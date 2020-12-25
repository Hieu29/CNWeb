
<?php
session_start();
include_once ('Model/DataProvider.php');
$user=$_GET['username'];
$pass=$_GET['userpass'];
$sql="SELECT *  FROM users  where UserName='".$user."' and PassWord='".$pass."' and GroupID=1";
$con=mysqli_connect("127.0.0.1","root","","shoponline")or die("Lỗi kết nối");
$result=mysqli_query($con,$sql);
if ($result) {
    while ($row=mysqli_fetch_row($result)) {
        $name=$row[2];
        $txtusername=$row[3];
        $txtuserpass=$row[4];
        if (($user == $txtusername) && ($pass== $txtuserpass))
        {
           // $_SESSION["name"]=$name;
            $_SESSION["check"]=$name;
            header('Location:admin.php');
        }
        else
            header('Location:Signin.php');
    }
    mysqli_free_result($result);
}
?>