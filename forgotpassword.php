<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.wrapper{
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 50px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 30px;
  margin-top:220px;
}
.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #fec107;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  margin-top:16px;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 25px;
   margin-left:40px;
  font-size: 20px;
}
.wrapper .form .inputfield .input{
	width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}
.wrapper .form .inputfield .input:focus{
	border: 1px solid #fec107;
}
.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #fec107;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #ffd658;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
</style>
<body style="font-family: sans-serif;">
	<div class="wrapper">
		<img src="https://www.simplilearn.com/ice9/new_logo.svgz" style="width:180px;margin-left:150px;">
		<div style="border-bottom:1px solid rgba(0,0,0,0.1);">
			<p style="text-align: center;color:black;font-size:25px;margin-top:-3px;">Recover Account</p>
		</div>
		<form action="emailpasswordupdate.php" class="form" method="post">
			<div class="inputfield" >
        	  	<label>Email</label>
          		<input type="text" class="input" name="email" placeholder="Enter valid email" required="">
       		</div>
       		<div class="inputfield">
        		<input type="submit" value="Submit" class="btn">
      		</div>
       </form> 
	</div>
</body>
</html>
<?php
if(isset($_SESSION['error']))
{
  	$y=$_SESSION['error'];
  	echo "<script type='text/javascript'>alert('$y')</script>";
  	unset($_SESSION['error']);
  	session_destroy();
} 
?>