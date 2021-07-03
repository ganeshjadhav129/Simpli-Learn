
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
	html
	{
		scroll-behavior: smooth;
	}
	body 
	{
		font-family: Arial, Helvetica, sans-serif;
	}
	.left
	{
		float: left;
		width: 140px;
		margin-left: 10px;
	}
	.right
	{
		float: left;
		margin-top: 10px;
	}
	.z
	{
		width: 100.5%;
		padding-top: 20px;
		height: 60px;
		box-shadow: 0px 10px 10px -10px #000000;
		outline: none;
		position: sticky;
		top: 0;
		background-color: white;
		background-image: none;
	}
	.y
	{
		text-decoration: none;
		color: black;
		margin-left: 5px;
	}
	.d1
	{
		float: left;
		margin-left: 48px;
	}
	.g
	{
		float: right;
		margin-right: 120px;
		margin-bottom: 25px;
		margin-top: -8px;
	}
	.x71 
	{
  		background-color:rgb(153, 204, 255);
		color: white;
  		padding: 8px 18px;
  		margin: 8px 0;
  		border: none;
  		cursor: pointer;
  		width: auto;
  		border-radius: 2px;
	}

	.x71:hover 
	{
	    opacity: 0.8;
	}
	.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.bg
{
	width: 100%;
	height: 630px;	
	background-image: url("https://images.pexels.com/photos/374857/pexels-photo-374857.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
	background-repeat: no-repeat;
	background-position: center;
	background-size:cover;
}
.imgcontainer {
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.r1,.r2
{
	width:100%;
	padding:10px 15px;
	margin:5px 0px;
	border: 1px solid lightgrey;
	outline: none;
	border-radius: 2px;
	font-size: 17px;

}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;

}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%;
  height:auto; /* Could be more or less, depending on screen size */

}
::placeholder
	{
		text-align: center;
	}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 30px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.submit-btn
	{
			background-color:#4CAF50;
			color: white; 
			width: 100%;
  			padding: 10px 30px;
  			display: block;
  			outline: none;
			margin:auto;
			border:none;
			cursor: pointer;
			font-size: 20px;

	}
	a
	{
		text-decoration: none;
	}
	.slide-controls
	{
		width:100%;
		margin: 35px auto;
		position: relative;
		box-shadow: 0 0 20px 9px #ff61241f;

	}
	.toggle-btn
	{
		text-align: center;
		padding: 10px 45px;
		cursor: pointer;
		background: transparent;
		border:0;
		outline: none;
		position: relative;
		font-size: 20px;
	}
	#btn
	{
		text-align: center;
		position: absolute;
		width:50%;
		height: 100%;
		background: linear-gradient(to right,lightgrey,lightgrey);
		transition: .5s;
	}
	.v
	{
		text-align: center;
		color: white;
		padding-top: 200px;
		font-size: 45px;
	}
	.about-us,#ab
	{
		text-align: center;
		width: 100%;
		height: 650px;
	}
	.developers
	{
		width: 100%;
		height: 650px;
	}
	.f1
	{
		margin-left: 300px;
		margin-top: 160px;
		float: left;
	}
	.about
	{
		float: right;
		width: 30%;
		height: 50%;
		margin-top: 120px;
		margin-right: 240px;
		padding-top: 30px;
		padding-left:25px;
		padding-right:25px;
		padding-bottom: 30px;  
		box-shadow: 3px 3px 5px 6px #ccc; 
	}
	.profiles
	{
		display: flex;
		justify-content: space-around;
		margin-top: 150px;
	}
	.profile
	{
		flex-basis: 260px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		border-radius:5px;
		border-top: 4px solid red;
		padding: 10px;
	}
	.profile1
	{
		flex-basis: 260px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		border-radius:5px;
		border-top: 4px solid blue;
		padding: 10px
	}
	.profile2
	{
		flex-basis: 260px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		border-radius:5px;
		border-top: 4px solid green;
		padding: 10px
	}
	.projile-img
	{
		height: 150px;
		width: 150px;
		border-radius: 50%;
		cursor: pointer;
		transition: 400ms;
		margin-left: 95px;
		margin-top: 20px;
	}

	.profile:hover .profile-img{
		filter: grayscale(0);
	}
	.user-name
	{
		text-align: center;
		color: #696969;
	}
	.s1
	{
		padding: 10px 25px;
		margin-left: 75px;
		border-radius: 10px;
		border: 2px solid red;
		border:none;
		cursor: pointer;
		font-size:15px;
	}
	.s1:hover,.s1:focus
	{
		color: red;
  		cursor: pointer;
	}
	.courses
	{
		width: 100%;
		height: 650px;
		background-image: url("bg.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
#login
{
	left: 50%;
}

#register
{
	left: 50%;
}
.services{
  text-align: center;
  color: white;
}
.services h1{
  display: inline-block;
  text-transform: uppercase;
  border-bottom: 4px solid #3498db;
  font-size: 20px;
  padding-bottom: 10px;
  margin-top: 40px;
}
.cen{
  max-width: 1200px;
  margin: auto;
  overflow: hidden;
  padding: 20px;
}
.service{
  display: inline-block;
  width: calc(100% / 3);
  margin: 0 -2px;
  padding: 20px;
  box-sizing: border-box;
  cursor: pointer;
  transition: 0.4s;
}
.service:hover{
  background: #ddd;
}
.service i{
  color: #3498db;
  font-size: 34px;
  margin-bottom: 30px;
}
.service h2{
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 500;
  margin: 0;
}
.service p{
  color: gray;
  font-size: 15px;
  font-weight: 500;
}
.contact-form
{
	width: 100%;
	height: 660px;
}
.container2{
	position: relative;
	width: 40%;
	height: 80%;
	justify-content: center;
	align-items: center;
	margin-left: 500px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.contact-box
{
	margin-top: 20px;
	margin-left: 200px;
}
.field{
	width: 40%;
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}
.b12{
	width: 20%;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}
.container1{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container1:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.lef{
	background: url("bg2.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.rig{
	padding: 25px 40px;
}

.f5{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

.f5:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #2ecc71;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}

.b12{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #2ecc71;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.b12:hover{
    background-color: #27ae60;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

.bot
{
	width: 100%;
	height:120px;
}
.footer
{
	display: flex;
	flex-flow:row wrap;
	padding:50px;
	color: #fff;
	background-color: #011c39;
}
.footer > *{
	flex: 1 100%;
}
.footer-left
{
	margin-right:1.25em;
	margin-bottom: 2em; 
}
.footer-left img{
	width: 50%;
}
.p3
{
	font-weight: 600;
	font-size: 17px;
}
.footer ul{
	list-style: none;
	padding:0;
}
.footer a{
	text-decoration: none;
}
.footer-right
{
	display: flex;
	flex-flow: row wrap;
}
.footer-right > *{
	flex: 1 50%;
	margin-right: 1.28em;
}
.box a
{
	color: #999;
}
.footer-bottom{
	text-align: center;
	color: #999;
	padding-top: 50px;
}
.footer-left p{
	padding-right: 20%;
	color: #999;
}
.socials a{
	background: #364a62;
	width: 40px;
	height: 40px;
	display: inline-block;
	margin-right: 10px;
}
.socials a i{
	color: #e7f2f4;
	padding: 10px 12px;
	font-size: 20px;
}
.dropdown{
	float: right;
	cursor: pointer;
	width: 40px;
	height: 40px;
	position: relative;
  display: inline-block;
  margin-right: 220px;
  height: auto;
}
.dropdown i{
	font-size: 40px;
}
.dropdown-content {
  display: none;
  position: absolute;
  top: 30px;
  padding: 10px 20px;
  background-color: lightgrey;
  width: 200px;
  box-sizing: 0 5px 25px rgba(0,0,0,0.1);
  transition: 0.5s;
  z-index: 1;
   border-radius:15px; 
}
.dropdown .dropdown-content::before{
	content:  '';
	position: absolute;
	top: -5px;
	right: 210px;
	width: 20px;
	height: 20px;
	background-color: lightgrey;
	transform: rotate(45deg);

}
.dropdown ul li{
  list-style: none;
  padding: 10px 0;
  border-top: 1px solid rgba(0,0,0,0.1);
  display: flex;
  align-items: center;
}
.dropdown ul li i{
	max-width: 20px;
	margin-right: 10px;
	opacity: 0.5s;
	transition: 0.5s;
}
.dropdown ul li:hover i{
	opacity: 1;
}
.dropdown ul li a{
	display: inline-block;
	text-decoration: none;
	color: #555;
	font-weight: 500;
	transition: 0.5s;
}
.dropdown ul li:hover a{
	color: #ff5d94;
}
.show {display: block;}
@media screen and (min-width: 600px)
{
	.footer-right > *{
		flex: 1;
	}
	.footer-left{
		flex: 1 0px;
	}
	.footer-right{
		flex: 2 0px;
	}
}


textarea{
	min-height: 150px;
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
	</style>
<body>
	<div class="z" >
		<div class="left">
			<a href="newproject.php"><img class="x" src="https://www.simplilearn.com/ice9/new_logo.svgz"></a>
		</div>
		<div class="d1">
			<img style="width: 20px;margin-top: 9px" src="https://img.icons8.com/color/2x/about.png">
		</div>
		<div class="right">
			<a href="#ab" class="y"  >About us</a>
		</div>
		<div class="d1">
			<img src="https://img.icons8.com/color/2x/user-group-skin-type-7.png" style="width:35px;margin-left:15px">
		</div>
		<div class="right">
			<a href="#dev" class="y">Team</a>
		</div>
		<div class="d1">
			<img src="https://img.icons8.com/fluent/2x/book.png" style="width:25px;margin-left:15px;margin-top:4px">
		</div>
		<div class="right">
			<a href="#crc" class="y">Courses</a>
		</div>
		<div class="d1">
			<img src="https://img.icons8.com/ultraviolet/2x/add-contact-to-company.png" style="width:25px;margin-left:15px;margin-top:4px">
		</div>
		<div class="right">
			<a href="#contact" class="y">Contact us</a>
		</div>
		<?php if(!isset($_SESSION['name']))
		echo " <div class='g' id='first'>
			<button class='x71' onclick='loginform()' style='width:auto;' type='submit'>Login</button>
		</div> " ?>
		<?php if(isset($_SESSION['name']))
		echo " <div class='dropdown' id='third'>
			<i onclick='myFunction()' class='fa fa-user-circle-o'></i>
			<ul id='myDropdown' class='dropdown-content'>
  				<li><i class='fa fa-user' style='font-size:15px;'></i> <a href='profilepage.php'>my profile</a></li>
  				<li><i class='fa fa-edit' style='font-size:15px;'></i> <a href='editprofile.php'>Edit profile</a></li>
  				<li><i class='fa fa-sign-out' style='font-size:15px;'></i> <a href='newlogout.php' id='second' >Logout</a></li>
  			</ul>
		</div>";?>
	</div>
	<!--sign in form -->
	<div id="id01" class="modal">
  
  		<div class="modal-content animate">
    		<div class="imgcontainer">
    			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    		</div>
    		<div class="wrapper" style="width:70%;height:70%;margin: 30px;padding: 30px;border-radius:5px;overflow: hidden;">
    			<div class="title-text" style="display: flex;width: 200%">
    				<div class="title login" style="width: 50%;font-size:35px;font-weight: 600;text-align: center">Login Form</div>
    			</div>
    			<div class="form-container" style="width: 100%;overflow: hidden;">
    				<div class="form-inner" style="display: flex;width: 200%;">
    					<form action="newlogin.php" method="post" class="login" id="login" style="width:50%;">
    						<div style="height: 50px;width: 90%;margin-top: 20px;padding-top: 2px;padding-bottom: 2px;">
    							<input type="text" class="r1" placeholder="username or email" name="name" required="">
    						</div>
    						<div style="height: 50px;width: 90%;margin-top: 20px;">
    							<input type="password" class="r2" placeholder="Password" name="password" required="">
    						</div><br><br>
    						<div class="pass-link">
    							<a href="forgotpassword.php">Forgot password?</a><br><br>
    						</div>
    						<div>
    							<input type="submit" class="submit-btn" value="Login">
    						</div><br>
    						<div class="signup-link">Not a member? <a href="http://localhost/signup.php">Signup now</a></div>
    					</form>
    				</div>
    			</div>
    		</div>
  		</div>
	</div>
	<div class="bg">
		<h1 class="v">Looking for Something?</h1>
		<p style="text-align: center;color: white;font-family: Comic Sans MS;">Master your skills with Free online courses And quizes</p>
	</div>
	<div class="about-us" id="ab">
		<h1>About</h1>
			<div class="f1">
				<img src="https://qph.fs.quoracdn.net/main-qimg-0d2f09ef2c82aa21451731c4b8df024c" style="width: 400px;">
			</div>
			<div class="about">
				<h3 style="text-transform: uppercase;color: #696969" >We transform lives by empowering people via digital skills.</h3>
				<p style="text-align: left;color: #C0C0C0;">Simplilearn is the world's #1 online bootcamp for digital economy skills training focused on helping people acquire the skills they need to thrive in the digital economy.</p>
				<p style="text-align: left;color: #C0C0C0;">We provide rigorous online training in disciplines such as Cyber Security, Cloud Computing, Project Management, Digital Marketing, and Data Science, among others. In other words, we specialize in areas where technologies and best practices are changing rapidly, and the demand for qualified candidates significantly exceeds supply.</p>
			</div>
	</div>
	<div class="developers" id="dev">
		<h1 style="text-align: center;">Developers</h1>
		<div class="profiles">
			<div class="profile">
				<img src="rakesh.jpeg" style="width:80px;height:80px;" class="projile-img" align="center">
				<h3 class="user-name">Rakesh Katakam</h3>
				<p style="text-align:center;color: #C0C0C0;">I strongly feels that technology can be used to make learning more accessible and to personalize learner experience for students. </p>
				<a href="https://www.instagram.com/katakamrakesh/" target="_blank"><input class="s1" type="button" value="Follow +"></a>			
			</div>
			<div class="profile1">
				<img src="abhi.jpeg" style="width:80px;height:80px;" class="projile-img">
				<h3 class="user-name">Abhi lunagariya</h3>
				<p style="text-align:center;color: #C0C0C0;">Talent is universal but opportunities are not.With access to online learning resources and instruction,anyone,anywhere,can gain skills and transform their lives in meaningful ways</p>
				<a href="https://www.instagram.com/abhi.lunagariya/" target="_blank"><input class="s1" type="button" value="Follow +"></a>
			</div>
			<div class="profile2">
				<img src="ganeshjadhav.jpeg" style="width:80px;height:80px;" class="projile-img">
				<h3 class="user-name">Ganesh Jadhav</h3>
				<p style="text-align:center;color: #C0C0C0;">Real education should consists of drawing the goodness and the best out of our own students.What better does books can there be the books of humanity</p>
				<a href="https://www.instagram.com/ganeshjadhav126_

/" target="_blank"><input class="s1" type="button" value="Follow +"></a>			
			</div>
		</div>
	</div>
	<div class="courses" id="crc">
		<div class="services">
      		<h1>Our Services</h1>
      		<div class="cen">
        		<a href="coursesection.php" style="color:white; ">
        			<div class="service">
        		  	<i class="devicon-cplusplus-line"></i>
          		  	<h2>C++</h2>
         			<p>C++ is a general purpose programming language and widely used now a days for competitive programming..</p>
        		</div></a>

        		<a href="javacoursepage.php" style="color:white; ">	
        		<div class="service">
        	  	<i class=""></i>
          			<h2>Java</h2>
          			<p>Java is one of the most popular programming language in the world.It is easy to learn and simple to use.</p>
        		</div>
        		</a>

        		<a href="phpcourse.php" style="color:white; ">
        		<div class="service">
          			<i class=""></i>
          			<h2>Php</h2>
          			<p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.<br>"PHP: Hypertext Preprocessor"</p>
        		</div>
        		</a>

        		<a href="PythonCourseNew.php" style="color:white; ">
        		<div class="service">
          			<i class="fas fa-apple-alt"></i>
          			<h2>Python</h2>
          			<p>Python is a programming language.Python can be used on a server to create web applications and be used alongside software to create workflows</p>
        		</div>
        		</a>

        		<a href="sql.php" style="color:white; ">
        		<div class="service">
          			<i class="fas fa-archway"></i>
          			<h2>SQL</h2>
          			<p>SQL is a database computer language designed for the retrieval and management of data in a relational database. </p>
        		</div>
        		</a>

        	</a>
      		</div>
    	</div>
	</div>
	<div class="contact-form" id="contact">
		<div class="container">
		<div class="contact-box">
			<div class="lef"></div>
			<div class="rig">
				<h2 class="f5" style="color: #696969">Contact us for latest news and updates. subscribe our Simplilearn :)</h2>
				<form action="contact.php" method="post">
					<input type="text" class="field" name="Name" placeholder="Your Name" required="">
					<input type="text" class="field" name="email" placeholder="Your Email" required="">
					<input type="text" class="field" name="phone" placeholder="Phone" required="">
					<textarea placeholder="Message" name="msg" class="field" required=""></textarea>
					<input type="submit" name="" class="b12" value="Send">
				</form>
			</div>
		</div>
	</div>
	</div>
	<div class="bot">
		<footer class="footer">
			<div class="footer-left">
				<img src="https://www.simplilearn.com/ice9/new_logo.svgz" style="width: 140px;" alt=""><br>
				<p>5th floor,A-118</p>
				<p>Sector-136,Noida,Uttar Pradesh-201305</p>
				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a><br><br>
					<a href="#"><i class="fa fa-youtube"></i></a>
					<a href="#"><i class="fa fa-telegram"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
			<ul class="footer-right">
				<li>
					<h2 class="p3">Company</h2>
					<ul class="box">
						<li><a href="#ab">About us</a></li><br>
						<li><a href="#dev">Our team</a></li><br>
						<li><a href="http://localhost/PrivacyTerms.php" target="_blank">Terms and Conditions</a></li><br>
						<li><a href="#contact">Contact us</a></li>
					</ul>
				</li>
				<li>
					<h2 class="p3">Learn</h2>
					<ul class="box">
						<li><a href="coursesection.php">C++</a></li><br>
						<li><a href="javacoursepage.php">Java</a></li><br>
						<li><a href="sql.php">Sql</a></li><br>
						<li><a href="PythonCourseNew.php">Python</a></li><br>
						<li><a href="phpcourse.php">Php</a></li>
					</ul>
				</li>
				<li>
					<h2 class="p3">Practice</h2>
					<ul class="box">
						<li><a href="#crc">Courses</a></li><br>
						<li><a href="">Quiz</a></li><br>
					</ul>
				</li>
			</ul>
			<div class="footer-bottom">
				<p>All rights reserved by &copy; simplilearn 2020 </p>
			</div>
		</footer>
	</div>
	<?php
		if(isset($_SESSION['p23']))
		{
			$y=$_SESSION['p23'];
			echo "<script type='text/javascript'>alert('$y')</script>";
			unset($_SESSION['p23']);
		}
  		if(isset($_SESSION['error']))
  		{
  			$y=$_SESSION['error'];
  			echo "<script type='text/javascript'>alert('$y')</script>";
  			unset($_SESSION['error']);
  			unset($_SESSION['name']);
  			session_destroy();
  		} 
  		else if(isset($_SESSION['name']) && isset($_SESSION['count']))
  		{
  			echo "<script type='text/javascript'>alert('Successfully logged')</script>";
  			unset($_SESSION['count']);
  		}
  		else if (isset($_SESSION['logout'])) 
  		{
  			echo "<script type='text/javascript'>alert('Successfully logged out')</script>";
  			unset($_SESSION['logout']);
  		}
  	?>
<script>

	var modal = document.getElementById('id01');
	window.onclick = function(event) 
	{
    	if (event.target == modal) 
    	{
    	    modal.style.display = "none";
    	}
	}
	function myFunction() 
	{
  		document.getElementById("myDropdown").classList.toggle("show");
	}
	function loginform()
	{
		document.getElementById('id01').style.display='block'
	}
</script>
</body>
</html>