<?php
	session_start(); 
	if (isset($_SESSION['name'])) 
	{
		$var=$_SESSION['name'];
		$conn=mysqli_connect("localhost","root","","simplilearn");
		$sq="SELECT * from registration where username='$var' ";
		$retval=mysqli_query($conn,$sq);
		$row=mysqli_fetch_assoc($retval);

		$sq1="SELECT * from education where username='$var'";
		$ret=mysqli_query($conn,$sq1);
		$row1=mysqli_fetch_assoc($ret);
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	.x{
		width:160px;
		margin-left:520px;
		margin-top:10px;
	}
	.main{
		width:80%;
		margin-top:10px;
		margin-left:150px;
	}
	.left{
		width:300px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2) ;
		background-color:white;
		height:500px;
		padding-left:15px;
		padding-right:15px;
	}
	.personal-info{
		display: flex;
		margin-left:240px;
	}
	.right{
		width:600px;
		height:auto;
		background-color:white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		margin-left:2px;
		padding-left:30px;
		padding-right:30px;
	}
	.m2{
		display: flex;
	}
</style>
<body style="font-family: sans-serif; background-color: #f3f5f9;">
	<div class="main">
		<a href="newproject.php"><img class="x" src="https://www.simplilearn.com/ice9/new_logo.svgz"></a>
	</div>
	<div class="personal-info">
		<div class="left">
			<img src="https://bootdey.com/img/Content/avatar/avatar7.png" style="width:160px;margin-left:65px;margin-top:20px">
			<h2 style="font-family:Segoe UI Symbol;text-align: center;color:grey;"><?php echo $row['lastname']." ".$row['Firstname'];  ?></h2>
			<i class="fa fa-map-marker" style="font-size:15px;margin-left:65px;color:lightgrey;"></i><label style="padding-left: 5px;text-align: center;color:grey">lives in <?php echo $row['city'];?></label>
		</div>
		<div class="right">
			<p style="border-bottom:1px solid rgba(0,0,0,0.5);padding-bottom:10px;font-size:22px;"><?php echo $row['lastname']." ".$row['Firstname']; ?><label><a href="editprofile.php"><i class="fa fa-edit" title="Edit profile" style="margin-left:380px;color: grey;cursor: pointer;"></i></a></label></p>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Username:</label>
				<label style="color:#476b6b;margin-left:120px;"><?php echo $row['username'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Email:</label>
				<label style="color:#476b6b;margin-left:153px;"><?php echo $row['email'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Phone:</label>
				<label style="color:#476b6b;margin-left:145px;"><?php echo $row['Phone'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Address:</label>
				<label style="color:#476b6b;margin-left:133px;"><?php echo $row['address'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">City:</label>
				<label style="color:#476b6b;margin-left:163px;"><?php echo $row['city'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">State:</label>
				<label style="color:#476b6b;margin-left:150px;"><?php echo $row['state'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Birth-date:</label>
				<label style="color:#476b6b;margin-left:120px;"><?php echo $row['birthdate'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Gender</label>
				<label style="color:#476b6b;margin-left:143px;"><?php echo $row['gender'];?></label>
			</div><br>
			<p style="border-bottom:1px solid rgba(0,0,0,0.5);padding-bottom:10px;font-size:22px;">Career</p>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Occupation:</label>
				<label style="color:#476b6b;margin-left:120px;"><?php echo $row1['occupation'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">University:</label>
				<label style="color:#476b6b;margin-left:130px;"><?php echo $row1['university'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Technical skills:</label>
				<label style="color:#476b6b;margin-left:98px;"><?php echo $row1['Skills'];?></label>
			</div><br>
			<div class="m2" style="border-bottom:1px solid rgba(0,0,0,0.01);padding-bottom:10px;">
				<label  style="color:lightgrey;">Work Experience</label>
				<label style="color:#476b6b;margin-left:78px;"><?php echo $row1['Work'];?></label>
			</div><br>

		</div>
	</div>
</body>
</html>