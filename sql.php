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
.wrapper{
  position: relative;
  margin: 10px;
}

.wrapper .sidebar{
 width: 280px;
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
	margin-right:35px;
	margin-top: 1px;
}
.y
{
	text-align: center;
	margin-top: 20px;
}
.sql
{
	padding:10px;
	display: block;
}
.sql p,h3{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.join,.clause,.object,.nested,.difference{
	display: none;
}
.join p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.clause p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.object p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.nested p,h2{
	margin-left: 10px;
	padding: 16px;
	font-size: 19px;
}
.difference p,h2{
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
        	    <li class="c2"><a href="#" class="c1" onclick="sql()">Structured Query Language (SQL)</a></li>
	            <li class="c2"><a href="#" class="c1" onclick="join()">Inner Join vs Outer Join</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="clause()">Having vs Where Clause in SQL</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="object()">Database Objects in DBMS</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="nested()">Nested Queries in SQL</a></li>
    	        <li class="c2"><a href="#" class="c1" onclick="difference()">Join operation Vs Nested query in DBMS</a></li>
    	        <li class="c2"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeMcWInfDTa-DzeUl0F9sa1QGSTHqwVCDdsk7kJYwWhb_MVkw/viewform?usp=sf_link" class="c1" target="_blank">Quiz-Sql</a></li>
    	    </ul>
		</div>
		<div class="Content" style="font-family: sans-serif;">
			<div class="sql" id="sql">
				<h1 class="y">Structured Query Language (SQL)</h1>
				<p>Structured Query Language is a standard Database language which is used to create, maintain and retrieve the relational database. Following are some interesting facts about SQL.<br>
				SQL is case insensitive. But it is a recommended practice to use keywords (like SELECT, UPDATE, CREATE, etc) in capital letters and use user defined things (liked table name, column name, etc) in small letters.<br>
				We can write comments in SQL using “–” (double hyphen) at the beginning of any line.<br>
				SQL is the programming language for relational databases (explained below) like MySQL, Oracle, Sybase, SQL Server, Postgre, etc. Other non-relational databases (also called NoSQL) databases like MongoDB, DynamoDB, etc do not use SQL<br>
				Although there is an ISO standard for SQL, most of the implementations slightly vary in syntax. So we may encounter queries that work in SQL Server but do not work in MySQL.
				</p>
				<h2>What is Relational Database?</h2>
				<p>Relational database means the data is stored as well as retrieved in the form of relations (tables). Table 1 shows the relational database with only one relation called STUDENT which stores ROLL_NO, NAME, ADDRESS, PHONE and AGE of students.</p>
				<h3>STUDENT</h3>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ROLL_NO </th>
				<th> NAME </th>
				<th> ADDRESS </th>
				<th> PHONE </th>
				<th> AGE </th>
				</tr>
				<tr>
				<th> 1</th>
				<th> RAM </th>
				<th> DELHI </th>
				<th> 9455123451</th>
				<th> 18 </th>
				</tr>
				<tr>
				<th> 2</th>
				<th>  RAMESH </th>
				<th> GURGAON </th>
				<th>9652431543 </th>
				<th>18  </th>
				</tr>
				<tr>
				<th> 3</th>
				<th> SUJIT </th>
				<th> ROHTAK </th>
				<th>9156253131 </th>
				<th>  20</th>
				</tr>
				<tr>
				<th>4 </th>
				<th> SURESH  </th>
				<th> DELHI </th>
				<th>9156768971 </th>
				<th> 18 </th>
				</tr>
				</table>
				<p>These are some important terminologies that are used in terms of relation.<br>
				<b>Attribute:</b> Attributes are the properties that define a relation. e.g.; ROLL_NO, NAME etc.<br>
				<b>Tuple: </b>Each row in the relation is known as tuple. The above relation contains 4 tuples, one of which is shown as:</p>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> 1</th>
				<th> RAM </th>
				<th> DELHI </th>
				<th> 9455123451 </th>
				<th>18</th>
				</tr>
				</table>
				<p><b>Degree:</b> The number of attributes in the relation is known as degree of the relation. The STUDENT relation defined above has degree 5.<br>
				<b>Cardinality:</b> The number of tuples in a relation is known as cardinality. The STUDENT relation defined above has cardinality 4.<br>
				<b>Column:</b> Column represents the set of values for a particular attribute. The column ROLL_NO is extracted from relation STUDENT.</p>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ROLL_NO </th>
				</tr>
				<tr>
				<th>1 </th>
				</tr>
				<tr>
				<th>2 </th>
				</tr>
				<tr>
				<th>3 </th>
				</tr> 
				<tr>
				<th>4 </th>
				</tr>
				</table>
				<p>The queries to deal with relational database can be categories as:<br>
				<b>Data Definition Language:</b> It is used to define the structure of the database. e.g; CREATE TABLE, ADD COLUMN, DROP COLUMN and so on.<br><br>
				<b>Data Manipulation Language: </b>It is used to manipulate data in the relations. e.g.; INSERT, DELETE, UPDATE and so on.<br><br>
				<b>Data Query Language: </b>It is used to extract the data from the relations. e.g.; SELECT<br><br>
				So first we will consider the Data Query Language. A generic query to retrieve from a relational database is:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT [DISTINCT] Attribute_List FROM R1,R2….RM<br>
				[WHERE condition]<br>
				[GROUP BY (Attributes)[HAVING condition]]<br>
				[ORDER BY(Attributes)[DESC]];
				</div>
				<p>Part of the query represented by statement 1 is compulsory if you want to retrieve from a relational database. The statements written inside [] are optional. We will look at the possible query combination on relation shown in Table 1.<br><br>
				Case 1: If we want to retrieve attributes ROLL_NO and NAME of all students, the query will be:
				</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">SELECT ROLL_NO, NAME FROM STUDENT;
				</div><br>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ROLL_NO </th>
				<th>  NAME </th>
				</tr>
				<tr>
				<th> 1</th>
				<th> RAM </th>
				</tr>
				<tr>
				<th> 2</th>
				<th> RAMESH </th>
				</tr>
				<tr>
				<th>3 </th>
				<th> SUJIT  </th>
				</tr>
				<tr>
				<th>4 </th>
				<th> SURESH </th>
				</tr>
				</table>
				<p>Case 2: If we want to retrieve ROLL_NO and NAME of the students whose ROLL_NO is greater than 2, the query will be:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT ROLL_NO, NAME FROM STUDENT <br>
				WHERE ROLL_NO>2;
				</div><br>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ROLL_NO </th>
				<th> NAME </th>
				</tr>
				<tr>
				<th>3</th>
				<th> SUJIT </th>
				</tr>
				<tr>
				<th>4</th>
				<th> SURESH </th>
				</tr>
				</table>
				<p>CASE 3: If we want to retrieve all attributes of students, we can write * in place of writing all attributes as:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT * FROM STUDENT <br>
				WHERE ROLL_NO>2;
				</div><br>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ROLL_NO </th>
				<th> NAME </th>
				<th> ADDRESS </th>
				<th> PHONE </th>
				<th> AGE </th>
				</tr>				
				<tr>
				<th>3</th>
				<th> SUJIT </th>
				<th> ROHTAK </th>
				<th>9156253131</th>
				<th>20</th>
				</tr>
				<tr>
				<th>4</th>
				<th> SURESH </th>
				<th> DELHI </th>
				<th>9156768971</th>
				<th>18</th>
				</tr>
				</table>
				<p>CASE 4: If we want to represent the relation in ascending order by AGE, we can use ORDER BY clause as:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT * FROM STUDENT ORDER BY AGE;
				</div><br>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ROLL_NO </th>
				<th> NAME </th>
				<th> ADDRESS </th>
				<th> PHONE </th>
				<th> AGE </th>
				</tr>
				<tr>
				<th>1</th>
				<th> RAM </th>
				<th> DELHI </th>
				<th>9455123451</th>
				<th>18</th>
				</tr>
				<tr>
				<th>2</th>
				<th> RAMESH </th>
				<th> GURGAON </th>
				<th>9652431543</th>
				<th>18</th>
				</tr>
				<tr>
				<th>4</th>
				<th> SURESH </th>
				<th> DELHI </th>
				<th>9156768971</th>
				<th>18</th>
				</tr>
				<tr>
				<th>3</th>
				<th> SUJIT </th>
				<th> ROHTAK </th>
				<th>9156253131</th>
				<th>20</th>
				</tr>
				</table>
				<p>Note: ORDER BY AGE is equivalent to ORDER BY AGE ASC. If we want to retrieve the results in descending order of AGE, we can use ORDER BY AGE DESC.<br>
				CASE 5: If we want to retrieve distinct values of an attribute or group of attribute, DISTINCT is used as in:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT DISTINCT ADDRESS FROM STUDENT;
				</div><br>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ADDRESS</th>
				</tr>
				<tr>
				<th> DELHI</th>
				</tr>
				<tr>
				<th> GURGAON</th>
				</tr>
				<tr>
				<th> ROHTAK </th>
				</tr>
				</table>
				<p>If DISTINCT is not used, DELHI will be repeated twice in result set. Before understanding GROUP BY and HAVING, we need to understand aggregations functions in SQL.<br><br>
				<b>AGGRATION FUNCTIONS:</b> Aggregation functions are used to perform mathematical operations on data values of a relation. Some of the common aggregation functions used in SQL are:<br><br>
				<b>COUNT: </b>Count function is used to count the number of rows in a relation. e.g;</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT COUNT (PHONE) FROM STUDENT;<br>
				COUNT(PHONE)<br>
				4
				</div>
				<p><b>SUM: </b>SUM function is used to add the values of an attribute in a relation. e.g;</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT SUM (AGE) FROM STUDENT;<br>
				SUM(AGE)<br>
				74
				</div>
				<p>In the same way, MIN, MAX and AVG can be used.  As we have seen above, all aggregation functions return only 1 row.<br>
				<b>AVERAGE: </b>It gives the average values of the tupples. It is also defined as sum divided by count values.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Syntax:AVG(attributename)<br>
				OR<br>
				Syntax:SUM(attributename)/COUNT(attributename)
				</div>
				<p>The above mentioned syntax also retrieves the average value of tupples.<br>
				<b>MAXIMUM:</b>It extracts the maximum value among the set of tupples.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Syntax:MAX(attributename)
				</div>
				<p><b>MINIMUM:</b>It extracts the minimum value amongst the set of all the tupples.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Syntax:MIN(attributename)
				</div>
				<p><b>GROUP BY: </b>Group by is used to group the tuples of a relation based on an attribute or group of attribute. It is always combined with aggregation function which is computed on group. e.g.;</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT ADDRESS, SUM(AGE) FROM STUDENT<br>
				GROUP BY (ADDRESS);
				</div>
				<p>In this query, SUM(AGE) will be computed but not for entire table but for each address. i.e.; sum of AGE for address DELHI(18+18=36) and similarly for other address as well. The output is:</p>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				<th> ADDRESS </th>
				<th> SUM(AGE)</th>
				</tr>
				<tr>
				<th> DELHI </th>
				<th>36</th>
				</tr>
				<tr>
				<th> GURGAON </th>
				<th>18</th>
				</tr>
				<tr>
				<th> ROHTAK </th>
				<th>20</th>
				</tr>
				</table>
				<p>If we try to execute the query given below, it will result in error because although we have computed SUM(AGE) for each address, there are more than 1 ROLL_NO for  each address we have grouped. So it can’t be displayed in result set. We need to use aggregate functions on columns after SELECT statement to make sense of the resulting set whenever we are using GROUP BY.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT ROLL_NO, ADDRESS, SUM(AGE) FROM STUDENT<br>
				GROUP BY (ADDRESS); 
				</div>
				<p>NOTE: An attribute which is not a part of GROUP BY clause can’t be used for selection. Any attribute which is part of GROUP BY CLAUSE can be used for selection but it is not mandatory. But we could use attributes which are not a part of the GROUP BY clause in an aggregrate function.</p>

			</div>
			<div class="join" id="joi">
				<h1 class="y">Inner Join vs Outer Join</h1>
				<h2>What is Join?</h2>
				<p>An SQL Join is used to combine data from two or more tables, based on a common field between them. For example, consider the following two tables.</p>
				<h3>Student Table</h3>
				<table style="width:50%;margin-left: 200px;">
				  	<tr>
				    	<th> ENROLLNO </th>
				    	<th> STUDENTNAME </th>
				<th> ADDRESS </th>
				  	</tr>
				  	<tr>
				    	<th>1001</th>
				    	<th> geek1</th>
				<th> geeksquiz1</th>
				  	</tr>
				  	<tr>
				    	<th>1002</th>
				    	<th> geek2</th>
				<th> geeksquiz2</th>
				  	</tr>
				  	<tr>
				    	<th>1003</th>
				    	<th> geek3</th>
				<th> geeksquiz3</th>
				  	</tr>
					<tr>
				    	<th>1004</th>
				    	<th> geek4</th>
				<th> geeksquiz4</th>
				  	</tr>

				</table>
				<h3>StudentCourse Table</h3>
				<table style="width:50%;margin-left: 200px;">
				  	<tr>
				    	<th> COURSEID </th>
				    	<th> ENROLLNO </th>
				  	</tr>
				<tr>
				    	<th>1</th>
				    	<th>1001</th>
				  	</tr>
				<tr>
				    	<th>2</th>
				    	<th>1001</th>
				  	</tr>
				<tr>
				    	<th>3</th>
				    	<th>1001</th>
				  	</tr>
				<tr>
				    	<th>1</th>
				    	<th>1002</th>
				  	</tr>
				<tr>
				    	<th>2</th>
				    	<th>1003</th>
				  	</tr>
				</table>
				<p>Following is join query that shows names of students enrolled in different courseIDs.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT StudentCourse.CourseID,Student.StudentName<br>
				FROM Student<br>
				INNER JOIN StudentCourse <br>
				ON StudentCourse.EnrollNo = Student.EnrollNo<br>
				ORDER BY StudentCourse.CourseID
				</div>
				<p>Note:  INNER is optional above.  Simple JOIN is also considered as INNER JOIN</p>
				<p>The above query would produce following result.</p>
				<table style="width:50%;margin-left: 200px;">
				<tr>
				    	<th> COURSEID </th>
				    	<th> STUDENTNAME </th>
				  	</tr>
				<tr>
				    	<th>1</th>
				    	<th> geek1</th>
				  	</tr>
				<tr>
				    	<th>1</th>
				    	<th> geek2</th>
				  	</tr>
				<tr>
				    	<th>2</th>
				    	<th> geek1</th>
				  	</tr>
				<tr>
				    	<th>2</th>
				    	<th> geek3</th>
				  	</tr>
				<tr>
				    	<th>3</th>
				    	<th> geek1</th>
				  	</tr>
				</table>
				<p>What is the difference between inner join and outer join?<br>
				Outer Join is of 3 types</p>
				<ul>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> 1) Left outer join</li>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> 2) Right outer join</li>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> 3) Full Join</li>
								</ul>
				<p><b>1) Left outer join</b> returns all rows of table on left side of join. The rows for which there is no matching row on right side, result contains NULL in the right side.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT Student.StudentName,
				       StudentCourse.CourseID<br>
				FROM Student<br>
				LEFT OUTER JOIN StudentCourse<br> 
				ON StudentCourse.EnrollNo = Student.EnrollNo<br>
				ORDER BY StudentCourse.CourseID
				</div>
				<p>Note: OUTER is optional above. Simple LEFT JOIN is also considered as LEFT OUTER JOIN</p>
				<table style="width:50%;margin-left: 200px;">
				  	<tr>
				    	<th> STUDENTNAME </th>
				    	<th> COURSEID </th>
				  	</tr>
				<tr>
				    	<th> geek4</th>
				    	<th> NULL </th>
				  	</tr>
				<tr>
				    	<th> geek2</th>
				    	<th>1</th>
				  	</tr>	
				<tr>
				    	<th> geek1</th>
				    	<th>1</th>
				  	</tr>
				<tr>
				    	<th> geek1</th>
				    	<th>2</th>
				  	</tr>
				<tr>
				    	<th> geek3</th>
				    	<th>2</th>
				  	</tr>
				<tr>
				    	<th> geek1</th>
				    	<th>3</th>
				  	</tr>
				</table>
				<p><b>2) Right Outer Join</b> is similar to Left Outer Join (Right replaces Left everywhere)<br>
				<b>3) Full Outer Join</b> Contains results of both Left and Right outer joins.<br></p>

				
			</div> 
			<div class="clause" id="cla">
				<h1 class="y">Having vs Where Clause in SQL</h1>
				<P>The difference between the having and where clause in SQL is that the where clause cannot be used with aggregates, but the having clause can.</p>
				<p>The where clause works on row’s data, not on aggregated data.  Let us consider below table ‘Marks’.</p>
				<table style="width:50%;margin-left: 200px;">
	  				<tr>
	    				<th> Student </th>
	    				<th> Course </th>
	    				<th> Score </th>
	  				</tr>
	  				<tr>
	    				<th> a </th>
	    				<th> c1</th>
	    				<th>40 </th>
	  				</tr>
	  				<tr>
	    				<th> a </th>
	    				<th> c2 </th>
	    				<th> 50</th>
	  				</tr>
	  				<tr>
	    				<th> b   </th>
	    				<th> c3 </th>
	    				<th> 60</th>
	  				</tr>
	  				<tr>
	    				<th> d  </th>
	    				<th> c1 </th>
					<th>70 </th>
	  				</tr>
	  				<tr>
	    				<th> e </th>
	    				<th> c2</th>
	    				<th>80 </th>
	  				</tr>
				</table>
				<p>Consider the query</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT Student, Score FROM Marks WHERE Score >=40 
				</div>
				<p>This would select data row by row basis.</p>
				<p>The having clause works on aggregated data.</p>
				<p>For example,  output of below query</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT Student, SUM(score) AS total FROM Marks GROUP BY Student
				</div>
				<br>
				<table style="width:50%;margin-left: 200px;">
	  				<tr>
	    				<th> Student </th>
	    				<th> Total </th>
	  				</tr>
	  				<tr>
	    				<th> a </th>
	    				<th>  90</th>
	  				</tr>
	  				<tr>
	    				<th> b </th>
	    				<th>60 </th>
	  				</tr>              
	  				<tr>
	    				<th> d </th>
	    				<th>70 </th>
	  				</tr>
					<tr>
	    				<th> e </th>
	    				<th>80 </th>
	  				</tr>
					</table>
				<p>When we apply having in above query, we get</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;"> 
				SELECT Student, SUM(score) AS total FROM Marks GROUP BY Student<br>
				HAVING total > 70
				</div>
				<br>
				<table style="width:50%;margin-left: 200px;">
		  				<tr>
		    				<th> Student </th>
		    				<th> Total </th>
		  				</tr>
		  				<tr>
		    				<th> a </th>
		    				<th>90 </th>
		  				</tr>
		  				<tr>
		    				<th> e </th>
		    				<th>  80 </th>
		  				</tr>
						</table>
				<p>Note:  It is not a predefined rule but  in a good number of the SQL queries, we use WHERE prior to GROUP BY and HAVING after GROUP BY. The Where clause acts as a pre filter where as Having as a post filter.</p>
			</div>

			<div class="object" id="obj">
				<h1 class="y">Database Objects in DBMS</h1>
				<p>A database object is any defined object in a database that is used to store or reference data.Anything which we make from create command is known as Database Object.It can be used to hold and manipulate the data.Some of the examples of database objects are : view, sequence, indexes, etc.</p>
				<ul>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Table – Basic unit of storage; composed rows and columns
				</li>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> View – Logically represents subsets of data from one or more tables
				</li>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Sequence – Generates primary key values
				</li>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Index – Improves the performance of some queries
				</li>
				</li>
									<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Synonym – Alternative name for an object
				</li>
								</ul>
				<p>Different database Objects :</p>
				<h2>Table – </h2>
				<p>This database object is used to create a table in database.</p>
				<h3>Syntax :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE TABLE [schema.]table<br>
				               (column datatype [DEFAULT expr][, ...]);
				</div>
				<h3>Example :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE TABLE dept<br>
				           (deptno NUMBER(2),<br>
				            dname VARCHAR2(14),<br>
				            loc VARCHAR2(13));
				</div>
				<h3>Output :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				DESCRIBE dept;
				</div>
				<h2>View – </h2>
				<p>This database object is used to create a view in database.A view is a logical table based on a table or another view. A view contains no data of its own but is like a window through which data from tables can be viewed or changed. The tables on which a view is based are called base tables. The view is stored as a SELECT statement in the data dictionary.</p>
				<h3>Syntax :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE [OR REPLACE] [FORCE|NOFORCE] VIEW view<br>
				                       [(alias[, alias]...)]<br>
				                       AS subquery<br>
				                       [WITH CHECK OPTION [CONSTRAINT constraint]]<br>
				                       [WITH READ ONLY [CONSTRAINT constraint]];<br>
				</div>
				<h3>Example :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE VIEW salvu50<br>
				               AS SELECT employee_id ID_NUMBER, last_name NAME,<br>
				               salary*12 ANN_SALARY<br>
				               FROM employees<br>
				               WHERE department_id = 50;
				</div>
				<h3>Output :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT *<br>
				FROM salvu50;
				</div>
				<h2>Sequence – </h2>
				<p>This database object is used to create a sequence in database.A sequence is a user created database object that can be shared by multiple users to generate unique integers. A typical usage for sequences is to create a primary key value, which must be unique for each row.The sequence is generated and incremented (or decremented) by an internal Oracle routine.
				</p>
				<h3>Syntax :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE SEQUENCE sequence<br>
				                    [INCREMENT BY n]<br>
				                    [START WITH n]<br>
				                    [{MAXVALUE n | NOMAXVALUE}]<br>
				                    [{MINVALUE n | NOMINVALUE}]<br>
				                    [{CYCLE | NOCYCLE}]<br>
				                    [{CACHE n | NOCACHE}];
				</div>
				<h3>Example :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE SEQUENCE dept_deptid_seq<br>
				                        INCREMENT BY 10<br>
				                        START WITH 120<br>
				                        MAXVALUE 9999<br>
				                        NOCACHE<br>
				                        NOCYCLE;<br>
				</div>
				<p>Check if sequence is created by :</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				SELECT sequence_name, min_value, max_value,<br>
				                       increment_by, last_number<br>
				                       FROM   user_sequences;<br>
				</div>
				<h3>Index –</h3> 
				<p>This database object is used to create a indexes in database.An Oracle server index is a schema object that can speed up the retrieval of rows by using a pointer.Indexes can be created explicitly or automatically. If you do not have an index on the column, then a full table scan occurs.<br>
				An index provides direct and fast access to rows in a table. Its purpose is to reduce the necessity of disk I/O by using an indexed path to locate data quickly. The index is used and maintained automatically by the Oracle server. Once an index is created, no direct activity is required by the user.Indexes are logically and physically independent of the table they index. This means that they can be created or dropped at any time and have no effect on the base tables or other indexes.
				</p>
				<h3>Syntax :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE INDEX index<br>
				            ON table (column[, column]...);
				</div>
				<h3>Example :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE INDEX emp_last_name_idx<br>
				                ON  employees(last_name);
				</div>
				<h2>Synonym –</h2>
				<p> This database object is used to create a indexes in database.It simplify access to objects by creating a synonym(another name for an object). With synonyms, you can Ease referring to a table owned by another user and shorten lengthy object names.To refer to a table owned by another user, you need to prefix the table name with the name of the user who created it followed by a period. Creating a synonym eliminates the need to qualify the object name with the schema and provides you with an alternative name for a table, view, sequence,procedure, or other objects. This method can be especially useful with lengthy object names, such as views.<br>
				In the syntax:<br>
				PUBLIC : creates a synonym accessible to all users<br>
				synonym : is the name of the synonym to be created<br>
				object : identifies the object for which the synonym is created
				</p>
				<h3>Syntax :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE [PUBLIC] SYNONYM synonym FOR  object;
				</div>
				<h3>Example :</h3>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				CREATE SYNONYM d_sum FOR dept_sum_vu;
				</div>

			</div>
			<div class="nested" id='nes'>
				<h1 class="y">Nested Queries in SQL</h1>
				<p>In nested queries, a query is written inside a query. The result of inner query is used in execution of outer query. We will use STUDENT, COURSE, STUDENT_COURSE tables for understanding nested queries.</p>
				<h2>STUDENT</h2>
				<table style="width:50%;margin-left: 200px;">
				  				<tr>
				    				<th> S_ID</th>
				    				<th> S_NAME </th>
				<th> S_ADDRESS </th>
				<th> S_PHONE </th>
				<th> S_AGE </th>
				  				</tr>
				<tr>
				    				<th> S1</th>
				    				<th> RAM </th>
				<th> DELHI </th>
				<th> 9455123451</th>
				<th> 18</th>
				  				</tr>
				<tr>
				    				<th> S2</th>
				    				<th> RAMESH </th>
				<th> GURGAON </th>
				<th> 9652431543</th>
				<th> 18</th>
				  				</tr>
				<tr>
				    				<th> S3</th>
				    				<th> SUJIT </th>
				<th> ROHTAK </th>
				<th> 9156253131</th>
				<th>20 </th>
				  				</tr>
				<tr>
				    				<th> S4</th>
				    				<th> SURESH </th>
				<th> DELHI </th>
				<th> 9156768971</th>
				<th>18 </th>
				  				</tr>	
								</table>
				<h2>COURSE</h2>
				<table style="width:50%;margin-left: 200px;">
				  				<tr>
				    				<th> C_ID </th>
				    				<th> C_NAME </th>
				  				</tr>
				<tr>
				    				<th> C1 </th>
				    				<th> DSA </th>
				  				</tr>
				<tr>
				    				<th> C2</th>
				    				<th> Programming </th>
				  				</tr>
				<tr>
				    				<th> C3</th>
				    				<th> DBMS </th>
				  				</tr>
								</table>
				<h2>STUDENT_COURSE</h2>
				<table style="width:50%;margin-left: 200px;">
				  				<tr>
				    				<th> S_ID </th>
				    				<th> C_ID </th>
				  				</tr>
				<tr>
				    				<th> S1 </th>
				    				<th> C1</th>
				  				</tr>
				<tr>
				    				<th> S1 </th>
				    				<th> C3 </th>
				  				</tr>
				<tr>
				    				<th> S2 </th>
				    				<th> C1</th>
				  				</tr>
				<tr>
				    				<th> S3 </th>
				    				<th> C2</th>
				  				</tr>
				<tr>
				    				<th> S4 </th>
				    				<th> C2</th>
				  				</tr>
				<tr>
				    				<th> S4 </th>
				    				<th> C3</th>
				  				</tr>
				</table>
				<p>There are mainly two types of nested queries:</p>
				<h2>Independent Nested Queries:</h2>
				<p> In independent nested queries, query execution starts from innermost query to outermost queries. The execution of inner query is independent of outer query, but the result of inner query is used in execution of outer query. Various operators like IN, NOT IN, ANY, ALL etc are used in writing independent nested queries.</p>
				<h2>IN:</h2>
				<p> If we want to find out S_ID who are enrolled in C_NAME ‘DSA’ or ‘DBMS’, we can write it with the help of independent nested query and IN operator. From COURSE table, we can find out C_ID for C_NAME ‘DSA’ or DBMS’ and we can use these C_IDs for finding S_IDs from STUDENT_COURSE TABLE.</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				STEP 1: Finding C_ID for C_NAME =’DSA’ or ‘DBMS’<br>
				Select C_ID from COURSE where C_NAME = ‘DSA’ or C_NAME = ‘DBMS’<br><br>
				STEP 2: Using C_ID of step 1 for finding S_ID<br>
				Select S_ID from STUDENT_COURSE where C_ID IN<br>
				(SELECT C_ID from COURSE where C_NAME = ‘DSA’ or C_NAME=’DBMS’);<br>
				</div>

				<p>The inner query will return a set with members C1 and C3 and outer query will return those S_IDs for which C_ID is equal to any member of set (C1 and C3 in this case). So, it will return S1, S2 and S4.</p>
				<p>Note: If we want to find out names of STUDENTs who have either enrolled in ‘DSA’ or ‘DBMS’, it can be done as:</p>

				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Select S_NAME from STUDENT where S_ID IN<br>
				(Select S_ID from STUDENT_COURSE where C_ID IN<br>
				(SELECT C_ID from COURSE where C_NAME=’DSA’ or C_NAME=’DBMS’));<br>
				</div>
				<h2>NOT IN:</h2>
				<p> If we want to find out S_IDs of STUDENTs who have neither enrolled in ‘DSA’ nor in ‘DBMS’, it can be done as:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Select S_ID from STUDENT where S_ID NOT IN<br>
				(Select S_ID from STUDENT_COURSE where C_ID IN<br>
				(SELECT C_ID from COURSE where C_NAME=’DSA’ or C_NAME=’DBMS’));
				</div>
				<p>The innermost query will return a set with members C1 and C3. Second inner query will return those S_IDs for which C_ID is equal to any member of set (C1 and C3 in this case) which are S1, S2 and S4. The outermost query will return those S_IDs where S_ID is not a member of set (S1, S2 and S4). So it will return S3.</p>
				<h2>Co-related Nested Queries:</h2>
				<p> In co-related nested queries, the output of inner query depends on the row which is being currently executed in outer query. e.g.; If we want to find out S_NAME of STUDENTs who are enrolled in C_ID ‘C1’, it can be done with the help of co-related nested query as:</p>
				<div style="background-color: lightgrey;margin-left: 400px;width:400px;padding: 15px;">
				Select S_NAME from STUDENT S where EXISTS<br>
				( select * from STUDENT_COURSE SC where S.S_ID=SC.S_ID and SC.C_ID=’C1’);
				 </div>
				<p>For each row of STUDENT S, it will find the rows from STUDENT_COURSE where S.S_ID = SC.S_ID and SC.C_ID=’C1’. If for a S_ID from STUDENT S, atleast a row exists in STUDENT_COURSE SC with C_ID=’C1’, then inner query will return true and corresponding S_ID will be returned as output.</p>

			</div>

			<div class="difference" id="dif">
				<h1 class="y">Join operation Vs Nested query in DBMS</h1>
				<p>The growth of technology and automation coupled with exponential amounts of data have led to the importance and omnipresence of databases which, simple put, are organized collections of data. Considering a naive approach, one can theoretically keep all the data in one large table, however that increases the access time in searching for a record, security issues if the master table is destroyed, redundant storage of information and other issues. So tables are decomposed into multiple smaller tables.</p>
				<p>For retrieving information from multiple tables, we need to extract selected data from different records, using operations called join(inner join, outer join and most importantly natural join). Consider 2 table schemas employee(employee_name, street, city)with n rows and works(employee_name, branch_name, salary) with m rows. A cartesian product of these 2 tables creates a table with n*m rows. A natural join selects from this n*m rows all rows with same values for employee_name. To avoid loss of information(some tuples in employee have no corresponding tuples in works) we use left outer join or right outer join.
				</p>
				<p> join or a nested query is better subject to conditions:</p>
				<ul>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Suppose our 2 tables are stored on a local system. Performing a join or a nested query will make little difference. Now let tables be stored across a distributed databases. For a nested query, we only extract the relevant information from each table, located on different computers, then merge the tuples obtained to obtain the result. For a join, we would be required to fetch the whole table from each site and create a large table from which the filtering will occur, hence more time will be required. So for distributed databases, nested queries are better.
					</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> RDBMS optimizer is concerned with performance related to the subquery or join written by the programmer. Joins are universally understood hence no optimization issues can arise. If portability across multiple platforms is called for, avoid subqueries as it may run into bugs(SQL server more adept with joins as its usually used with Microsoft’s graphical query editors that use joins).
					</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Implementation specific: Suppose we have queries where a few of the nested queries are constant. In MySQL, every constant subquery would be evaluated as many times as encountered, there being no cache facility. This is an obvious problem if the constant subquery involves large tuples. </li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Subqueries return a set of data. Joins return a dataset which is necessarily indexed. Working on indexed data is faster so if the dataset returned by subqueries is large, joins are a better idea.
					</li>
					<li style="margin-left: 40px;color:#696969;font-size: 18px;padding: 5px;"> Subqueries may take longer to execute than joins depending on how the database optimizer treats them(maybe converted to joins). Subqueries are easier to read, understand and evaluate than cryptic joins. They allow a bottom-up approach, isolating and completing each task sequentially.
					</li>
				</ul>
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
		var x=document.getElementById('sql');
		var x1=document.getElementById('joi');
		var x2=document.getElementById('cla');
		var x3=document.getElementById('obj');
		var x4=document.getElementById('nes');
		var x5=document.getElementById('dif');
		function sql()
		{
			x.style.display="block";
			x1.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
		}
		function join()
		{
			x1.style.display="block";
			x.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
		}
		function clause()
		{
			x2.style.display="block";
			x.style.display="none";
			x1.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
		}
		function object()
		{
			x3.style.display="block";
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x4.style.display="none";
			x5.style.display="none";
		}
		function nested()
		{
			x4.style.display="block";
			x3.style.display="none";
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x5.style.display="none";
		}
		function difference()
		{
			x.style.display="none";
			x1.style.display="none";
			x2.style.display="none";
			x3.style.display="none";
			x4.style.display="none";
			x5.style.display="block";
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