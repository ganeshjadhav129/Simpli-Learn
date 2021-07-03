<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="simplilearn";

	$conn=mysqli_connect("$host","$user","$password","$db");
	if($conn)
	{
		$email=$_POST['email'];
		$sql="SELECT * from registration where email='$email' ";
		$retval=mysqli_query($conn,$sql);
		if($retval)
		{
			require_once('PHPMailer/PHPMailerAutoload.php');
			$from='rakeshkatakam58@gmail.com';
			$to=$email;
			$mail = new PHPMailer();
			$mail->isSMTP();
 			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'smtp.gmail.com';
 			$mail->Port = '465';
 			$mail->isHTML();
 			$mail->Username = $from;
 			$mail->Password = 'raki1999';
 			$mail->Subject = 'Simplilearn';
 			$mail->Body = '<p>Click The below link To update your password</p><a href="http://localhost/passwordupdatelink.php">Update Password</a>';
 			$mail->AddAddress($to);
 			if($mail->Send())
 			{
 				$_SESSION['p23']='Update password link Sent to your email';
 				$_SESSION['email']=$email;
 				header("location:newproject.php");
 			}
		}
		else
		{
			$_SESSION['error']="Invalid email address";
			header("location:forgotpassword.php");
		}
	}
?>