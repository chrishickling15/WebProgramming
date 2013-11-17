<!DOCTYPE html>
<!--
	File Name: register.php 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script allowing the user to register as a member of the site.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Register | CNH Designs and Development</title>
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		
		<?php include('header.php')?>
		
		<!--Navigation controls-->
		<div id="navbar">
			<nav>
				<a href="index.php">Home</a>
				<a href="about-me.php">About Me</a>
				<a href="projects.php">Projects</a>
				<a href="services.php">Services</a>					
				<a href="github.php">GitHub</a>
				<a href="contact-me.php">Contact Me</a>	
				<a href="contacts.php">Contacts<img src="images/lock.png"></a>					
			</nav>
		</div>
		<div id="main">
			<div id="heading">
				<h2>Register</h2>
			</div>
			<form method="post" action="save_member.php">
				<div>
					<label for="username">Username:</label>
					<input type="text" name="username" />
				</div>
				<div>
					<label for="password">Password:</label>
					<input type="password" name="password" />
				</div>
				<input type="submit" value="Register" />
			</form>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>

</html>