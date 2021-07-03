<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="simplilearn";

	$conn=mysqli_connect("$host","$user","$password","$db");
	if($conn)
	{
		$name=$_POST['Name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['msg'];
		$sql="INSERT into contact values('$name','$email','$phone','$message')";
		$retval=mysqli_query($conn,$sql);
		if($retval)
		{
			$_SESSION['p23']="We recieved Your message.Stay tune to Our website SIMPLILEARN";
			header("location:newproject.php");
		}
	}
?>