<?php
	session_start();
	unset($_SESSION['error']);
  	unset($_SESSION['name']);
	$_SESSION['logout']='logout';
	header("location:newproject.php");
 ?>