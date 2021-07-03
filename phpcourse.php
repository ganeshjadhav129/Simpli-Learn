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
	@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family:	 sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  position: relative;
  margin: 10px;
}

.wrapper .sidebar{
  width: 258px;
  height: auto;
  margin-top: 1px;
  padding: 30px 0px;
  position: absolute;
  background-color: white;
}

.c2{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
  list-style: none;
}    
  

.c1{
  color: black;
  display: block;
}

.course{
		cursor: pointer;
	width: 40px;
	height: 40px;
	position: relative;
  display: inline-block;
  margin-left: 240px;
  height: auto;
  margin-top:-2px;
	}
	.course i{
		font-size: 40px;
	}
	.dd-content{
		display: none;
  position: absolute;
  padding: 10px 20px;
  background-color: white;
  width: 200px;
   box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  box-sizing: 0 5px 25px rgba(0,0,0,0.1);
  transition: 0.5s;
  z-index: 1;
	}
.course ul li{
  list-style: none;
  padding: 10px 0;
  border-bottom: 1px solid rgba(0,0,0,0.01);
  display: flex;
  align-items: center;
}
.course ul li i{
	max-width: 20px;
	margin-right: 10px;
	opacity: 0.5s;
	transition: 0.5s;
}
.course ul li:hover i{
	opacity: 1;
}
.course ul li a{
	display: inline-block;
	text-decoration: none;
	color: #555;
	font-weight: 500;
	transition: 0.5s;
}
.course ul li:hover a{
	color: #ff5d94;
}
.c2:hover{
  background-color: lightgrey;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
.wrapper .Content
{
	float: right;
	width:1180px;
	min-height: 720px;
	height:auto;
	background-color:white;
	margin-right:60px;
	margin-top: 1px;
}

.y
{
	text-align: center;
	margin-top: 20px;
}
.intro
{
	padding:10px;
	display: block;
}
.intro p,h3{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.syntax,.variables,.eprint,.dtypes,.deci,.loops{
	display: none;
}
.syntax p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}

.variables p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.eprint p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.dtypes p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}

.deci p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.loops p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.z
	{
		width: 100%;
		padding-top: 20px;
		height: 80px;
		outline: none;
		top: 0;
		background-color: white;
	}
	.left
	{
		float: left;
		width: 140px;
		margin-left: 10px;
	}
	.g
	{
		float: right;
		margin-right: 60px;
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
	.dropdown{
	float: right;
	cursor: pointer;
	width: 40px;
	height: 40px;
	position: relative;
  display: inline-block;
  margin-right: 240px;
  height: auto;
}
	.dropdown i{
	font-size: 40px;
}
.dropdown-content {
  display: none;
  position: absolute;
  top: 50px;
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
	right: 160px;
	width: 20px;
	height: 20px;
	transform: rotate(45deg);
	background-color: lightgrey;
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
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%;
  height:auto; /* Could be more or less, depending on screen size */

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
	.footer
	{
		padding:50px;
		color: #fff;
		background-color: #011c39;
	}
	#login
	{
		left: 50%;
	}
	.footer p{
		text-align: center;
	}
.footer a{
	text-decoration: none;
}
.footer-bottom{
	text-align: center;
	color: #999;
	margin-bottom:-30px;
}
.socials a{
	background: #364a62;
	width: 40px;
	height: 40px;
	display: inline-block;
}
.socials a i{
	color: #e7f2f4;
	padding: 10px 12px;
	font-size: 20px;
}
.imgcontainer {
  position: relative;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
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
  img.avatar {
  width: 40%;
  border-radius: 50%;
}

</style>
<body>
	<div class="z">
		<div class="left">
			<a href="newproject.php"><img src="https://www.simplilearn.com/ice9/new_logo.svgz" style="width: 140px;margin-left: 10px;cursor: pointer;">
		</div></a>
		<div class="course">
			<input type="button"  onclick="mycourse()" class="x71" value="Courses" name="">
			<ul id='myDrop' class='dd-content'>
  				<li><a href='coursesection.php'>C++</a></li>
  				<li><a href='javacoursepage.php'>Java</a></li>
  				<li><a href='sql.php' >Sql</a></li>
  				<li><a href='phpcourse.php' >Php</a></li>
  				<li><a href='PythonCourseNew.php' >Python</a></li>
  			</ul>
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
	<div id="id01" class="modal">
  
  		<div class="modal-content animate">
    		<div class="imgcontainer">
    			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    		</div>
    		<div class="wrapper1" style="width:70%;height:70%;margin-left: 60px;padding: 30px;border-radius:5px;overflow: hidden;">
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
    							<a href="#">Forgot password?</a><br><br>
    						</div>
    						<div>
    							<input type="submit" class="submit-btn" value="Login" onclick="account()">
    						</div><br>
    						<div class="signup-link">Not a member? <a href="http://localhost/signup.php">Signup now</a></div>
    					</form>
    				</div>
    			</div>
    		</div>
  		</div>
	</div>
	<div class="wrapper">
    	<div class="sidebar">
        	<ul>
        	    <li class="c2"><a href="#" class="c1" onclick="intro()">PHP | Introduction</a></li>
	            <li class="c2"><a href="#" class="c1" onclick="syntax()">PHP | Basic Syntax</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="variables()">PHP | Variables</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="eprint()">PHP | echo and print</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="dtypes()">PHP | Data Types</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="decision()">PHP | Decision Making</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="loops()">PHP | Loops</a></li>
    	         <li class="c2"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdVLP5yLYqDIb4sO-QYjyDJHCHqlhCDph7fw8sVRp0_jA-jrQ/viewform?usp=sf_link" target="_blank" class="c1">Quiz-Php</a></li>
    	    </ul>
		</div>
		<div class="Content" style="font-family: sans-serif;">
			<div class="intro" id="v">
				<h1 class="y">PHP | Introduction</h1>
				<img src="https://www.geeksforgeeks.org/wp-content/uploads/php-1-768x256.png" style="margin-left: 190px;margin-top:40px;">
				<p>The term PHP is an acronym for PHP: Hypertext Preprocessor. PHP is a server-side scripting language designed specifically for web development.</p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;" >Websites like www.facebook.com, www.yahoo.com are also built on PHP.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">One of the main reason behind this is that PHP can be easily embedded in HTML files and HTML codes can also be written in a PHP file. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">The thing that differentiates PHP with client-side language like HTML is, PHP codes are executed on server whereas HTML codes are directly rendered on the browser. PHP codes are first executed on the server and then the result is returned to the browser.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">The only information that the client or browser knows is the result returned after executing the PHP script on the server and not the actual PHP codes present in the PHP file. Also, PHP files can support other client-side scripting languages like CSS and JavaScript.
					</li>
				</ul>
				<h3>Why should we use PHP?</h3>
				<p>PHP can actually do anything related to server-side scripting or more popularly known as the backend of a website. For example, PHP can receive data from forms, generate dynamic page content, can work with databases, create sessions, send and receive cookies, send emails etc. There are also many hash functions available in PHP to encrypt user’s data that makes PHP secure and reliable to be used as a server-side scripting language. So these are some of the abilities of PHP that makes it suitable to be used as server-side scripting language. You will get to know more of these abilities in further tutorials.</p>
					<p>
					Even if you are not convinced by the above abilities of PHP, there are some more features of PHP. PHP can run on all major operating systems like Windows, Linux, Unix, Mac OS X etc. Almost all of the major servers available today like Apache supports PHP. PHP allows using wide range of databases. And the most important factor is that it is free to use and download and anyone can download PHP from its official source : www.php.net.
					</p>
			</div>
			<div class="syntax" id="syn">
				<h1 class="y">PHP | Basic Syntax</h1>
				<p>PHP or Hypertext Preprocessor is a widely used open-source general purpose scripting language and can be embedded with HTML. PHP files are saved with “.php” extension. PHP scripts can be written anywhere in the document within PHP tags along with normal HTML.</p>
				<h2>PHP Tags or Escaping To PHP</h2>
				<p>The mechanism of separating a normal HTML from PHP code is called the mechanism of Escaping To PHP. There are various ways in which this can be done. Few methods are already set by default but in order to use few others like Short-open or ASP-style tags we need to change the configuration of php.ini file. These tags are also used for embedding PHP within HTML.</p>

				<h3>Canonical PHP Tags:</h3>
				<p>The script starts with <.?php and end with ?> . These tags are also called ‘Canonical PHP tags’. Every PHP command ends with a semi-colon (;). Let’s look at the hello world program in PHP:</p>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php<br>
					# Here echo command is used to print<br>
					echo "Hello, world!";<br>
					?><br>
				</div><br>
				<p>Output: </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Hello, world!
				</div>

				<h2>Comments in PHP</h2>
				<p>A comment is something which is ignored and not read or executed by PHP engine or the language as part of a program and is written to make the code more readable and understandable. These are used to help other users and developers to describe the code and what it is trying to do. It can also be used in documenting a set of code or part of a program. You must have noticed this in above sample programs.</p>
				<h3>Single Line Comment: </h3>
				<p>As the name suggests these are single line or short relevant explanations that one can add in there code. To add this, we need to begin the line with (//) or (#).</p>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php<br>
					// This is a single line comment <br>
					// These cannot be extended to more lines<br>
					echo "Hello, world!";<br>
					# This is also a single line comment<br>
					?><br>
				</div><br>
				<p>Output: </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					hello world!!!
				</div>

				<h2>Case Sensitivity in PHP</h2>
				<h3>PHP is insensitive of whitespace.</h3>
				<p>This includes all types of spaces that are invisible on the screen including tabs, spaces, and carriage return. Even one space is equal to any numbers of spaces or carriage return. This means that PHP will ignore all the spaces or tabs in a single row or carriage return in multiple rows. Unless a semi-colon is encountered, PHP treats multiple lines as a single command.</p>
				<h3>PHP is case-sensitive.</h3>
				<p> All the keywords, functions and class names in PHP (while, if, echo etc) are NOT case-sensitive except variables. Only variables with different cases are treated differently.</p>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php<br>
					// Here we can see that all echo<br>
					// statements are executed in the same manner<br><br>
					$variable = 25;<br>
					echo $variable;<br> 
					ECHO $variable; <br> 
					EcHo $variable; <br><br>
					// but this line will show RUNTIME ERROR as <br>
					// "Undefined Variable"<br>
					echo $VARIABLE<br>
					?><br>
				</div><br>
				<p>Output: </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					25<br>
					25<br>
					25<br>
				</div>				
			</div>

			<div class="variables" id="variables">
				<h1 class="y">PHP | Variables</h1>
				<p>Variables in a program are used to store some values or data that can be used later in a program. PHP has its own way of declaring and storing variables.
					</p><p>
There are few rules, that needs to be followed and facts that need to be kept in mind while dealing with variables in PHP:
				</p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;" >Any variables declared in PHP must begin with a dollar sign ($), followed by the variable name.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">A variable can have long descriptive names (like $factorial, $even_nos) or short names (like $n or $f or $x)</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">A variable name can only contain alphanumeric characters and underscores (i.e., ‘a-z’, ‘A-Z’, ‘0-9 and ‘_’) in their name.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Assignment of variables are done with assignment operator, “equal to (=)”. The variable names are on the left of equal and the expression or values are to the right of the assignment operator ‘=’.
					</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">One must keep in mind that variable names in PHP names must start with a letter or underscore and no numbers.
					</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">PHP is a loosely typed language and we do not require to declare the data types of variables, rather PHP assumes it automatically by analyzing the values. Same happens while conversion.
					</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">PHP variables are case-sensitive, i.e., $sum and $SUM are treated differently.
					</li>
				</ul>
				<p>Example: </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php <br><br>
					// These are all valid declarations<br>
					$val = 5;<br>
					$val2 = 2;<br>
					$x_Y = "gfg"; <br>
					$_X = "GeeksforGeeks";<br><br>
					// This is an invalid declaration as it <br> 
					// begins with a number <br>
					$10_ val = 56; <br><br>
					// This is also invalid as it contains  <br>
					// special character other than _ <br>
					$f.d = "num";  <br><br>
					?><br>
				</div>
				<h2>Variable Scopes</h2>
				<p>Scope of a variable is defined as its extent in program within which it can be accessed, i.e. the scope of a variable is the portion of the program with in which it is visible or can be accessed.</p>
				<p>Depending on the scopes, PHP has three variable scopes:</p>
				<h3>Local variables: </h3>
				<p>The variables declared within a function are called local variables to that function and has its scope only in that particular function. In simple words it cannot be accessed outside that function. Any declaration of a variable outside the function with same name as that of the one within the function is a complete different variable. We will learn about functions in details in later articles. For now consider a function as a block of statements.</p>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php <br><br>
					$num = 60; 	  <br>
					<br>
					function local_var() <br>
					{    <br>
					    // This $num is local to this function <br>
					    // the variable $num outside this function <br>
					    // is a completely different variable <br><br>
					    $num = 50; <br>
					    echo "local num = $num \n"; <br>
					} <br>
					<br>
					local_var(); <br>
					<br>
					// $num outside function local_var() is a  <br>
					// completely different Variable than that of  <br>
					// inside local_var() <br>
					echo "Variable num outside local_var() is $num <br>\n"; <br>
					  <br>
					?> <br>
				</div>

				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					local num = 50 <br>
Variable num outside local_var() is 60 <br>
				</div>

				<h3>Global variables:</h3>
				<p>The variables declared outside a function are called global variables. These variables can be accessed directly outside a function. To get access within a function we need to use the “global” keyword before the variable to refer to the global variable.</p>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php <br>
					  <br>
					$num = 20; <br>
					  <br>
					//function to demonstrate use of global variable<br> 
					//function global_var() <br>
					{ <br>
					    <br>
					    // we have to use global keyword before <br> 
    					// the variable $num to access within  <br>
    					// the function<br>
					    global $num; <br>
					      <br>
					    echo "Variable num inside function : $num \n"; <br>
					} <br>
					  <br>
					global_var(); <br>
					  <br>
					echo "Variable num outside function : $num \n"; <br>
					  <br>
					?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Variable num inside function : 20 <br>
					Variable num outside function : 20 <br>
				</div>

				<h3>Static variable:</h3>
				<p> It is the characteristic of PHP to delete the variable, ones it completes its execution and the memory is freed. But sometimes we need to store the variables even after the completion of function execution. To do this we use static keyword and the variables are then called as static variables.</p>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php <br>
  					<br>
  					// function to demonstrate static variables <br>
					function static_var() <br>
					{    <br>
						// static variable <br>
					    static $num = 5; <br>
					    $sum = 2; <br>
					      <br>
					    $sum++; <br>
					    $num++; <br>
					      <br>
					    echo $num, "\n"; <br>
					    echo $sum, "\n"; <br>
					} <br>
					   <br>
					   // first function call<br>
					static_var(); <br>
					  <br>
					  // second function call<br>
					static_var(); <br>
					  <br>
					?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					6<br>
					3<br>
					7<br>
					3<br>
				</div>

			</div>

			<div class="eprint" id="eprint">
				<h1 class="y">PHP | echo and print</h1>
				<p>We have seen echo statement quite frequently in PHP codes of previous article. It is the most basic way for displaying output in PHP.</p>
				<p>However, there are two basic ways to get output in PHP:-<br>		echo<br>		print</p>
				<h2>PHP echo statement</h2>
				<p>In PHP ‘echo’ statement is a language construct and never behaves like a function, hence no parenthesis required. The end of echo statement is identified by the semi-colon (‘;’).
				We can use ‘echo’ to output strings or variables. Below are some of the usage of echo statement in PHP:</p>

				<h3>Displaying Strings:</h3>
				<p>We can simply use the keyword echo followed by the string to be displayed withing quotes. Below example shows how to display strings with PHP:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Hello,This is a display string example!<br>
				</div>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php <br>
					echo "Multiple ","argument ","string!";  <br>
					?><br>
				</div>

				<h3>Displaying Strings:</h3>
				<p>We can pass multiple string arguments to the echo statement instead of single string argument, separating them by comma (‘,’) operator. For example, if we have two strings say “Hello” and “World” then we can pass them as (“Hello”,”World”). Below example shows how to do this:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php <br>
					echo "Multiple ","argument ","string!";  <br>
					?><br>
				</div>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Multiple argument string!<br>
				</div>

				<h3>Displaying Variables:</h3>
				<p>Displaying variables with echo statement is also as easy as displaying normal strings. Below example shows different ways to display variables with the help of PHP echo statement:-</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					< ?php <br>
					//defining the variables <br>
					$text = "Hello, World!"; <br>
					  <br>
					$num1 = 10; <br>
					  <br>
					$num2 = 20; <br>
					  <br>
					//echoing the variables <br>
					echo $text."\n"; <br>
					  <br>
					echo $num1."+".$num2."="; <br>
					  <br>
					echo $num1 + $num2;<br>
					?><br>
				</div>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Hello, World!<br>
					10+20=30!<br>
				</div>
				<p>The (.) operator in the above code can be used to concatenate two strings in PHP and the “\n” is used for a new line and is also known as line-break. We will learn about these in further articles.</p>
				<h2>PHP print statement</h2>
				<p>The PHP print statement is similar to the echo statement and can be used alternative to echo at many times.It is also language construct and so we may not use parenthesis : print or print(). The main difference between the print and echo statement is that print statement can have only one argument at a time and thus can print a single string. Also, print statement always returns a value 1.
				Like echo, print statement can also be used to print strings and variables. Below are some examples of using print statement in PHP:</p>
				<h3>Displaying String of Text:</h3>
				<p> We can display strings with print statement in the same way we did with echo statements. The only difference is we can not display multiple strings separated by comma(,) with a single print statement. Below example shows how to display strings with the help of PHP print statement:-</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						< ?php<br> 
						print "Hello, world!"; <br>
				?> <br>
				</div>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Hello, World!<br>
				</div>
				<h3>Displaying Variables: </h3>
				<p>Displaying variables with print statement is also same as that of echo statement. The example below shows how to display variables with the help of PHP print statement:-</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						< ?php<br> 
						//defining the variables <br>
						$text = "Hello, World!"; <br>
						  <br>
						$num1 = 10;<br> 
						  <br>
						$num2 = 20;<br> 
						  <br>
						//echoing the variables <br>
						print $text."\n"; <br>
						  <br>
						print $num1."+".$num2."="; <br>
						  <br>
						print $num1 + $num2; <br>
						?> <br>
				</div>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Hello, World!<br>
					10+20=30<br>

				</div>
				<h2>Comparison between Echo and Print in PHP:</h2>
				<table style="width:50%;margin-left: 200px;">
  				<tr>
  					<th></th>
    				<th>echo</th>
    				<th>print</th>
  				</tr>
  				<tr>
  					<th>type</th>
    				<th>this is a type of output string</th>
    				<th>this is a type of output string</th>
  				</tr>
  				<tr>
  					<th>parenthesis</th>
    				<th>not written with parenthesis</th>
    				<th>it can or can not be written with parenthesis</th>
  				</tr>
  				<tr>
  					<th>strings</th>
    				<th>it can output one or morw strings</th>
    				<th>it can output only one string at a time, and returns 1.</th>
  				</tr>
  				<tr>
  					<th>functionality</th>
    				<th>echo is faster than print</th>
    				<th>print is slower than echo</th>
  				</tr>
  				<tr>
  					<th>argument</th>
    				<th>echo($arg1,$arg2.....)</th>
    				<th>print($arg)</th>
  				</tr>
  				
				</table><br>
				
			</div>

			<div class="dtypes" id="dtypes">
				<h1 class="y">PHP | Data Types</h1>
				<p>Data Types defines the type of data a variable can store. PHP allows eight different types of data types. All of them are discussed below. The first five are called simple data types and the last three are compound data types:</p>
				<h2>Integer :</h2>
				<p> Integers hold only whole numbers including positive and negative numbers, i.e., numbers without fractional part or decimal point. They can be decimal (base 10), octal (base 8) or hexadecimal (base 16). The default base is decimal (base 10). The octal integers can be declared with leading 0 and the hexadecimal can be declared with leading 0x. The range of integers must lie between -2^31 to 2^31.</p>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">< ?php <br>
				  <br>
				// decimal base integers <br>
				$deci1 = 50;  <br>
				$deci2 = 654;  <br>
				  <br>
				// octal base integers <br>
				$octal1 = 07;  <br>
				  <br>
				// hexadecimal base integers <br>
				$octal = 0x45;  <br>
				  <br>
				$sum = $deci1 + $deci2; <br>
				echo $sum; <br>
				  <br>
				?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">704</div>
				<h2>Double:</h2>
				<p> Can hold numbers containing fractional or decimal part including positive and negative numbers. By default, the variables add a minimum number of decimal places.<br>
				Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;"> 
				<? php <br>
				  <br>
				$val1 = 50.85;  <br>
				$val2 = 654.26;  <br>
				  <br>
				$sum = $val1 + $val2; <br>
				  <br>
				echo $sum; <br>
				  <br>
				?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">705.11</div>
				<h2>String : </h2>
				<p>Hold letters or any alphabets, even numbers are included. These are written within double quotes during declaration. The strings can also be written within single quotes but it will be treated differently while printing variables. To clarify this look at the example below.<br>
				Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				< ?php 
				  <br>
				$name = "Krishna";<br> 
				echo "The name of the Geek is $name \n"; <br>
				echo 'The name of the geek is $name'; <br>
				  <br>
				?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				The name of the Geek is Krishna <br>
				The name of the geek is $name<br>
				</div>
				<h2>NULL:</h2>
				<p> These are special types of variables that can hold only one value i.e., NULL. We follow the convention of writing it in capital form, but its case sensitive.<br>
				Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				< ?php <br>
				  <br>
				$nm = NULL; <br>
				echo $nm;    // This will give no output <br>
				  <br>
				?> <br>
				</div>
				<h2>Boolean: </h2>
				<p>Hold only two values, either TRUE or FALSE. Successful events will return true and unsuccessful events return false. NULL type values are also treated as false in Boolean. Apart from NULL, 0 is also consider as false in boolean. If a string is empty then it is also considered as false in boolean data type.<br>
				Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				< ?php <br>
				  <br>
				if(TRUE) <br>
				    echo "This condition is TRUE"; <br>
				if(FALSE) <br>
				    echo "This condition is not TRUE"; <br>
				?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				This condition is TRUE
				</div>
				<h2>Arrays:</h2>
				<p> Array is a compound data-type which can store multiple values of same data type. Below is an example of array of integers.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				< ?php <br>
				  <br>
				$intArray = array( 10, 20 , 30); <br>
				  <br>
				echo "First Element: $intArray[0]\n"; <br>
				echo "Second Element: $intArray[1]\n"; <br>
				echo "Third Element: $intArray[2]\n"; <br>
				   <br>   
				?> <br>
				</div>
				Output:
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">First Element: 10
				Second Element: 20<br>
				Third Element: 30<br>
				</div>
				<p>We will discuss all about arrays in details in further articles.</p>
			</div>

			<div class="deci" id="deci">
				<h1 class="y">PHP | Decision Making</h1>
				<p>
				PHP allows us to perform actions based on some type of conditions that may be logical or comparative. Based on the result of these conditions i.e., either TRUE or FALSE, an action would be performed as asked by the user. It’s just like a two- way path. If you want something then go this way or else turn that way. To use this feature, PHP provides us with four conditional statements:
				</p>
				<ul>
                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;" > if statement
                    </li>
                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> if…else statement
                    </li>
                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> if…elseif…else statement
                    </li>
                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> switch statement
					</li>
				</ul>
				<p>Let us now look at each one of these in details:</p>
				<h2>if Statement: </h2>
				<p>This statement allows us to set a condition. On being TRUE, the following block of code enclosed within the if clause will be executed. <br><br>
				Syntax :</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				if (condition){ <br>
				    // if TRUE then execute this code<br>
				}<br>
				</div>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				< ?php <br>
				$x = 12; <br>
				  <br>
				if ($x > 0) { <br>
				    echo "The number is positive"; <br>
				} <br>
				?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				The number is positive
				</div>
				<h2>if…else Statement:</h2>
				<p> We understood that if a condition will hold i.e., TRUE, then the block of code within if will be executed. But what if the condition is not TRUE and we want to perform an action? This is where else comes into play. If a condition is TRUE then if block gets executed, otherwise else block gets executed. <br><br>
				Syntax:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				if (condition) {<br>
				    // if TRUE then execute this code<br>
				}<br>
				else{<br>
				    // if FALSE then execute this code<br>
				}<br>
				</div>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				< ?php <br>
				$x = -12; <br>
				  <br>
				if ($x > 0) { <br>
				    echo "The number is positive"; <br>
				} <br>
				  <br>
				else{ <br>
				    echo "The number is negative"; <br>
				} <br>
				?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				The number is negative
				</div>
				<h2>if…elseif…else Statement:</h2>
				<p> This allows us to use multiple if…else statments. We use this when there are multiple conditions of TRUE cases. <br><br>
				Syntax:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				if (condition) {<br>
				    // if TRUE then execute this code<br>
				}<br>
				elseif {<br>
				    // if TRUE then execute this code<br>
				}<br>
				elseif {<br>
				    // if TRUE then execute this code<br>
				}<br>
				else {<br>
				    // if FALSE then execute this code<br>
				}<br>
				</div>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				<  ?php <br>
				$x = "August"; <br>
				  <br>
				if ($x == "January") { <br>
				    echo "Happy Republic Day"; <br>
				} <br>
				  <br>
				elseif ($x == "August") { <br>
				    echo "Happy Independence Day!!!"; <br>
				} <br>
				  <br>
				else{ <br>
				    echo "Nothing to show"; <br>
				} <br>
				?> 
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Happy Independence Day!!!
				</div>
				<h2>switch Statement:</h2>
				<p> The “switch” performs in various cases i.e., it has various cases to which it matches the condition and appropriately executes a particular case block. It first evaluates an expression and then compares with the values of each case. If a case matches then the same case is executed. To use switch, we need to get familiar with two different keywords namely, break and default. <br>
				The break statement is used to stop the automatic control flow into the next cases and exit from the switch case. <br>
				The default statement contains the code that would execute if none of the cases match.<br><br>
				Syntax:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				switch(n) {<br>
				    case statement1: <br>
				        code to be executed if n==statement1; <br>
				        break; <br>
				    case statement2: <br>
				        code to be executed if n==statement2; <br>
				        break; <br>
				    case statement3: <br>
				        code to be executed if n==statement3; <br>
				        break; <br>
				    case statement4: <br>
				        code to be executed if n==statement4; <br>
				        break; <br>
				    ...... <br>
				    default: <br>
				        code to be executed if n != any case; <br>
				</div>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				< ?php 
				$n = "February"; <br>
				  <br>
				switch($n) { <br>
				    case "January": <br>
				        echo "Its January"; <br>
				        break; <br>
				    case "February": <br>
				        echo "Its February"; <br>
				        break; <br>
				    case "March": <br>
				        echo "Its March"; <br>
				        break; <br>
				    case "April": <br>
				        echo "Its April"; <br>
				        break; <br>
				    case "May": <br>
				        echo "Its May"; <br>
				        break; <br>
				    case "June": <br>
				        echo "Its June"; <br>
				        break; <br>
				    case "July": <br>
				        echo "Its July"; <br>
				        break; <br>
				    case "August": <br>
				        echo "Its August"; <br>
				        break; <br>
				    case "September": <br>
				        echo "Its September"; <br>
				        break; <br>
				    case "October": <br>
				        echo "Its October"; <br>
				        break; <br>
				    case "November": <br>
				        echo "Its November"; <br>
				        break; <br>
				    case "December": <br>
				        echo "Its December"; <br>
				        break; <br>
				    default: <br>
				        echo "Doesn't exist"; <br>
				} <br>
				?> 
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Its February
				</div>

			</div>

			<div class="loops" id="loops">
				<h1 class="y">PHP | Loops</h1>
				<p>
				Like any other language, loop in PHP is used to execute a statement or a block of statements, multiple times until and unless a specific condition is met. This helps the user to save both time and effort of writing the same code multiple times.<br>
				PHP supports four types of looping techniques;
				</p>
				<ul>
				                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;" >for loop
				                    </li>
				                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">while loop
				                    </li>
				                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">do-while loop
				                    </li>
				                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">foreach loop</li>
				                    
				                </ul>

				<p>Let us now learn about each of the above mentioned loops in details:</p>
				<h2>for loop:</h2>
				 <p>This type of loops is used when the user knows in advance, how many times the block needs to execute. That is, the number of iterations is known beforehand. These type of loops are also known as entry-controlled loops. There are three main parameters to the code, namely the initialization, the test condition and the counter.<br>
				Syntax:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    for (initialization expression; test condition; update expression) {<br>
				        // code to be executed<br>
				    }<br>
				</div>
				<p>
				In for loop, a loop variable is used to control the loop. First initialize this loop variable to some value, then check whether this variable is less than or greater than counter value. If statement is true, then loop body is executed and loop variable gets updated . Steps are repeated till exit condition comes.<br>
				Initialization Expression: In this expression we have to initialize the loop counter to some value. for example: $num = 1;<br>
				Test Expression: In this expression we have to test the condition. If the condition evaluates to true then we will execute the body of loop and go to update expression otherwise we will exit from the for loop. For example: $num <= 10;<br>
				Update Expression: After executing loop body this expression increments/decrements the loop variable by some value. for example: $num += 2;<br>
				Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    < ?php 
				    // code to illustrate for loop <br>
				    for ($num = 1; $num <= 10; $num += 2) { <br>
				        echo "$num \n"; <br>
				    }   <br>
				    ?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    1<br>
				    3<br>
				    5<br>
				    7<br>
				    9<br>
				</div>


				<h2>while loop: </h2>
				<p>The while loop is also an entry control loop like for loops i.e., it first checks the condition at the start of the loop and if its true then it enters the loop and executes the block of statements, and goes on executing it as long as the condition holds true.<br>
				Syntax:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    while (if the condition is true) {<br>
				        // code is executed<br>
				}<br>
				</div>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    < ?php <br>
				    // PHP code to illustrate while loops <br>
				    $num = 2; <br>
				    while ($num < 12) { <br>
				        $num += 2; <br>
				        echo $num, "\n"; <br>
				    }<br>
				    ?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    4<br>
				    6<br>
				    8<br>
				    10<br>
				    12<br>
				</div>

				<h2>do-while loop:</h2>
				<p> This is an exit control loop which means that it first enters the loop, executes the statements, and then checks the condition. Therefore, a statement is executed at least once on using the do…while loop. After executing once, the program is executed as long as the condition holds true.<br>
				Syntax:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    do {<br>
				        //code is executed<br>
				    } while (if condition is true); <br>
				</div>
				<p>Example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    < ?php <br>
				    // PHP code to illustrate do...while loops <br>
				    $num = 2; <br>
				    do { <br>
				        $num += 2; <br>
				        echo $num, "\n"; <br>
				    } while ($num < 12);   <br>
				    ?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    4<br>
				    6<br>
				    8<br>
				    10<br>
				    12<br>
				</div>
				<p>This code would show the difference between while and do…while loop.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    < ?php <br>
				    // PHP code to illustrate the difference of two loops <br>
				    $num = 2; <br>  
				    // In case of while <br>
				    while ($num != 2) { <br>
				        echo "In case of while the code is skipped"; <br>
				        echo $num, "\n"; <br>
				    } <br>
				    // In case of do...while <br>
				    do { <br>     
				        $num++; <br>
				        echo "The do...while code is executed atleast once "; <br>
				    } while($num == 2); <br>
				    ?> <br>
				</div>
				<p>Output:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				    The code is executed at least once <br>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
		function mycourse()
		{
			document.getElementById("myDrop").classList.toggle("show");
		}
		function loginform()
		{
			document.getElementById('id01').style.display='block'
		}
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
		var x=document.getElementById('v');
		var x1=document.getElementById('syn');
		var x2=document.getElementById('variables');
		var x3=document.getElementById('eprint');
		var x4=document.getElementById('dtypes');
		var x5=document.getElementById('deci');
		var x6=document.getElementById('loops');

		function intro()
		{
			x.style.display="block";
			x1.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
			x6.style.display="none";
			x7.style.display="none";
		}
		function syntax()
		{
			x1.style.display="block";
			x.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
			x6.style.display="none";
			x7.style.display="none";
		}
		function variables()
		{
			x2.style.display="block";
			x.style.display="none";
			x1.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
			x6.style.display="none";
			x7.style.display="none";
		}
		function eprint()
		{
			x3.style.display="block";
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
			x6.style.display="none";
			x7.style.display="none";
		}
		function dtypes()
		{
			x4.style.display="block";
			x3.style.display="none";
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x5.style.display="none";
			x6.style.display="none";
			x7.style.display="none";
		}
		function decision()
		{
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="block";
			x6.style.display="none";
			x7.style.display="none";
		}
		function loops()
		{
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
			x6.style.display="block";
			x7.style.display="none";
		}
		
	</script>
		<div style="width: 100%;overflow-y:auto;">
		<div class="bot">
		<footer class="footer">
				<img src="https://www.simplilearn.com/ice9/new_logo.svgz" style="width: 140px;margin-left:640px;margin-top:-120px;" alt="">
				<p>5th floor,A-118</p>
				<p>Sector-136,Noida,Uttar Pradesh-201305</p>
				<div class="socials" style="margin-left:580px;padding: 10px;">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
					<a href="#"><i class="fa fa-telegram"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			<div class="footer-bottom">
				<p>All rights reserved by &copy; simplilearn 2020 </p>
			</div>
		</footer>
	</div>
	</div>
</body>
</html>