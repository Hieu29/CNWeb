<?php
    use PHPMailer\PHPMailer\PHPMailer;
    include_once('PHPmail/PHPMailer.php');
    include_once('PHPmail/SMTP.php');
    include_once('PHPmail/Exception.php');
    $mail= new \PHPMailer\PHPMailer\PHPMailer();
	include_once("Model/User.php");
	$user = new User();
	$code=rand(10,100);
	$_SESSION['code']=$code;
	//$id=$_SESSION['lgUserID'];
	//$row=$user->getUserById($id);
	include_once("View/User/ForgotPassword.php");
	if(isset($_POST['btnChange']))
	{
		$name = $_POST['txtUserName'];
		$mail=$_POST['txtEmail'];
		$ret=$user->ForgotPassword($name,$mail);
		if($ret=true)
		{
		    //
            try {
                $mail->isSMTP(); // using SMTP protocol
                $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail
                $mail->SMTPAuth = true;  // enable smtp authentication
                $mail->Username = 'sender@gmail.com';  // sender gmail host
                $mail->Password = 'passwordnz123'; // sender gmail host password
                $mail->SMTPSecure = 'tls';  // for encrypted connection
                $mail->Port = 587;   // port for SMTP
                $mail->setFrom('sender@gmail.com', "Sender"); // sender's email and name
                $mail->addAddress($mail, "Cục Cưng B");  // receiver's email and name
                $mail->Subject = 'Khôi Phục Mật Khẩu';
                $mail->Body    = $code;
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) { // handle error.
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
			unset($_SESSION["lgUserName"]);
			unset($_SESSION["lgUserID"]);
			unset($_SESSION["lgGroupID"]);
			header("Location:index.php?mod=user&act=verify");
			echo "<p class=\"error\"><center style=\"color:red;font-size:20px;\"><b>Khôi phục mật khẩu thành công</b></center><p>";
		}
		else
			echo "<p class=\"error\"><center style=\"color:red;font-size:20px;\"><b>Cập nhật thất bại</b></center><p>";
	}
?>