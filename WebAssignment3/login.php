<!DOCTYPE html>
<!--
	File Name: login.php 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script for a page allowing the members to login.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Login | CNH Designs and Development</title>
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
				<h2>Login</h2>
			</div>
			<form method="post" action="validate_login.php">

			<div>
				<label>Username</label>
				<input name="username">
			</div>
			<div>
				<label>Password</label>
				<input name="password" type="password">
			</div>
			<input value="Login" type="submit">			
			</form>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>

</html>
