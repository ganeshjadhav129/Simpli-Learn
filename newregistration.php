<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="simplilearn";

	$conn=mysqli_connect("$host","$user","$password","$db");

	if($conn)
	{
		$sql="SELECT * from registration";
		$retval=mysqli_query($conn,$sql);
		$user=$_POST['user'];
		$firstname=$_POST['first'];
		$lastname=$_POST['last'];
		$password=$_POST['password'];
		$confirm=$_POST['confirmpassword'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$birthdate='-';
		$h=false;
		if($confirm!=$password)
		{
			$_SESSION['error']="Enter password correctly";
			header("location:signup.php");
		}
		else
		{
			while ($row=mysqli_fetch_assoc($retval)) 
			{
				if($row['username']==$user or $row['email']==$email)
				{
					$h=true;
				}
			}
			if($h==true)
			{
				$_SESSION['error']="Username or email already exits";
				header("location:signup.php");
			}
			else
			{
				$sql="INSERT into registration values('$lastname','$password','$gender','$email','$phone','$address','$city','$user',
				'$firstname','$birthdate','$state')";
				$retval=mysqli_query($conn,$sql);
				$sql="INSERT into login values('$user','$password')";
				$retval=mysqli_query($conn,$sql);
				$sql="INSERT into education values('$user','$birthdate','$birthdate','$birthdate','$birthdate')";
				$retval=mysqli_query($conn,$sql);
				if($retval)
				{
					$_SESSION['error']="Successfully registered";
				}
				else
				{
					echo "Error";
				}
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
 				$mail->Body = 'You have Successfully registered to our Simplilearn website.for Any further updates stay tuned on our website.Thanks ...';
 				$mail->AddAddress($to);
 				if($mail->Send())
 				{
					header("location:newproject.php");
 				}
 				else 
 				{
 					echo "error in sending";
 				}
			}
		}
	}
?>