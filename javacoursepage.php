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
	margin-right:60px;
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
	.show {
		display: block;
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
			<a href="newproject.php"><img src="https://www.simplilearn.com/ice9/new_logo.svgz" style="width: 140px;margin-left: 10px;cursor: pointer;"></a>
		</div>
		<div class="course">
			<input type="button"  onclick="mycourse()" class="x71" value="Courses" name="">
			<ul id='fg' class='dd-content'>
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
    							<input type="submit" class="submit-btn" value="Login">
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
        	    <li class="c2"><a href="#" class="c1" onclick="basics()">Java Programming Language</a></li>
	            <li class="c2"><a href="#" class="c1" onclick="syntax()">Basic Concepts of Java</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="datatype()">Datatypes and Modifiers in Java </a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="variables()">Variables</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="operator()">Operators</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="decision()">Decision making</a></li>
    	       <!-- <li class="c2"><a href="#" class="c1" onclick="storage()">Storage classes</a></li> -->
    	        <li class="c2"><a href="#" class="c1" onclick="fun()">Methods</a></li>
    	        <li class="c2"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdlbY8uyNe3Y-iphJzrh1wAgUiJZrIk0jN1e9P_G3CV-LbUag/viewform?usp=sf_link" class="c1" target="_blank">Quiz-Java</a></li>
    	    </ul>
		</div>
		<div class="Content" style="font-family: sans-serif;">
			<div class="basics" id="v">
				<h1 class="y">Introduction to Java Programming </h1>
				<img src="https://www.geeksforgeeks.org/wp-content/uploads/Java-768x256.png" style="margin-left: 190px;margin-top:40px;">
				<p>JAVA was developed by Sun Microsystems Inc in the year 1991, later acquired by Oracle Corporation. It was developed by James Gosling and Patrick Naughton. It is a simple programming language. Java makes writing, compiling, and debugging programming easy. It helps to create reusable code and modular programs. </p>
				<p>Java is a class-based, object-oriented programming language and is designed to have as few implementation dependencies as possible. A general-purpose programming language made for developers to write once run anywhere that is compiled Java code can run on all platforms that support Java. Java applications are compiled to byte code that can run on any Java Virtual Machine. The syntax of Java is similar to c/c++.
				</p>
				<h3>Java is one of the most popular and widely used programming language.</h3>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;" >Java has been one of the most popular programming language for many years. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Java is Object Oriented. However it is not considered as pure object oriented as it provides support for primitive data types (like int, char, etc).</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">The Java codes are first compiled into byte code (machine independent code). Then the byte code is run on Java Virtual Machine (JVM) regardless of the underlying architecture. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Java syntax is similar to C/C++. But Java does not provide low level programming functionalities like pointers. Also, Java codes are always written in the form of classes and objects.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Java is used in all kind of applications like Mobile Applications (Android is Java based), desktop applications, web applications, client server applications, enterprise applications and many more.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">When compared with C++, Java codes are generally more maintainable because Java does not allow many things which may lead bad/inefficient programming if used incorrectly. For example, non-primitives are always references in Java. So we cannot pass large objects (like we can do in C++) to functions, we always pass references in Java. One more example, since there are no pointers, bad memory access is also not possible. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">When compared with Python, Java kind of fits between C++ and Python. The programs written in Java typically run faster than corresponding Python programs and slower than C++. Like C++, Java does static type checking, but Python does not. </li>
				</ul>
			</div>
			<div class="syntax" id="syn">
				<h1 class="y">Basic Concepts of Java </h1>
				<p>In this section we will cover the basics of Java, it will include the syntax, variable,
				operators, loop types, pointers, references and information about other
				requirements of a Java program. You will come across lot of terms that you have
				already studied in any other language. </p>
				<h2>Syntax and Structure of Java program</h2>
				<p>Here we will discuss one simple and basic Java program to print "Hello World" and its structure in parts with details and uses. </p>

				<h2>First Java program </h2>
				<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
                    <br>
                     // A Java program to print "Hello World"<br><br>
                    import java.io.*; <br><br>
                    public class printHello { <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String args[]) <br>
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{ <br> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                        System.out.println("Hello World"); &nbsp;&nbsp;&nbsp;&nbsp;// prints Hello World<br>
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;} <br><br>
					}
				</div><br>
				<ul>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Header files are included at the beginning 
					just like in C program.
					"import java.io." Means all the classes of io package can be imported. Java io package provides a set of input and output streams for reading and writing data to files or other input or output sources.


				</li>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">The class contains the data and methods to be used in the program. Methods define the behaviour of the class. <br>
				Example: here Class printHello has only one method Main in JAVA.
				</li>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">static keyword tells us that this method is accessible without instantiating the class.  </li>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">void: keywords tells that this method will not return anything. The main() method is the entry point of our application. </li>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> System.in: This is the standard input stream that is used to read characters from the keyboard or any other standard input device.  </li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> System.out: This is the standard output stream that is used to produce the result of a program on an output device like the computer screen.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">println(): This method in Java is also used to display a text on the console. It prints the text on the console and the cursor moves to the start of the next line at the console. The next printing takes place from the next line.  </li>
                </ul>
				<h2>Comments in Java Program </h2>
				<p>For single line comments, use // before mentioning comment, like </p>
				<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
                System.out.println("Single line"); &nbsp;&nbsp;&nbsp; // This is single line comment
				</div>
				<p>For multiple line comment, enclose the comment between /* and */</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:200px;padding: 15px;">
					/*this is<br>
 					a multiple line<br>
 					comment */<br>
				</div>
				<h2>Creating Classes in Java </h2>
				<p>Classes name must start with capital letter, and they contain data variables and
				member functions. This is a mere introduction to classes, we will discuss classes
				in detail throughout the Java tutorial. </p>
				<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
					class Abc<br>
					{<br><br>
                        &nbsp;&nbsp;&nbsp;int i; //data variable<br>
                        &nbsp;&nbsp;&nbsp;void display() //Member Function<br>
                        &nbsp;&nbsp;&nbsp;{<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Inside Member Function");<br><br>
                            &nbsp;&nbsp;&nbsp;}<br><br>
					}; // Class ends here<br><br>
					class main()<br>
					{<br><br>
                        &nbsp;&nbsp;&nbsp;public static void main(String[] args) {<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abc obj; // Creatig Abc class's object<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj.display(); //Calling member function using class object<br><br>
                            &nbsp;&nbsp;&nbsp;}<br><br>
                    }
				</div>
				<p style="color:#696969; ">This is how a class is defined, once a class is defined, then its object is created
				and the member functions are used.
				Variables can be declared anywhere in the entire program, but must be
				declared, before they are used. Hence, we don't need to declare variable at the
				start of the program.
				Don't worry this is just to give you a basic idea about Java language, we will
				cover everything in details in next tutorials </p>
			</div>
			<div class="data" id="dtype">
				<h1 class="y">Datatypes and Modifiers in Java</h1>
				<p>Let's start with Datatypes. They are used to define type of variables and
					contents used. Data types define the way you use storage in the programs you
					write. Data types can be of two types:<br><br>
					1. Built-in Datatypes<br><br>
					2. User-defined or Abstract Datatypes<br>
				</p>
				<h2>Built-in Data Types </h2>
				<p>These are the datatypes which are predefined and are wired directly into the
					compiler. <br><br>For eg: int, char etc. 
				</p>
				<h2>User defined or Abstract data types</h2>
				<p>
					These are the type, that user creates as a class or a structure. In Java these are
					classes where as in C language user-defined datatypes were implemented as
					structures. 
				</p>
				<h2>Basic Built in Datatypes in Java </h2>
				<table style="width:50%;margin-left: 200px;">
  				<tr>
    				<th>Datatype</th>
    				<th>Bytes</th>
  				</tr>
  				<tr>
    				<td>char</td>
    				<td>for character storage (2 byte) </td>
  				<tr>
    				<td>int</td>
    				<td>for integral number (4 bytes) </td>
  				</tr>
                <tr>
  					<td>long</td>
    				<td>for greater integral number (8 bytes) </td>
  				</tr>
  				<tr>
  					<td>float</td>
    				<td>single precision floating point (4 bytes) </td>
  				</tr>
  				<tr>
  					<td>double</td>
    				<td>double precision floating point numbers (8 bytes) </td>
  				</tr>
				</table><br><br>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					char a = 'A'; // character type<br><br>
					int a = 1; // integer type<br><br>
					float a = 3.14159; // floating point type<br><br>
					double a = 6e-4; // double type (e is for exponential)<br>
				</div>
				<h2>Other Built in Datatypes in Java </h2>
				<table style="width:50%;margin-left: 200px;">
  				<tr>
    				<th>Datatype</th>
    				<th>Bytes</th>
  				</tr>
  				<tr>
    				<td>boolean</td>
    				<td>Boolean (True or False)</td>
  				</tr>
  				<tr>
    				<td>void</td>
    				<td>Without any Value </td>
  				</tr>
  				<tr>
  					<td>wchar_t</td>
    				<td>Wide Character </td>
  				</tr>
				</table><br><br>
				<h2>Enum as Datatype in Java </h2>
                <p>In Java (from 1.5), enums are represented using enum data type. Java enums are more powerful than C/C++ enums . In Java, we can also add variables, methods and constructors to it. The main objective of enum is to define our own data types(Enumerated Data Types).</p>
				<p>Enumerated type declares a new type-name along with a sequence of values
				containing identifiers which has values starting from 0 and incrementing by 1
				every time. </p>
                <p>Enum declaration can be done outside a Class or inside a Class but not inside a Method.</p>
				<p>For Example: </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
                enum Color <br>
                { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RED, GREEN, BLUE; <br>
                } <br><br>
                public class Test <br>
                { <br><br>
                    &nbsp;&nbsp;&nbsp;// Driver method <br>
                    &nbsp;&nbsp;&nbsp;public static void main(String[] args) <br>
                    &nbsp;&nbsp;&nbsp;   { <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Color c1 = Color.RED; <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(c1); <br><br>
                        &nbsp;&nbsp;&nbsp;} <br><br>
                }
				</div>
				<p>Here an enumeration of colour is defined which is represented by the
variable c1.</p>
				<h2>Modifiers in Java </h2>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Default</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Public</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Protected</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Private</li>
				</ul>
				<p>Access modifiers are keywords in Java that are used to set accessibility. An access modifier restricts the access of a class, constructor, data member and method in another class. </p>
				<p>Java also supports many non-access modifiers, such as static, abstract, synchronized, native, volatile, transient etc.</p>
                <ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Default: Default has scope only inside the same package</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Public: Public has scope that is visible everywhere </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Protected: Protected has scope within the package and all sub classes</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">SPrivate: Private has scope only within the classes</li>
                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Final: The class cannot be inherited by other classes</li>
                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">abstract: The class cannot be used to create objects. To access an abstract class, it must be inherited from another class.</li>
				</ul>
			</div> 
			<div class="variables" id="variable">
				<h1 class="y">Variables</h1>
				<p>Variable are used in Java, where we need storage for any value, which will
				change in program. Variable can be declared in multiple ways each with
				different memory requirements and functioning. Variable is the name of
				memory location allocated by the compiler depending upon the datatype of the
				variable. </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					Example: int i = 10;
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
				<h2>Declaration and Initialization</h2>
				<p>Variable must be declared before they are used. Usually it is preferred to
				declare them at the starting of the program, but in Java they can be declared in
				the middle of program too, but must be done before using them.<br><br>
				For example:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					int i; // declared but not initialised<br><br>
					char c;<br><br>
					int i, j, k; // Multiple declaration<br><br>
				</div>
				<p>Initialization means assigning value to an already declared variable,</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					int i; // declaration<br><br>
					i = 10; // initialization<br><br>
				</div>
				<p>Initialization and declaration can be done in one single step also,</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					int i=10; //initialization and declaration in same step<br><br>
					int i=10, j=11; <br><br>
				</div>
				<p>If a variable is declared and not initialized by default it will hold a garbage value.
				Also, if a variable is once declared and if try to declare it again, we will get a
				compile time error.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					int i,j;<br><br>
					i=10;<br><br>
					j=20;<br><br>
					int j=i+j; //compile time error, cannot redeclare a variable in same
					scope<br><br>
				</div>
				<h2>Scope of Variables </h2>
				<p>All the variables have their area of functioning, and out of that boundary they
don't hold their value, this boundary is called scope of the variable. For most of
the cases its between the curly braces,in which variable is declared that a
variable exists, not outside it. We will study the storage classes later, but as of
now, There are three types of variables in Java:</p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Instance Variables</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Local Variables</li>
                    <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Static Variables</li>
				</ul>
				<h2>Instance variables </h2>
				<p> Instance variables are non-static variables and are declared in a class outside any method, constructor or block.<br>
                <ul>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">As instance variables are declared in a class, these variables are created when an object of the class is created and destroyed when the object is destroyed.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Unlike local variables, we may use access specifiers for instance variables. If we do not specify any access specifier then the default access specifier will be used.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Initilisation of Instance Variable is not Mandatory. Its default value is 0</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Instance Variable can be accessed only by creating objects.</li>
                </ul>
                </p>
				<h2>Local variables </h2>
				<p>A variable defined within a block or method or constructor is called local variable.<br>
                <ul>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">These variable are created when the block in entered or the function is called and destroyed after exiting from the block or when the call returns from the function.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">The scope of these variables exists only within the block in which the variable is declared. i.e. we can access these variable only within that block.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Initilisation of Local Variable is Mandatory.</li>
                </ul></p>
                <h2>Static variables </h2>
				<p> Static variables are also known as Class variables.<br>
                <ul>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">These variables are declared similarly as instance variables, the difference is that static variables are declared using the static keyword within a class outside any method constructor or block.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Unlike instance variables, we can only have one copy of a static variable per class irrespective of how many objects we create.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Static variables are created at the start of program execution and destroyed automatically when execution ends.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Initilisation of Static Variable is not Mandatory. Its default value is 0</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">If we access the static variable like Instance variable (through an object), the compiler will show the warning message and it won’t halt the program. The compiler will replace the object name to class name automatically.</li>
                <li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">If we access the static variable without the class name, Compiler will automatically append the class name.</li>
                </ul>
                </p>
			</div>

			<div class="operator" id="op">
				<h1 class="y">Operators in Java</h1>
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
				<h2>Assignment Operator (=) : </h2>
				<p>Operates ‘=’ Assignment operator is used to assign a value to any variable. It has a right to left associativity, i.e value given on right hand side of operator is assigned to the variable on the left and therefore right hand side value must be declared before using it or should be a constant.  </p>
				<p>In many cases assignment operator can be combined with other operators to build a shorter version of statement called Compound Statement. For example, instead of a = a+5, we can write a += 5. </p>
                <div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
                <ul>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">+=, for adding left operand with right operand and then assigning it to variable on the left. </li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">-=, for subtracting left operand with right operand and then assigning it to variable on the left. </li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">*=, for multiplying left operand with right operand and then assigning it to variable on the left. </li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">/=, for dividing left operand with right operand and then assigning it to variable on the left.</li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">%=, for assigning modulo of left operand with right operand and then assigning it to variable on the left. </li>
				</ul>
                </div>
                <h2>Mathematical Operators : </h2>
				<p>
					There are operators used to perform basic mathematical operations.<br><br>
                    <div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
                    <ul>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;"> '*' Multiplication </li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">'/' Division </li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;"> '%' Modulo </li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">'+' Addition</li>
					<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;"> '–' Subtraction </li>
                    </ul>
                    </div>
				</p>
				<h2>Relational Operators :</h2>
				<p>
					These operators are used to check for relations like equality, greater than, less than. They return boolean result after the comparison and are extensively used in looping statements as well as conditional if else statements.<br><br> The relational
					operators are : less than (<) , grater thatn (>) , less than or equal to (<=), greater
					than equal to (>=), equivalent (==) and not equivalent (!=).<br><br>
					You must notice that assignment operator is (=) and there is a relational
					operator, for equivalent (==). These two are different from each other, the
					assignment operator assigns the value to any variable, whereas equivalent
					operator is used to compare values, like in if-else conditions, Example
				</p>
				<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
					int x = 10; //assignment operator<br><br>
					x=5; // again assignment operator<br><br>
					if(x == 5) // here we have used equivalent relational operator, for
					comparison<br><br>
					{<br><br>
					 system.out.println("Successfully compared");<br><br>
					}<br><br>
				</div>
				<h2>Logical Operators :</h2>
				<p>
					The logical operators are AND (&&) and OR (||). They are used to combine two
different expressions together.<br><br>
If two statement are connected using AND operator, the validity of both
statements will be considered, but if they are connected using OR operator,
then either one of them must be valid. These operators are mostly used in
loops (especially while loop) and in Decision making.
				</p>
				<h2>Bitwise Operators :</h2>
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
				<h2>Shift Operators :</h2>
				<p>
					Shift Operators are used to shift Bits of any variable. It is of three types, </p> 
					<ul>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Left Shift Operator <<</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Right Shift Operator >></li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Unsigned Right Shift Operator >>>
</li>
					</ul>
					<h2>Unary Operators :</h2>
				<p>
					These are the operators which work on only one operand. There are many
unary operators, but increment ++ and decrement -- operators are most used.<br><br>
Other Unary Operators : address of &, dereference *, new and delete, bitwise
not ~, logical not !, unary minus - and unary plus +. </p> 
					<h2>Ternary Operator :</h2>
				<p>
					The ternary if-else ? : is an operator which has three operands. </p> 
					<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
						int a = 10;<br><br>
a > 5 ? system.out.println("true") : system.out.println("false")<br><br>

					</div>
					<h2>Comma Operator :</h2>
				<p>
					This is used to separate variable names and to separate expressions. In case of
expressions, the value of last expression is produced and used. 
 </p> 
					<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
						int a,b,c; // variables declaration using comma operator<br><br>
a=b++, c++; // a = c++ will be done.<br><br>
					</div>
			</div>
			<div class="decision" id='dec'>
				<h1 class="y">Decision making in Java - if, else and else if</h1>
				<p>Decision Making in programming is similar to decision making in real life. In programming also we face some situations where we want a certain block of code to be executed when some condition is fulfilled.
A programming language uses control statements to control the flow of execution of program based on certain conditions. These  are used to cause the flow of execution to advance and branch based on changes to the state of a program. Java handles decision-making by supporting the following
				statements, 
				</p>
				<ul>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">if statement </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">switch statement</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">conditional operator statement
</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">goto statement</li>
					</ul>
					<h2>Decision making with if statement </h2>
					<p>The if statement may be implemented in different forms depending on the
complexity of conditions to be tested. The different forms are, </p>
					<ul>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Simple if statement </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">if....else statement </li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Nested if....else statement 
</li>
						<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">else if statement </li>
					</ul>
					<h2>Simple if statement </h2>
					<p>The general form of a simple if statement is, </p>
					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						if(expression)<br><br>
						{<br><br>
						 statement-inside;<br><br>
						}<br><br>
 						statement-outside; <br><br>
					</div>
					<p>If the expression is true, then 'statement-inside' will be executed, otherwise
'statement-inside' is skipped and only 'statement-outside' will be executed.</p>
					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						// Java program to illustrate If statement <br><br>
						class IfDemo <br>
						{<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
						public static void main(String args[])<br>&nbsp;&nbsp;&nbsp;&nbsp;
						{<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 int x,y;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 x=15;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 y=13;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 if (x > y )<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 System.out.println("x is greater than y");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 }<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
}<br><br>}

					</div>
					<h2>if...else statement</h2>
					<p>The general form of a simple if...else statement is, </p>
					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						if(expression)<br><br>
						{<br><br>
 						statement-block1;<br><br>
						}<br><br>
						else<br><br>
						{<br><br>
						 statement-block2;<br><br>
						} <br><br>
					</div>
					<p>If the 'expression' is true or returns true, then the 'statement-block1' will get
executed, else 'statement-block1' will be skipped and 'statement-block2' will be
executed.<br><br> Example:
</p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				class IfDemo <br>
						{<br><br>
						public static void main(String args[])<br>
{ <br>
 int x,y;<br><br>
 x=15;<br><br>
 y=18;<br><br>
 if (x > y )<br><br>
 {<br><br>
 System.out.println("x is greater than y");<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 System.out.println("y is greater than x");<br><br>
 }<br><br>
}<br><br>
}

			</div>
			<h2>Nested if....else statement </h2>
			<p>The general form of a nested if...else statement is, </p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				if(expression)<br><br>
{<br><br>
 if(expression1)<br><br>
 {<br><br>
 statement-block1;<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 statement-block2;<br><br>
 }<br><br>
}<br><br>
else<br><br>
{ <br><br>
 statement-block3;<br><br>
}<br><br>

			</div>
			<p>if 'expression' is false or returns false, then the 'statement-block3' will be
executed, otherwise execution will enter the if condition and check for
'expression 1'. Then if the 'expression 1' is true or returns true, then the
'statement-block1' will be executed otherwise 'statement-block2' will be
executed <br><br> Example:</p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				class IfDemo <br>
						{<br><br>
						public static void main(String args[])<br>
{ <br>
 int a,b,c;<br><br>
 System.out.println("enter 3 number");<br><br>
 cin >> a >> b >> c;<br><br>
 if(a > b)<br><br>
 {<br><br>
 if( a > c)<br><br>
 {<br><br>
 System.out.println("a is greatest");<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 System.out.println("c is greatest");<br><br>
 }<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 if( b> c)<br><br>
 {<br><br>
 System.out.println("b is greatest");<br><br>
 }<br><br>
 else<br><br>
 { <br><br>
 System.out.println("c is greatest");<br><br>
 }<br><br>
 }<br><br>
}<br><br>}
			</div>
			<p>The above code will print different statements based on the values
of a, b and c variables. </p>
<h2>else-if Ladder</h2>
<p>The general form of else-if ladder is, 
</p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				if(expression 1)<br><br>
{<br><br>
 statement-block1;<br><br>
}<br><br>
else if(expression 2)<br><br>
{<br><br>
 statement-block2;<br><br>
}<br><br>
else if(expression 3 )<br><br>
{<br><br>
 statement-block3;<br><br>
}<br><br>
else<br><br>
 default-statement;<br><br>
			</div>
			<p>The expression is tested from the top(of the ladder) downwards. As soon as the
true condition is found, the statement associated with it is executed.<br><br>
Example:</p>
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
	class IfDemo <br>
						{<br><br>
						public static void main(String args[])<br>
{ <br><br>
 Scanner scan = new Scanner(System.in);<br>
        System.out.print("Enter any number: ");<br>
        int a = scan.nextInt();<br><br>
 if( a%5==0 && a%8==0)<br><br>
 {<br><br>
 System.out.print("divisible by both 5 and 8");<br><br>
 }<br><br>
 else if( a%8==0 )<br><br>
 {<br><br>
 System.out.print("divisible by 8");<br><br>
 }<br><br>
 else if(a%5==0)<br><br>
 {<br><br>
 System.out.print("divisible by 5");<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 System.out.print("divisible by none");<br><br>
 }<br><br>
}<br><br>}
</div>
		<h2>Points to Remember</h2>
			<p>In if statement, a single statement can be included without enclosing it
into curly braces { }. </p>
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
	int a = 5;<br><br>
if(a > 4)<br><br>
 System.out.print("success");<br><br>
</div>
<p>No curly braces are required in the above case, but if we have more than
one statement inside if condition, then we must enclose them inside
curly braces otherwise only the first statement after the if condition will
be considered.</p><br><br>
<p>== must be used for comparison in the expression of if condition, if you
use = the expression will always return true, because it performs
assignment not comparison</p><br><br>
<p>Other than 0(zero), all other positive numeric values are considered
as true. </p>
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
				<h1 class="y">Methods in Java </h1><br><br>
				<p>A method is a collection of statements that perform some specific task and return the result to the caller. A method can perform some specific task without returning anything. Methods allow us to reuse the code without retyping the code. In Java, every method must be part of some class which is different from languages like C, C++, and Python.<br>
Methods are time savers and help us to reuse the code without retyping the code. </p>
				<h2>Method Declaration </h2>
				<p>In general, method declarations has six components :</p>
					<ul>
					<li style="margin-left: 40px;color:#black;font-size: 18px;padding: 5px;"><b> Modifier-:</b>Defines access type of the method i.e. from where it can be accessed in your application. In Java, there 4 type of the access specifiers.</li> <br>
					<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;"><ol>
						<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">public: accessible in all class in your application.</li><br>
							<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">protected: accessible within the class in which it is defined and in its subclass(es)</li><br>
								<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">private: accessible only within the class in which it is defined.</li><br>
								<li style="margin-left: 40px;color:black;font-size: 18px;padding: 5px;">default (declared/defined without using any modifier) : accessible within same class and package within which its class is defined.</li>
					</ol>
				</div><br>
					<li style="margin-left: 40px;color:#black;font-size: 18px;padding: 5px;"><b> The return type :</b> The data type of the value returned by the method or void if does not return a value.</li><br>
					<li style="margin-left: 40px;color:#black;font-size: 18px;padding: 5px;"><b> Method Name : </b>the rules for field names apply to method names as well, but the convention is a little different.</li><br>
					<li style="margin-left: 40px;color:#black;font-size: 18px;padding: 5px;"><b> Parameter list : </b>Comma separated list of the input parameters are defined, preceded with their data type, within the enclosed parenthesis. If there are no parameters, you must use empty parentheses ().</li><br>
					<li style="margin-left: 40px;color:#black;font-size: 18px;padding: 5px;"><b> Exception list :</b>The exceptions you expect by the method can throw, you can specify these exception(s).</li><br>
					<li style="margin-left: 40px;color:#black;font-size: 18px;padding: 5px;"><b> Method body :</b>it is enclosed between braces. The code you need to be executed to perform your intended operations.</li><br>
					</ul>
					<img src="https://media.geeksforgeeks.org/wp-content/uploads/methods-in-java.png" style="margin-left: 260px;margin-top:40px; margin-bottom: 40px; height: 370px;">
				<p><b>Method signature:</b> It consists of the method name and a parameter list (number of parameters, type of the parameters and order of the parameters). The return type and exceptions are not considered as part of it.
Method Signature of above function:</p>
				<p><b>How to name a Method?:</b> A method name is typically a single word that should be a verb in lowercase or multi-word, that begins with a verb in lowercase followed by adjective, noun….. After the first word, first letter of each word should be capitalized. For example, findSum,<br>computeMax, setX and getX<br>Generally, A method has a unique name within the class in which it is defined but sometime a method might have the same name as other method names within the same class as method overloading is allowed in Java.

</p><br><br><br>
<h2>Calling a method</h2>
<p>The method needs to be called for using its functionality. There can be three situations when a method is called:<br>
A method returns to the code that invoked it when:</p>
<ul>
	<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">It completes all the statements in the method</li>
	<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">It reaches a return statement</li>
	<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Throws an exception</li>
</ul><br><br>
<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;">
// Program to illustrate methodsin java <br>
import java.io.*; <br><br>
  
class Addition { <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
    int sum = 0; <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
    public int addTwoInt(int a, int b) {<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          
        // adding two integer value. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        sum = a + b; <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
        //returning summation of two values. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        return sum;  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    } <br><br>
      
} <br><br>
  
class DemoMethod { <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    public static void main (String[] args) { <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
        // creating an instance of Addition class  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Addition add = new Addition(); <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
        // calling addTwoInt() method to add two integer using instance created <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        // in above step. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        int s = add.addTwoInt(1,2); <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        System.out.println("Sum of two integer values :"+ s); <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
    } <br>
} 
<p><b>Output :</b>

Sum of two integer values :3</p>
	</div>
	<p>See the below example to understand method call in detail :</p><br><br>
	<div style="background-color: lightgrey;margin-left: 200px;width:800px;padding: 15px;"><br><br>
// Java program to illustrate different ways of calling a method <br>
import java.io.*; <br><br>
  
class Test  <br>
{ <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public static int i = 0; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// constructor of class which counts <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//the number of the objects of the class. <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Test() <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; { <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++; <br>
          
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// static method is used to access static members of the class <br> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// and for getting total no of objects  <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // of the same class created so far <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public static int get()  <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; { <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // statements to be executed.... <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return i; <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } <br><br>
  
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Instance method calling object directly  <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // that is created inside another class 'GFG'. <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Can also be called by object directly created in the same class<br>  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// and from another method defined in the same class  <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // and return integer value as return type is int. <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; public int m1() <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; { <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Inside the method m1 by object of GFG class"); <br>
          
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // calling m2() method within the same class. <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; this.m2(); 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // statements to be executed if any <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return 1; <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br><br>
  
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // It doesn't return anything as  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  // return type is 'void'. <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  public void m2()  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  { <br>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("In method m2 came from method m1"); <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  } <br>
} <br><br>
  
class demoMethod  <br>
{ <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; public static void main(String[] args)  <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; { <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   // Creating an instance of the class <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Test obj = new Test(); 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   // Calling the m1() method by the object created in above step. <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   int i = obj.m1(); <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   System.out.println("Control returned after method m1 :" + i); <br><br>
          
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   // Call m2() method <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   // obj.m2(); <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   int no_of_objects = Test.get(); <br><br>
          
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System.out.print("No of instances created till now : "); <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  System.out.println(no_of_objects); <br><br>
          
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  } <br>
} <br>

<p><b>Output :</b>

Inside the method m1 by object of demoMethod class<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In method m2 came from method m1<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Control returned after method m1 :1<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No of instances created till now : 1</p>


	</div>
					<img src="https://media.geeksforgeeks.org/wp-content/uploads/methods-in-java2.png" style="margin-left: 260px;margin-top:40px; margin-bottom: 40px; height: 370px;">
<p><b>Memory allocation for methods calls</b><br><br>Methods calls are implemented through stack. Whenever a method is called a stack frame is created within the stack area and after that the arguments passed to and the local variables and value to be returned by this called method are stored in this stack frame and when execution of the called method is finished, the allocated stack frame would be deleted. There is a stack pointer register that tracks the top of the stack which is adjusted accordingly.</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
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
		function mycourse()
		{
			document.getElementById("fg").classList.toggle("show");
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