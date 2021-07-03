<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="simplilearn";

	$conn=mysqli_connect("$host","$user","$password","$db");
	if($conn)
	{
		$p=$_SESSION['name'];
		$sql="DELETE from education where username='$p'";
		if (mysqli_query($conn, $sql))
		{
			$_SESSION['error']="Account deleted Successfully";
		}
		$sql="DELETE from login where username='$p'";
		if (mysqli_query($conn, $sql))
		{
			$_SESSION['error']="Account deleted Successfully";
		}
		$sql="DELETE from registration where username='$p'";
		if (mysqli_query($conn, $sql))
		{
			$_SESSION['error']="Account deleted Successfully";
		}
		session_destroy();
		session_start();
		$_SESSION['error']="Account deleted Successfully";
		header("location:newproject.php");
	}
?>