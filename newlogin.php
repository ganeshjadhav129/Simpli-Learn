<?php 
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="simplilearn";

	$conn=mysqli_connect("$host","$user","$password","$db");
	if($conn)
	{
		 $sql="SELECT * from login";
		 $retval=mysqli_query($conn,$sql);
		 $name=$_POST['name'];
		 $password=$_POST['password'];
		 $h=false;
		 while ($row=mysqli_fetch_assoc($retval)) 
		{
			if($row['username']==$name and $row['password']==$password)
			{
				$h=true;
			}
		}
		if($h==false)
		{
			$_SESSION['error']="Invalid username/password";
			header("location:newproject.php");
		}
		else
		{
			$_SESSION['name']=$name;
			$_SESSION['count']=true;
			header("location:newproject.php");
		}
	}
?>