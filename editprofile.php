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
</head>
<style type="text/css">
	.wrapper{
		padding:28px;
	}
	.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}
.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}
.input1{
	width: 200px;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;	
}
.input1:focus{
	border: 1px solid #fec107;
}
.input2{
	width: 600px;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;	
}
.input2:focus{
	border: 1px solid #fec107;
}
.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 120px;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 280px;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 120px;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 120px;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}
.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}
.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .btn{
  width: 120px;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #fec107;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
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
}
::placeholder{
	color: grey;
}
</style>
<body style="font-family: sans-serif;">
<div class="wrapper">
	<h1 style="border-bottom:1px solid rgba(0,0,0,0.1);padding-bottom:10px;">Edit Profile</h1>
	<form action="checkeditprofile.php" class="form" method="post">
		<h3 style="color: grey;">Personal Info:</h3>
		<div class="inputfield">
          <label>User name</label>
          <input type="text" class="input" name="user" value="<?php echo $row['username'] ?>" readonly>
       </div>
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="first" value="<?php echo $row['Firstname'] ?>">
          <label style="margin-left:20px;">Last Name</label>
          <input type="text" class="input" name="last" value="<?php echo $row['lastname'] ?>">
       </div>  
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value="male"><?php echo $row['gender']; ?></option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input1" name="email" value="<?php echo $row['email'] ?>" readonly>
       </div> 
      <div class="inputfield">
          <label>Contact Number</label>
          <input type="text" class="input" name="phone" value="<?php echo $row['Phone'] ?>">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" id="area"><?php echo $row['address'] ?></textarea>
       </div> 
      <div class="inputfield">
          <label>City</label>
          <input type="text" class="input" name="city" value="<?php echo $row['city'] ?>">
       </div> 
       <div class="inputfield">
          <label>State</label>
          <input type="text" class="input" name="state" value="<?php echo $row['state'] ?>">
       </div>
       <div class="inputfield">
          <label>Birthday</label>
          <input type="date" class="input1" name="date">
       </div>
       <h3 style="color: grey;border-top:1px solid rgba(0,0,0,0.1);padding-top:20px;">Career:</h3>
       <div class="inputfield">
          <label>Occupation</label>
          <div class="custom_select">
            <select  name="occupation">
              <option value="Student"><?php echo $row1['occupation']; ?></option>
              <option value="Student">Student</option>
              <option value="Employee">Employee</option>
            </select>
          </div>
       </div>
       <div class="inputfield">
          <label>University</label>
          <input type="text" class="input2" name="university" value="<?php echo $row1['university'] ?>">
       </div> 
       <div class="inputfield">
          <label>Technical skills</label>
          <input type="text" class="input2" name="Skills" value="<?php echo $row1['Skills'] ?>">
       </div> 
       <div class="inputfield">
          <label>Work Experience</label>
          <input type="text" class="input2" name="Work" value="<?php echo $row1['Work'] ?>">
       </div> 
       <div class="inputfield">
        <input type="submit" value="Save Profile" class="btn">
      </div>
	</form><br><br>
	<form action="newdeleteaccount.php" class="form" method="post">
		<div class="inputfield">
			<input type="submit" name="" value="Delete Account" class="btn">
		</div>
	</form>
</div>
</body>
</html>