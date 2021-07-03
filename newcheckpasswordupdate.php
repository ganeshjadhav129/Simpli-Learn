<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="simplilearn";

	$conn=mysqli_connect("$host","$user","$password","$db");
	if($conn)
	{
		$email=$_SESSION['email'];
		$password=$_POST['password'];
		$confirm=$_POST['confirmpassword'];
		if($confirm!=$password)
		{
			$_SESSION['error']="Enter password correctly";
			header("location:passwordupdatelink.php");
		}
		$sql="UPDATE registration SET password='$password' WHERE email='$email' ";
		$retval=mysqli_query($conn,$sql);
		$sq="SELECT * from registration where email='$email' ";
		$retval=mysqli_query($conn,$sq);
		$row=mysqli_fetch_assoc($retval);
		$var=$row['username'];
		$sql="UPDATE login SET password='$password' WHERE username='$var' ";
		$retval=mysqli_query($conn,$sql);
		if($retval)
		{
			$_SESSION['error']='Password Updated';
			header("location:newproject.php");
		}
	}
?>