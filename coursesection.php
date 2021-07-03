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
.show {display: block;}
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
			<a href="newproject.php"><img src="https://www.simplilearn.com/ice9/new_logo.svgz" style="width: 140px;margin-left: 10px;cursor: pointer;"></a>
		</div>
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
        	    <li class="c2"><a href="#" class="c1" onclick="basics()">C++ Programming Language</a></li>
	            <li class="c2"><a href="#" class="c1" onclick="syntax()">Basic Concepts of c++</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="datatype()">Datatypes and Modifiers in C++ </a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="variables()">Variables</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="operator()">Operators</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="decision()">Decision making</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="storage()">Storage classes</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="fun()">functions</a></li>
    	        <li class="c2"><a class="c1" href="https://docs.google.com/forms/d/e/1FAIpQLSdeCKdMZJEFeGeukLTPiE1wCP_UX-WA-QQrcYaEgjH6xDUWgg/viewform?usp=sf_link" target="_blank">Quiz-c++</a></li>
    	    </ul>
		</div>
		<div class="Content" style="font-family: sans-serif;">
			<div class="basics" id="v">
				<h1 class="y">Introduction to C++ </h1>
				<img src="https://www.geeksforgeeks.org/wp-content/uploads/titleShadow-768x256.png" style="margin-left: 190px;margin-top:40px;">
				<p>C++, as we all know is an extension to C language and was developed by Bjarne
					stroustrup at bell labs. C++ is an intermediate level language, as it comprises a
					confirmation of both high level and low level language features. C++ is a
					statically typed, free form, multiparadigm, compiled general-purpose language. </p>
				<p>C++ is an Object Oriented Programming language but is not purely Object
					Oriented. Its features like Friend and Virtual, violate some of the very
					important OOPS features, rendering this language unworthy of being called
					completely Object Oriented. Its a middle level language. 
				</p>
				<h3>Benefits of C++ over C Language </h3>
				<p>The major difference being OOPS concept, C++ is an object oriented language
					whereas C language is a procedural language. Apart form this there are many
					other features of C++ which gives this language an upper hand on C laguage. </p>
					<p>
						Following features of C++ makes it a stronger language than C, 

					</p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;" >There is Stronger Type Checking in C++. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">All the OOPS features in C++ like Abstraction, Encapsulation, Inheritance
					etc makes it more worthy and useful for programmers.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">C++ supports and allows user defined operators (i.e Operator
						Overloading) and function overloading is also supported in it. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Exception Handling is there in C++. 
					</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">The Concept of Virtual functions and also Constructors and Destructors for Objects.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Inline Functions in C++ instead of Macros in C language. Inline functions
					make complete function body act like Macro, safely. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Variables can be declared anywhere in the program in C++, but must be
						declared before they are used. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">C++ is a compiled language, contributing to its speed.</li>
				</ul>
			</div>
			<div class="syntax" id="syn">
				<h1 class="y">Basic Concepts of C++ </h1>
				<p>In this section we will cover the basics of C++, it will include the syntax, variable,
				operators, loop types, pointers, references and information about other
				requirements of a C++ program. You will come across lot of terms that you have
				already studied in C language. </p>
				<h2>Syntax and Structure of C++ program</h2>
				<p>Here we will discuss one simple and basic C++ program to print "Hello this is
				C++" and its structure in parts with details and uses. </p>

				<h2>First C++ program </h2>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					#include < iostream><br><br>
					using namespace std;<br><br>

					// main() is where program execution begins.<br><br>
					int main()<br>
					{<br><br>
   						cout << "Hello World"; // prints Hello World<br><br>
   					return 0;<br><br>
					}
				</div><br>
				<ul>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Header files are included at the beginning 
					just like in C program.
					Here iostream is a header file which provides us with input & output streams.
					Header files contained predeclared function libraries, which can be used by
					users for their ease
				</li>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Using namespace std, tells the compiler to use standard namespace.
				Namespace collects identifiers used for class, object and variables. NameSpace
				can be used by two ways in a program, either by the use of using statement at
				the beginning, like we did in above mentioned program or by using name of
				namespace as prefix before the identifier with scope resolution (::) operator.<br>
				Example: std::cout << "A";
				</li>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">main(), is the function which holds the executing part of program its return type
				is int. </li>
				<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">cout <<, is used to print anything on screen, same as printf in C
				language. cin and cout are same as scanf and printf, only difference is that
				you do not need to mention format specifiers like, %d for int etc, in cout & cin. </li>
				</ul>
				<h2>Comments in C++ Program </h2>
				<p>For single line comments, use // before mentioning comment, like </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					cout<<"single line"; // This is single line comment
				</div>
				<p>For multiple line comment, enclose the comment between /* and */</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:200px;padding: 15px;">
					/*this is<br>
 					a multiple line<br>
 					comment */<br>
				</div>
				<h2>Creating Classes in C++ </h2>
				<p>Classes name must start with capital letter, and they contain data variables and
				member functions. This is a mere introduction to classes, we will discuss classes
				in detail throughout the C++ tutorial. </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					class Abc<br>
					{<br><br>
 						int i; //data variable<br><br>
 						void display() //Member Function<br><br>
 						{<br><br>
 							cout << "Inside Member Function";<br><br>
 						}<br><br>
					}; // Class ends here<br><br>
					int main()<br><br>
					{<br><br>
 						Abc obj; // Creatig Abc class's object<br><br>
 						obj.display(); //Calling member function using class object<br><br>
					}<br>
				</div>
				<p style="color:#696969; ">This is how a class is defined, once a class is defined, then its object is created
				and the member functions are used.
				Variables can be declared anywhere in the entire program, but must be
				declared, before they are used. Hence, we don't need to declare variable at the
				start of the program.
				Don't worry this is just to give you a basic idea about C++ language, we will
				cover everything in details in next tutorials </p>
			</div>
			<div class="data" id="dtype">
				<h1 class="y">Datatypes and Modifiers in C++</h1>
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
					These are the type, that user creates as a class or a structure. In C++ these are
					classes where as in C language user-defined datatypes were implemented as
					structures. 
				</p>
				<h2>Basic Built in Datatypes in C++ </h2>
				<table style="width:50%;margin-left: 200px;">
  				<tr>
    				<th>Datatype</th>
    				<th>Bytes</th>
  				</tr>
  				<tr>
    				<td>char</td>
    				<td>for character storage (1 byte) </td>
  				</tr>
  				<tr>
    				<td>int</td>
    				<td>for integral number (2 bytes) </td>
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
				<h2>Other Built in Datatypes in C++ </h2>
				<table style="width:50%;margin-left: 200px;">
  				<tr>
    				<th>Datatype</th>
    				<th>Bytes</th>
  				</tr>
  				<tr>
    				<td>bool</td>
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
				<h2>Enum as Datatype in C++ </h2>
				<p>Enumerated type declares a new type-name along with a sequence of values
				containing identifiers which has values starting from 0 and incrementing by 1
				every time. </p>
				<p>For Example: </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					enum day(mon, tues, wed, thurs, fri) d;
				</div>
				<p>Here an enumeration of days is defined which is represented by the
variable d. mon will hold value 0, tue will have 1 and so on. We can also explicitly
assign values, like, enum day(mon, tue=7, wed);. Here, mon will be 0, tue will
be assigned 7, so wed will get value 8.</p>
				<h2>Modifiers in C++ </h2>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">long</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">short</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">signed</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">unsigned</li>
				</ul>
				<p>The above mentioned modifiers can be used along with built in datatypes to
				make them more precise and even expand their range.<br><br>
				Below mentioned are some important points you must know about the
				modifiers, </p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">long and short modify the maximum and minimum values that a data
type will hold.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">A plain int must have a minimum size of short. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Size hierarchy : short int < int < long int</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Size hierarchy for floating point numbers is : float < double < long
double
</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">long float is not a legal type and there are no short floating
point numbers.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Signed types includes both positive and negative numbers and is the
default type</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Unsigned, numbers are always without any sign, that is always positive</li>
				</ul>
			</div> 
			<div class="variables" id="variable">
				<h1 class="y">Variables</h1>
				<p>Variable are used in C++, where we need storage for any value, which will
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
				declare them at the starting of the program, but in C++ they can be declared in
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
now, we can broadly divide variables into two main types,</p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Global Variables</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Loacal Variables</li>
				</ul>
				<h2>Global variables </h2>
				<p>Global variables are those, which ar once declared and can be used throughout
the lifetime of the program by any class or any function. They must be declared
outside the main() function. If only declared, they can be assigned different
values at different time in program lifetime. But even if they are declared and
initialized at the same time outside the main() function, then also they can be
assigned any value at any point in the program.<br><br>
For example: Only declared, not initialized </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					#include < iostream><br><br>
using namespace std;<br><br>
int x; // Global variable declared<br><br>
int main()<br><br>
{<br><br>
 x=10; // Initialized once<br><br>
 cout <<"first value of x = "<< x;<br><br>
 x=20; // Initialized again<br><br>
 cout <<"Initialized again with value = "<< x;<br><br>
}

				</div>
				<h2>Local variables </h2>
				<p>Local variables are the variables which exist only between the curly braces, in
which its declared. Outside that they are unavailable and leads to compile time
error.<br><br>
For example: Only declared, not initialized </p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					#include < iostream><br><br>
using namespace std;<br><br>
int main()<br><br>
{ <br><br>
 int i=10;<br><br>
 if(i<20) // if condition scope starts<br><br>
 {<br><br>
 int n=100; // Local variable declared and initialized<br><br>
 } // if condition scope ends<br><br>
 cout << n; // Compile time error, n not available here<br><br>
}<br><br>


				</div>
				<h2>Some special types of variable </h2>
				<p>There are also some special keywords, to impart unique characteristics to the
variables in the program. Following two are mostly used, we will discuss them
in details later.<br><br>
1. Final - Once initialized, its value cant be changed.<br><br>
2. Static - These variables holds their value between function calls.<br><br>Example : <br><br></p>
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
	#include < iostream.h><br><br>
using namespace std;<br><br>
int main()<br><br>
{<br><br>
 final int i=10;<br><br>
 static int y=20;<br><br>
}<br><br>
</div>
			</div>

			<div class="operator" id="op">
				<h1 class="y">Operators in C++</h1>
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
					C++ and C also use a shorthand notation to perform an operation and
					assignment at same type. Example,
				</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					int x=10;<br><br>
					x += 4 // will add 4 to 10, and hence assign 14 to X.<br><br>
					x -= 5 // will subtract 5 from 10 and assign 5 to x.<br><br>
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
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					int x = 10; //assignment operator<br><br>
					x=5; // again assignment operator<br><br>
					if(x == 5) // here we have used equivalent relational operator, for
					comparison<br><br>
					{<br><br>
					 cout <<"Successfully compared";<br><br>
					}<br><br>
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
					<h2>Unary Operators </h2>
				<p>
					These are the operators which work on only one operand. There are many
unary operators, but increment ++ and decrement -- operators are most used.<br><br>
Other Unary Operators : address of &, dereference *, new and delete, bitwise
not ~, logical not !, unary minus - and unary plus +. </p> 
					<h2>Ternary Operator </h2>
				<p>
					The ternary if-else ? : is an operator which has three operands. </p> 
					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						int a = 10;<br><br>
a > 5 ? cout << "true" : cout << "false"<br><br>

					</div>
					<h2>Comma Operator</h2>
				<p>
					This is used to separate variable names and to separate expressions. In case of
expressions, the value of last expression is produced and used. 
 </p> 
					<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
						int a,b,c; // variables declaration using comma operator<br><br>
a=b++, c++; // a = c++ will be done.<br><br>
					</div>
			</div>
			<div class="decision" id='dec'>
				<h1 class="y">Decision making in C++ - if, else and else if</h1>
				<p>Decision making is about deciding the order of execution of statements based
				on certain conditions or repeat a group of statements until certain specified
				conditions are met. C++ handles decision-making by supporting the following
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
						#include< iostream.h>
						int main( )<br><br>
						{<br><br>
						 int x,y;<br><br>
						 x=15;<br><br>
 y=13;<br><br>
 if (x > y )<br><br>
 {<br><br>
 cout << "x is greater than y";<br><br>
 }<br><br>
}<br><br>

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
				void main( )<br><br>
{ <br><br>
 int x,y;<br><br>
 x=15;<br><br>
 y=18;<br><br>
 if (x > y )<br><br>
 {<br><br>
 cout << "x is greater than y";<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 cout << "y is greater than x";<br><br>
 }<br><br>
}<br><br>

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
				void main( )<br><br>
{<br><br>
 int a,b,c;<br><br>
 cout << "enter 3 number";<br><br>
 cin >> a >> b >> c;<br><br>
 if(a > b)<br><br>
 {<br><br>
 if( a > c)<br><br>
 {<br><br>
 cout << "a is greatest";<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 cout << "c is greatest";<br><br>
 }<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 if( b> c)<br><br>
 {<br><br>
 cout << "b is greatest";<br><br>
 }<br><br>
 else<br><br>
 { <br><br>
 cout << "c is greatest";<br><br>
 }<br><br>
 }<br><br>
}<br><br>
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
	void main( )<br><br>
{<br><br>
 int a;<br><br>
 cout << "enter a number"; <br><br>
 cin >> a;<br><br>
 if( a%5==0 && a%8==0)<br><br>
 {<br><br>
 cout << "divisible by both 5 and 8";<br><br>
 }<br><br>
 else if( a%8==0 )<br><br>
 {<br><br>
 cout << "divisible by 8";<br><br>
 }<br><br>
 else if(a%5==0)<br><br>
 {<br><br>
 cout << "divisible by 5";<br><br>
 }<br><br>
 else<br><br>
 {<br><br>
 cout << "divisible by none";<br><br>
 }<br><br>
}<br><br>
</div>
		<h2>Points to Remember</h2>
			<p>In if statement, a single statement can be included without enclosing it
into curly braces { }. </p>
<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
	int a = 5;<br><br>
if(a > 4)<br><br>
 cout << "success";<br><br>
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
				<h1 class="y">Functions in C++ </h1>
				<p>Functions are used to provide modularity to a program. Creating an application
				using function makes it easier to understand, edit, check errors etc. </p>
				<h2>Basic Syntax for using Functions in C++ </h2>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					return-type function-name(parameter1, parameter2, ...)<br><br>
					{<br><br>
 						// function-body<br><br>
					}<br><br>
				</div>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">return-type: suggests what the function will return. It can be int, char,
					some pointer or even a class object. There can be functions which does
					not return anything, they are mentioned with void. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Function Name: is the name of the function, using the function name it is
					called.</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;">Parameters: are variables to hold values of arguments passed while
					function is called. A function may or may not contain parameter list. 
					</li>	
				</ul>


				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
					void sum(int x, int y)<br><br>
 					{<br><br>
 					int z;<br><br>
z = x + y;<br><br>
cout << z;<br><br>
}<br><br>

int main()<br><br>
{<br><br>
int a = 10; <br><br>
int b = 20;<br><br>
// calling the function with name 'sum'<br><br>
sum (a, b);<br><br>
}<br><br>
				</div>
					<p>Here, a and b are two variables which are sent as arguments to the
function sum, and x and y are parameters which will hold values
of a and b to perform the required operation inside the function.<br><br>
Function body: is the part where the code statements are written. </p>
			<h2>Declaring, Defining and Calling a Function </h2>
			<p>Function declaration, is done to tell the compiler about the existence of the
function. Function's return type, its name & parameter list is mentioned.
Function body is written in its definition. Lets understand this with help of an
example. </p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				
				#include < iostream><br><br>
				using namespace std;<br><br>
				//declaring the function<br><br>
				int sum (int x, int y);<br><br>
				int main()<br><br>
				{<br><br>
				 int a = 10;<br><br>
				 int b = 20;<br><br>
				 int c = sum (a, b); //calling the function<br><br>
				 cout << c;<br><br>
				}<br><br>
				//defining the function<br><br>
				int sum (int x, int y)<br><br>
				{<br><br>
				 return (x + y);<br><br>
				}<br><br>
			</div>
			<p>Here, initially the function is declared, without body. Then
inside main() function it is called, as the function returns sumation of two
values, and variable c is there to store the result. Then, at last, function
is defined, where the body of function is specified. We can also, declare & define
the function together, but then it should be done before it is called. </p>
			
			<h2>Calling a Function</h2>
			<p>Functions are called by their names. If the function is without argument, it can
be called directly using its name. But for functions with arguments, we have two
ways to call them,<br><br>
1. Call by Value<br><br>
2. Call by Reference <br><br></p>
			<h2>Call by Value </h2>
			<p>In this calling technique we pass the values of arguments which are stored or
copied into the formal parameters of functions. Hence, the original values are
unchanged only the parameters inside function changes. </p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				void calc(int x);<br><br>
int main()<br><br>
{<br><br>
 int x = 10;<br><br>
 calc(x);<br><br>
 printf("%d", x);<br><br>
} <br><br>
void calc(int x)<br><br>
{<br><br>
 x = x + 10 ;<br><br>
} <br><br>
			</div>
			<p>In this case the actual variable x is not changed, because we pass argument by
value, hence a copy of x is passed, which is changed, and that copied value is
destroyed as the function ends(goes out of scope). So the variable x inside
main() still has a value 10.<br><br>
But we can change this program to modify the original x, by making the
function calc() return a value, and storing that value in x. 
</p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				int calc(int x);<br><br>
int main()<br><br>
{<br><br>
 int x = 10;<br><br>
 x = calc(x);<br><br>
 printf("%d", x);<br><br>
}<br><br>
int calc(int x)<br><br>
{<br><br>
 x = x + 10 ;<br><br>
 return x;<br><br>
}<br><br>
			</div>
			<h2>Call by Reference </h2>
			<p>In this we pass the address of the variable as arguments. In this case the formal
parameter can be taken as a reference or a pointer, in both the case they will
change the values of the original variable. </p>
			<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				void calc(int *p);<br><br>
int main()<br><br>
{<br><br>
 int x = 10;<br><br>
 calc(&x); // passing address of x as argument<br><br>
 printf("%d", x);<br><br>
}<br><br>
void calc(int *p)<br><br>
{<br><br>
 *p = *p + 10;<br><br>
} <br><br>

			</div>
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
			document.getElementById("myDrop").classList.toggle("show");
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
	<br>
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