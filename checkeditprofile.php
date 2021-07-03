<?php
	session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="simplilearn";

	$conn=mysqli_connect("$host","$user","$password","$db");
	if($conn)
	{

		$var=$_SESSION['name'];
		$sq="SELECT * from registration where username='$var' ";
		$retval=mysqli_query($conn,$sq);
		$row=mysqli_fetch_assoc($retval);

		$user=$_POST['user'];
		$firstname=$_POST['first'];
		$lastname=$_POST['last'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$birthdate=$_POST['date'];


		if(empty($birthdate))
		{
			$birthdate=$row['birthdate'];
		}

		

		$occupation=$_POST['occupation'];
		$university=$_POST['university'];
		$skills=$_POST['Skills'];
		$work=$_POST['Work'];

		$sql="UPDATE registration SET lastname='$lastname',gender='$gender',Phone='$phone',address='$address',city='$city',
		Firstname='$firstname',birthdate='$birthdate' WHERE username='$user' ";
		$retval=mysqli_query($conn,$sql);
		$sql="UPDATE education SET  occupation='$occupation',university='$university',Skills='$skills',Work='$work' WHERE username='$user' ";
		$retval=mysqli_query($conn,$sql);
		header('location:profilepage.php');
	}
?>