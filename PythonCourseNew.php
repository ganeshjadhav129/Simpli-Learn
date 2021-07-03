<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
  width: auto;
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


.c2:hover{
  background-color: lightgrey;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .Content
{
	float: right;
	width:1180px;
	min-height: 720px;
	height:auto;
	background-color:white;
	margin-right:43px;
	margin-top: 1px;
}
.y
{
	text-align: center;
	margin-top: 20px;
}
.basics
{
	padding:10px;
	display: block;
}
.basics p,h3{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.syntax,.data,.variables,.operator,.decision,.storage,.funt{
	display: none;
}
.syntax p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.data p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.variables p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
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
   box-shadow: 2px 2px 4px rgba(0,0,0,40);
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
.operator p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.storage p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
.decision p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.storage p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.funt p,h2{
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
        	    <li class="c2"><a href="#" class="c1" onclick="basics()">python Programming Language</a></li>
	            <li class="c2"><a href="#" class="c1" onclick="syntax()">Basic Concepts of python</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="datatype()">Datatypes and Modifiers in python </a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="variables()">Variables</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="operator()">Operators</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="decision()">Decision making</a></li>
    	        <!-- <li class="c2"><a href="#" class="c1" onclick="storage()">Storage classes</a></li> -->
    	        <li class="c2"><a href="#" class="c1" onclick="fun()">functions</a></li>
    	         <li class="c2"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeoLEbfMA3jcNhha3ulVuREdr-b13ljAZHLN92nS9y_dfmyWQ/viewform?usp=sf_link" target="_blank" class="c1" >Quiz-Python</a></li>
    	    </ul>
		</div>
		<div class="Content" style="font-family: sans-serif;">
			<div class="basics" id="v">
            <h1 class="y">Introduction to Python </h1>
				<img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200711122552/Python-Programming-Language.png" style="margin-left: 100px;margin-top:40px;width: 950px;height: 300px;">
				<p>Python is a high-level, general-purpose and a very popular programming language. Python programming language (latest Python 3) is being used in web development, Machine Learning applications, along with all cutting edge technology in Software Industry. Python Programming Language is very well suited for Beginners, also for experienced programmers with other programming languages like C++ and Java. </p>
				<p>This specially designed Python tutorial will help you learn Python Programming Language in most efficient way, with the topics from basics to advanced (like Web-scraping, Django, Deep-Learning, etc.) with examples.
				</p>
				<h3>Below are some facts about Python Programming Language: </h3>
				<ol>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;" >Python is currently the most widely used multi-purpose, high-level programming language.</li>
					<br><li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Python allows programming in Object-Oriented and Procedural paradigms.</li>
					<br><li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Python programs generally are smaller than other programming languages like Java. Programmers have to type relatively less and indentation requirement of the language, makes them readable all the time. </li>
					<br><li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Python language is being used by almost all tech-giant companies like – Google, Amazon, Facebook, Instagram, Dropbox, Uber… etc.
					</li>
					<br><li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">The biggest strength of Python is huge collection of standard library which can be used for the following:
						<ul>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Machine Learning</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">GUI Applications (like Kivy, Tkinter, PyQt etc. )</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Web frameworks like Django (used by YouTube, Instagram, Dropbox)</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Image processing (like OpenCV, Pillow)</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Web scraping (like Scrapy, BeautifulSoup, Selenium)</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Test frameworks</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Multimedia</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Scientific computing</li>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 15px;">Text processing and many more..</li>
						</ul>
					</li>
				</ol>
			</div>
			<div class="syntax" id="syn">
            <h1 class="y">Basic Concepts of Python </h1>
				<h2>Python 3 basics</h2>
				<p>Python was developed by Guido van Rossum in the early 1990s and its latest version is 3.7.1, we can simply call it as Python3. Python 3.0 was released in 2008. and is interpreted language i.e it’s not compiled and the interpreter will check the code line by line. This article can used to learn very basics of Python programming language. </p>
				<h2>Syntax and Structure of Python program</h2>
				<p>So before moving on further.. let’s do the most popular ‘HelloWorld’ tradition 😛 and hence compare Python’s Syntax with C, C++, Java ( I have taken these 3 because they are most famous and mostly used languages). </p>

				<h2>First Python program </h2>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					# Python code for "Hello World" <br>
					# nothing else to type...see how simple is the syntax. <br><br>
  
					print("Hello World")
				</div><br>
				<p><b>Note:</b> Please note that Python for its scope doesn’t depend on the braces ( { } ), instead it uses indentation for its scope.</p>
				<p>Let’s analyze the script line by line.</p>
				<p>
					<b>Line 1: [# Script Begins] </b>In Python, comments begin with a #. This statement is ignored by the interpreter and serves as documentation for our code.<br><br>
					<b>Line 2: [print(“hello..!”)]</b> To print something on the console, print() function is used. This function also adds a newline after our message is printed(unlike in C). Note that in Python 2, “print” is not a function but a keyword and therefore can be used without parentheses. However, in Python 3, it is a function and must be invoked with parentheses.<br><br>
					<b>Line 3: [# Script Ends]</b> This is just another comment like in Line 1.

				</p>
				<h2>Comments in Python Program </h2>
				<p>For single line comments, use // before mentioning comment, like </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					print("Hello World") // This is single line comment
				</div>
				<p>For multiple line comment, enclose the comment between /* and */</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:200px;padding: 15px;">
					/*this is<br>
 					a multiple line<br>
 					comment */<br>
				</div>
			</div>
			<div class="data" id="dtype">
            <h1 class="y">Datatypes and Modifiers in Python</h1>
				<p>Data types are the classification or categorization of data items. It represents the kind of value that tells what operations can be performed on a particular data. Since everything is an object in Python programming, data types are actually classes and variables are instance (object) of these classes.<br><br>
					Data types are the classification or categorization of data items. It represents the kind of value that tells what operations can be performed on a particular data. Since everything is an object in Python programming, data types are actually classes and variables are instance (object) of these classes.<br>
					<ul>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">Numeric</li>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">Sequence Type</li>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">Boolean</li>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">Set</li>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">Dictionary</li>
					</ul>
				</p>
				<img src="https://media.geeksforgeeks.org/wp-content/uploads/20191023173512/Python-data-structure.jpg" style="margin-left: 250px;margin-top:40px;width: 700px;height: 400px;">
				<h2>Numeric</h2>
				<p>In Python, numeric data type represent the data which has numeric value. Numeric value can be integer, floating number or even complex numbers. These values are defined as int, float and complex class in Python.<br>
					<br>
					<ul>
					<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;"><b>Integers –</b> This value is represented by int class. It contains positive or negative whole numbers (without fraction or decimal). In Python there is no limit to how long an integer value can be.</li><br><br>
					<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;"><b>Float –</b> This value is represented by float class. It is a real number with floating point representation. It is specified by a decimal point. Optionally, the character e or E followed by a positive or negative integer may be appended to specify scientific notation.</li><br><br>
					<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;"><b>Complex Numbers –</b> Complex number is represented by complex class. It is specified as (real part) + (imaginary part)j. For example – 2+3j</li>
				</ul>
				</p>
				<h2>Sequence Type</h2>
				<p>In Python, sequence is the ordered collection of similar or different data types. Sequences allows to store multiple values in an organized and efficient fashion. There are several sequence types in Python –</p>
				<ul>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">String</li>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">List</li>
						<li style="margin-left: 80px;color:#696969;font-size: 18px;padding: 5px;">Tuple</li>
				</ul>
				<p><h3>1) String</h3></p>
				<p>In Python, Strings are arrays of bytes representing Unicode characters. A string is a collection of one or more characters put in a single quote, double-quote or triple quote. In python there is no character data type, a character is a string of length one. It is represented by str class.</p>
				<p><h4>Creating String</h4></p>
				<p>Strings in Python can be created using single quotes or double quotes or even triple quotes.</p>
				<p><h4>Accessing elements of String</h4></p>
				<p>In Python, individual characters of a String can be accessed by using the method of Indexing. Indexing allows negative address references to access characters from the back of the String, e.g. -1 refers to the last character, -2 refers to the second last character and so on.</p>
				<p><h3>2) List</h3></p>
				<p>Lists are just like the arrays, declared in other languages which is a ordered collection of data. It is very flexible as the items in a list do not need to be of the same type.</p>
				<p><h4>Creating List</h4></p>
				<p>Lists in Python can be created by just placing the sequence inside the square brackets[].</p>
				<p><h4>Accessing elements of List</h4></p>
				<p>In order to access the list items refer to the index number. Use the index operator [ ] to access an item in a list. In Python, negative sequence indexes represent positions from the end of the array. Instead of having to compute the offset as in List[len(List)-3], it is enough to just write List[-3]. Negative indexing means beginning from the end, -1 refers to the last item, -2 refers to the second-last item, etc.</p>
				<p><h3>3) Tuple</h3></p>
<p>Just like list, tuple is also an ordered collection of Python objects. The only difference between type and list is that tuples are immutable i.e. tuples cannot be modified after it is created. It is represented by tuple class.</p>
 

<p><h4>Creating Tuple</h4></p>
<p>In Python, tuples are created by placing a sequence of values separated by ‘comma’ with or without the use of parentheses for grouping of the data sequence. Tuples can contain any number of elements and of any datatype (like strings, integers, list, etc.).<br><br>

<b>Note:</b> Tuples can also be created with a single element, but it is a bit tricky. Having one element in the parentheses is not sufficient, there must be a trailing ‘comma’ to make it a tuple.
<br><br>
<b>Note –</b> Creation of Python tuple without the use of parentheses is known as Tuple Packing.</p>

<p><h4>Accessing elements of Tuple</h4></p>
<p>In order to access the tuple items refer to the index number. Use the index operator [ ] to access an item in a tuple. The index must be an integer. Nested tuples are accessed using nested indexing.</p>

<p><h2>Boolean</h2></p>
<p>Data type with one of the two built-in values, True or False. Boolean objects that are equal to True are truthy (true), and those equal to False are falsy (false). But non-Boolean objects can be evaluated in Boolean context as well and determined to be true or false. It is denoted by the class bool.<br><br>

<b>Note –</b> True and False with capital ‘T’ and ‘F’ are valid booleans otherwise python will throw an error.</p>



<h2>Set</h2>
<p>In Python, Set is an unordered collection of data type that is iterable, mutable and has no duplicate elements. The order of elements in a set is undefined though it may consist of various elements.</p>

<p><h3>Creating Sets</h3></p>
<p>Sets can be created by using the built-in set() function with an iterable object or a sequence by placing the sequence inside curly braces, separated by ‘comma’. Type of elements in a set need not be the same, various mixed-up data type values can also be passed to the set.<br><br></p>

<p><h3>Accessing elements of Sets</h3></p>
<p>Set items cannot be accessed by referring to an index, since sets are unordered the items has no index. But you can loop through the set items using a for loop, or ask if a specified value is present in a set, by using the in keyword.</p>


<h2>Dictionary</h2>
<p>Dictionary in Python is an unordered collection of data values, used to store data values like a map, which unlike other Data Types that hold only single value as an element, Dictionary holds key:value pair. Key-value is provided in the dictionary to make it more optimized. Each key-value pair in a Dictionary is separated by a colon :, whereas each key is separated by a ‘comma’.<br><br>
</p>
<p><h3>Creating Dictionary</h3></p>
<p>In Python, a Dictionary can be created by placing a sequence of elements within curly {} braces, separated by ‘comma’. Values in a dictionary can be of any datatype and can be duplicated, whereas keys can’t be repeated and must be immutable. Dictionary can also be created by the built-in function dict(). An empty dictionary can be created by just placing it to curly braces{}.<br><br>
</p>
<p><b>Note –</b> Dictionary keys are case sensitive, same name but different cases of Key will be treated distinctly.<br><br></p>

<p><h3>Accessing elements of Dictionary</h3></p>
<p>In order to access the items of a dictionary refer to its key name. Key can be used inside square brackets. There is also a method called get() that will also help in accessing the element from a dictionary.</p>
			</div> 
			<div class="variables" id="variable">
            <h1 class="y">Variables</h1>
				<p>Python is not “statically typed”. We do not need to declare variables before using them, or declare their type. A variable is created the moment we first assign a value to it. </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					#!/usr / bin / python <br><br>
  
# An integer assignment <br>
age = 45                    <br><br>  
  
# A floating point <br>
salary = 1456.8   <br><br>          
  
# A string  <br> 
name = "John"   <br><br>           
  
print(age) <br>
print(salary) <br>
print(name) <br>
				</div>
				<h2>Basic types of Variables </h2>
				<p>Each variable while declaration must be given a datatype, on which the memory
				assigned to the variable depends. Following are the basic types of variables,</p>
				<table style="width:50%;margin-left: 200px;">
  				<tr>
    				<th>Datatype</th>
    				<th>description</th>
  				</tr>
  				<tr>
    				<td>bool</td>
    				<td>For variable to store boolean values( True or False ) </td>
  				</tr>
  				<tr>
    				<td>char</td>
    				<td>For variables to store character types. 
</td>
  				</tr>
  				<tr>
  					<td>int</td>
    				<td>for variable with integral values</td>
  				</tr>
  				<tr>
  					<td>float and double</td>
    				<td> for variables with large and floating point values </td>
  				</tr>
				</table><br><br>
				<h2>Scope of Variables </h2>
				<p>All the variables have their area of functioning, and out of that boundary they
don't hold their value, this boundary is called scope of the variable. For most of
the cases its between the curly braces,in which variable is declared that a
variable exists, not outside it. </p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Global Variables</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Loacal Variables</li>
				</ul>
				<h2>Global variables and Local variables</h2>
				<p>Global variables are the one that are defined and declared outside a function and we need to use them inside a function.<br><br></p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					# This function uses global variable s <br>
def f():  <br>
    print(s)  <br>
  <br>
# Global scope <br>
s = "I love python"<br>
f() <br><br>

<b>Output:</b><br><br>

 
I love python
</div>
<p>The variable s is defined as the string “I love python” before we call the function f(). The only statement in f() is the “print s” statement. As there is no local s, the value from the global s will be used.</p>


<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
# This function has a variable with <br>
# name same as s. <br>
def f():  <br>
    s = "Me too."<br>
    print(s) <br>
  <br>
# Global scope <br>
s = "I love python" <br>
f() <br>
print(s) <br>
Output:<br>
<br>
Me too.<br>
I love  python<br>
</div>
<p>If a variable with the same name is defined inside the scope of function as well then it will print the value given inside the function only and not the global value.</p>
			</div>

			<div class="operator" id="op">
            <h1 class="y">Operators in Python</h1>
				<p>Operators are special type of functions, that takes one or more arguments and
				produces a new value. For example : addition (+), substraction (-), multiplication
				(*) etc, are all operators. Operators are used to perform various operations on
				variables and constants. </p>
				<h2>Types of operators</h2>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Assignment Operator </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Mathematical Operators </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Relational Operators </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Logical Operators</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Bitwise Operators </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Shift Operators</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Unary Operators</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Ternary Operator </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Comma Operator</li>
				</ul>
				<h2>Assignment Operator (=) </h2>
				<p>Operates '=' is used for assignment, it takes the right-hand side (called rvalue)
				and copy it into the left-hand side (called lvalue). Assignment operator is the
				only operator which can be overloaded but cannot be inherited. </p>
				<h2>Mathematical Operators </h2>
				<p>
					There are operators used to perform basic mathematical operations. Addition
					(+) , subtraction (-) , diversion (/) multiplication (*) and modulus (%) are the basic
					mathematical operators. Modulus operator cannot be used with floating-point
					numbers.<br><br>
					pythonalso use a shorthand notation to perform an operation and
					assignment at same type. Example,
				</p>
				<div style="background-color: lightgrey;margin-left: 70px;width:1000px;padding: 15px;">
					=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assign value of right side of expression to left side operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = y + z<br><br>
+=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add AND: Add right side operand with left side operand and then assign to left operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a+=b &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    a=a+b<br><br>
-=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subtract AND: Subtract right operand from left operand and then assign to left operand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	a-=b    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   a=a-b<br><br>
*=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Multiply AND: Multiply right operand with left operand and then assign to left operand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	a*=b &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      a=a*b<br><br>
/=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divide AND: Divide left operand with right operand and then assign to left operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a/=b   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      a=a/b<br><br>
%=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Modulus AND: Takes modulus using left and right operands and assign result to left operand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	a%=b  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a=a%b<br><br>
//=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divide(floor) AND: Divide left operand with right operand and then assign the value(floor) to left operand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	a//=b &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      a=a//b<br><br>
**=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exponent AND: Calculate exponent(raise power) value using operands and assign value to left operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a**=b &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    a=a**b<br><br>
&=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performs Bitwise AND on operands and assign value to left operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a&=b &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    a=a&b<br><br>
|=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performs Bitwise OR on operands and assign value to left operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a|=b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         a=a|b<br><br>
^=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performs Bitwise xOR on operands and assign value to left operand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	a^=b &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      a=a^b<br><br>
>>=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performs Bitwise right shift on operands and assign value to left operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a>>=b &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    a=a>>b<br><br>
<<=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performs Bitwise left shift on operands and assign value to left operand	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a <<= b  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  a= a << b<br><br>
				</div>
				<h2>Relational Operators </h2>
				<p>
					These operators establish a relationship between operands. The relational
					operators are : less than (<) , grater thatn (>) , less than or equal to (<=), greater
					than equal to (>=), equivalent (==) and not equivalent (!=).<br><br>
					You must notice that assignment operator is (=) and there is a relational
					operator, for equivalent (==). These two are different from each other, the
					assignment operator assigns the value to any variable, whereas equivalent
					operator is used to compare values, like in if-else conditions, Example
				</p>
				<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
					>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greater than: True if left operand is greater than the right&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	x > y<br><br>
<	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Less than: True if left operand is less than the right	x < y<br><br>
==	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equal to: True if both operands are equal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	x == y<br><br>
!=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not equal to - True if operands are not equal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	x != y<br><br>
>=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greater than or equal to: True if left operand is greater than or equal to the right&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	x >= y<br><br>
<=	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Less than or equal to: True if left operand is less than or equal to the right&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	x <= y<br><br>
				</div>
				<h2>Logical Operators</h2>
				<p>
					The logical operators are AND (&&) and OR (||). They are used to combine two
different expressions together.<br><br>
If two statement are connected using AND operator, the validity of both
statements will be considered, but if they are connected using OR operator,
then either one of them must be valid. These operators are mostly used in
loops (especially while loop) and in Decision making.
				</p>
				<h2>Bitwise Operators</h2>
				<p>
					There are used to change individual bits into a number. They work with only
integral data types like char, int and long and not with floating point values.</p> 
					<ul>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Bitwise AND operators &</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Bitwise OR operator |</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">And bitwise XOR operator ^
</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">And, bitwise NOT operator ~</li>
					</ul>
				
				<p>They can be used as shorthand notation too, & = , |= , ^= , ~= etc</p>
				<h2>Shift Operators </h2>
				<p>
					Shift Operators are used to shift Bits of any variable. It is of three types, </p> 
					<ul>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Left Shift Operator <<</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Right Shift Operator >></li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Unsigned Right Shift Operator >>>
</li>
					</ul>
			</div>
			<div class="decision" id='dec'>
            <h1 class="y">Decision making in python - if, else and else if</h1>
				<p>Decision making is about deciding the order of execution of statements based
				on certain conditions or repeat a group of statements until certain specified
				conditions are met. python handles decision-making by supporting the following
				statements, 
				</p>
				<ul>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">if statement </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">conditional operator statement
</li>
					</ul>
					<h2>Decision making with if statement </h2>
					<p>The if statement may be implemented in different forms depending on the
complexity of conditions to be tested. The different forms are, </p>
					<ul>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Simple if statement </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">if....else statement </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Nested if....else statement 
</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">if-elif-else ladder </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Short Hand if statement </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Short Hand if-else statement </li>
					</ul>
					<h2>Simple if statement </h2>
					<p>if statement is the most simple decision making statement. It is used to decide whether a certain statement or block of statements will be executed or not i.e if a certain condition is true then a block of statement is executed otherwise not. </p>
					<p><b>Syntax:</b></p>
					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						if condition:<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement1<br>
statement2<br>
<br>
# Here if the condition is true, if block <br>
# will consider only statement1 to be inside <br>
# its block.<br>
					</div><br><br>
					<p>If the expression is true, then 'statement-inside' will be executed, otherwise
'statement-inside' is skipped and only 'statement-outside' will be executed.</p>
<h2>Flowchart</h2>
				<img src="https://media.geeksforgeeks.org/wp-content/uploads/if-statement.jpg" style="margin-left: 450px;margin-top:40px;width: 350px;height: 400px;">
				<p>Example :</p>

					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						# python program to illustrate If statement <br>
  <br>
i = 10<br>
if (i > 15): <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print ("10 is less than 15") <br>
print ("I am Not in if") <br><br><br>
<b>Output:</b><br>
<br>
I am Not in if<br>
					</div>
					<h2>if...else statement</h2>
					<p>The if statement alone tells us that if a condition is true it will execute a block of statements and if the condition is false it won’t. But what if we want to do something else if the condition is false. Here comes the else statement. We can use the else statement with if statement to execute a block of code when the condition is false.<br><b>Syntax:</b> </p>
					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						if (condition):<br>
    # Executes this block if<br>
    # condition is true<br>
else:<br>
    # Executes this block if<br>
    # condition is false<br>
					</div>
					<p>If the 'expression' is true or returns true, then the 'statement-block1' will get
executed, else 'statement-block1' will be skipped and 'statement-block2' will be
executed.<br><br> 
</p>
<h2>Flowchart</h2>
				<img src="https://media.geeksforgeeks.org/wp-content/uploads/if-else.jpg" style="margin-left: 450px;margin-top:40px;width: 350px;height: 400px;">
				<p><b>Example:</b></p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				# python program to illustrate If else statement <br>
#!/usr/bin/python <br>
  <br>
i = 20; <br>
if (i < 15): <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   print ("i is smaller than 15") <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print ("i'm in if Block") <br>
else: <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   print ("i is greater than 15") <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   print ("i'm in else Block")<br> 
print ("i'm not in if and not in else Block") <br><br><br>
<b>Output:</b><br>
<br>
i is greater than 15<br>
i'm in else Block<br>
i'm not in if and not in else Block<br>

			</div>
			<h2>Nested if....else statement </h2>
			<p>A nested if is an if statement that is the target of another if statement. Nested if statements means an if statement inside another if statement. Yes, Python allows us to nest if statements within if statements. i.e, we can place an if statement inside another if statement.<br><b>Syntax:</b> </p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
if (condition1):<br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Executes when condition1 is true<br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (condition2): <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Executes when condition2 is true<br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# if Block is end here<br><br>
# if Block is end here

			</div>
			<p><b>Flow chart:-</b></p><img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200710163548/Nested_if.jpg" style="margin-left: 450px;margin-top:40px;width: 350px;height: 400px;">
	 <br><br><p><b> Example:</b></p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
# python program to illustrate nested If statement <br><br>
#!/usr/bin/python <br><br>
i = 10<br><br>
if (i == 10):<br><br> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; #  First if statement<br><br> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (i < 15):<br><br> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print ("i is smaller than 15") <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # Nested - if statement <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # Will only be executed if statement above <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # it is true <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (i < 12): <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print ("i is smaller than 12 too") <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; else: <br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print ("i is greater than 15") <br><br><br>
<b>Output:</b><br><br>
<br><br>
i is smaller than 15<br><br>
i is smaller than 12 too<br><br>
			</div>
<h2>if-elif-else ladder</h2>
<p>Here, a user can decide among multiple options. The if statements are executed from the top down. As soon as one of the conditions controlling the if is true, the statement associated with that if is executed, and the rest of the ladder is bypassed. If none of the conditions is true, then the final else statement will be executed.</p>



<p><b>Syntax:-</b>
</p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
if (condition):<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement<br>
elif (condition):<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement<br>
.<br>
.<br>
else:<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; statement<br>
<br><br>
			</div>
			<p><b>Flow-chart :</b></p>
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/if-elseif-ladder.jpg" style="margin-left: 450px;margin-top:40px;width: 350px;height: 400px;">
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
# Python program to illustrate if-elif-else ladder <br>
#!/usr/bin/python <br>
  <br> 
i = 20<br>
if (i == 10): <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print ("i is 10") <br>
elif (i == 15): <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print ("i is 15") <br>
elif (i == 20): <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print ("i is 20") <br>
else: <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print ("i is not present") <br><br><br>
<b>Output:</b><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i is 20<br>
<br></div>
		<h2>Short Hand if statement</h2>
			<p>Whenever there is only a single statement to be executed inside the if block then shorthand if can be used. The statement can be put on the same line as the if statement.</p>
<p><b>Syntax:</b></p>
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
if condition: statement<br><br>
</div>
<p><b>Example:</b></p>
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;"><br><br>
# Python program to illustrate short hand if <br>
i = 10<br>
if i < 15: print("i is less than 15") <br><br><br>
<b>Output:</b><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i is less than 15
</div>
<h2>Short Hand if-else statement</h2>

<p>This can be used to write the if-else statements in a single line where there is only one statement to be executed in both if and else block.</p>

<p><b>Syntax:</b></p>
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
statement_when_True if condition else statement_when_False<br>
Example:<br>
<br>

# Python program to illustrate short hand if-else <br>
i = 10<br>
print(True) if i < 15 else print(False) <br><br><br>
<b>Output:</b><br>
True
</div>
			</div>

			<div class="storage" id="st">
				<h1 class="y">Storage Classes in C++ </h1>
				<p>Storage classes are used to specify the lifetime and scope of variables. How
				storage is allocated for variables and How variable is treated by complier
				depends on these storage classes.<br><br>
				These are basically divided into 5 different types: 
				</p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Global variables</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Local variables</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Register variables </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Static variables</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Extern variables </li>
				</ul>
				<h2>Global Variables</h2>
				<p>These are defined at the starting , before all function bodies and are available
				throughout the program. </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					using namespace std;<br><br>
					int globe; // Global variable<br><br>
					void func();<br><br>
					int main()<br><br>
					{<br><br>
						 ......<br><br>
					}<br><br>
				</div>
				<h2>Local variables</h2>
				<p>They are defined and are available within a particular scope. They are also
				called Automatic variable because they come into being when scope is entered
				and automatically go away when the scope ends.<br><br>
				The keyword auto is used, but by default all local variables are auto, so we don't
				have to explicitly add keyword auto before variable dedaration. Default value of
				such variable is garbage. <br><br></p>
				<h2>Register variables </h2>
				<p>This is also a type of local variable. This keyword is used to tell the compiler to
				make access to this variable as fast as possible. Variables are stored in registers
				to increase the access speed<br><br>
				But you can never use or compute address of register variable and also , a
				register variable can be declared only within a block, that means, you cannot
				have global or static register variables.  <br><br></p>
				<h2>Static Variables</h2>
				<p>TStatic variables are the variables which are initialized & allocated storage only
				once at the beginning of program execution, no matter how many times they
				are used and called in the program. A static variable retains its value until the
				end of program.<br><br></p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					void fun()<br><br>
					{<br><br>
					 static int i = 10;<br><br>
 						i++;<br><br>
 						cout << i;<br><br>
					}<br><br>
					int main()<br><br>
					{<br><br>
					 fun(); // Output = 11<br><br>
					 fun(); // Output = 12<br><br>
					 fun(); // Output = 13<br><br>
					}<br><br>
				</div>
				<p>As, i is static, hence it will retain its value through function calls, and is
				initialized only once at the beginning.<br><br>
				Static specifiers are also used in classes, but that we will learn later. </p>
				<h2>Extern Variables</h2>
				<p>This keyword is used to access variable in a file which is declared & defined in
				some other file, that is the existence of a global variable in one file is declared
				using extern keyword in another file. </p>
			</div>
			<div class="funt" id="fun">
            <h1 class="y">Functions in Python </h1>
				<p>A function is a set of statements that take inputs, do some specific computation and produces output. The idea is to put some commonly or repeatedly done task together and make a function, so that instead of writing the same code again and again for different inputs, we can call the function.
Python provides built-in functions like print(), etc. but we can also create your own functions. These functions are called user-defined functions. </p>
				<h2>Basic program for using Functions in python </h2>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
A simple Python function to check <br>
# whether x is even or odd <br>
def evenOdd( x ): <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (x % 2 == 0): <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print "even"<br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; else: <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print "odd"<br>
  <br>
# Driver code <br>
evenOdd(2) <br>
evenOdd(3) <br><br><br>
<b>Output:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;even<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;odd			</div>

<p>
<b>Pass by Reference or pass by value?</b><br>
One important thing to note is, in Python every variable name is a reference. When we pass a variable to a function, a new reference to the object is created. Parameter passing in Python is same as reference passing in Java.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">


# Here x is a new reference to same list lst <br>
def myFun(x): <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x[0] = 20<br>
  <br>
# Driver Code (Note that lst is modified <br>
# after function call. <br>
lst = [10, 11, 12, 13, 14, 15]  <br>
myFun(lst); <br>
print(lst)  <br><br>
<br><b>Output:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[20, 11, 12, 13, 14, 15]
</div>

<p>When we pass a reference and change the received reference to something else, the connection between passed and received parameter is broken. For example, consider below program.</p>

				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">

def myFun(x): <br>
  <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  # After below line link of x with previous <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  # object gets broken. A new object is assigned <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  # to x. <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   x = [20, 30, 40]<br> 
  <br>
# Driver Code (Note that lst is not modified <br>
# after function call. <br>
lst = [10, 11, 12, 13, 14, 15]  <br>
myFun(lst); <br>
print(lst) <br> <br>
<br><b>Output:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[10, 11, 12, 13, 14, 15]
</div>
<p>Another example to demonstrate that reference link is broken if we assign a new value (inside the function).</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">

def myFun(x): <br>
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # After below line link of x with previous <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # object gets broken. A new object is assigned <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # to x. <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x = 20<br>
  <br>
# Driver Code (Note that lst is not modified <br>
# after function call.<br> 
x = 10 <br>
myFun(x); <br>
print(x) <br> <br><br>
<b>Output:</b><br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10
</div>


<h2>Default arguments:</h2>
<p>A default argument is a parameter that assumes a default value if a value is not provided in the function call for that argument.The following example illustrates Default arguments.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
# Python program to demonstrate <br>
# default arguments <br>
def myFun(x, y=50):<br> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print("x: ", x) <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  print("y: ", y)<br> 
  <br>
# Driver code (We call myFun() with only <br>
# argument) <br>
myFun(10) <br><br><br>
<b>Output:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;('x: ', 10)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;('y: ', 50)
</div>
<br>
<p>Like C++ default arguments, any number of arguments in a function can have a default value. But once we have a default argument, all the arguments to its right must also have default values.</p>

<h2>Keyword arguments:</h2>
<p>The idea is to allow caller to specify argument name with values so that caller does not need to remember order of parameters.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">

# Python program to demonstrate Keyword Arguments <br>
def student(firstname, lastname):  <br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(firstname, lastname) <br> 
    <br>
    <br>
# Keyword arguments<br>                   
student(firstname ='Geeks', lastname ='Practice') <br>    
student(lastname ='Practice', firstname ='Geeks')  <br> <br>
<br><b>Output:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;('Geeks', 'Practice')<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;('Geeks', 'Practice')
</div>

<h2>Variable length arguments:</h2>
<p>We can have both normal and keyword variable number of arguments. Please see this for details.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">

# Python program to illustrate  <br> 
# *args for variable number of arguments <br>
def myFun(*argv):  <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for arg in argv:  <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; print (arg) <br>
    <br>
myFun('Hello', 'Welcome', 'to', 'python')  <br><br>
<br><b>Output:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;python
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
		var x2=document.getElementById('dtype');
		var x3=document.getElementById('variable');
		var x4=document.getElementById('op');
		var x5=document.getElementById('dec');
		var x6=document.getElementById('st');
		var x7=document.getElementById('fun');
		function basics()
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
		function datatype()
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
		function variables()
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
		function operator()
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
		function storage()
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
		function fun()
		{
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
			x6.style.display="none";
			x7.style.display="block";
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