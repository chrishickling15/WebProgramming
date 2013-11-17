<!DOCTYPE html>
<!--
	File Name: github.html 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: HTML script for a page providing a link to my GitHub page.
-->

<html>	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>GitHub | CNH Designs and Development</title>
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
				<a id="active" href="github.php">GitHub</a>
				<a href="contact-me.php">Contact Me</a>
				<a href="contacts.php">Contacts<img src="images/lock.png"></a>						
			</nav>
		</div>
		<div id="main">
			<div id="heading">
				<h2>GitHub</h2>
			</div>
			<p>Take a look at some of my recent code, including <strong>this website</strong> on GitHub!</p>
			<a id="github"href="https://github.com/chrishickling15/"><img src="images/github.jpg" /></a>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>
	
</html>