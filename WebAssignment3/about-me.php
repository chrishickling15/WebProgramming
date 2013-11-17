<!--
	File Name: about-me.php
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script for a page containing a short bio for me.
-->

<!DOCTYPE html>
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>About Me | CNH Designs and Development</title>
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		
		<?php include('header.php')?>
		
		<div id="navbar">
			<nav>
				<a href="index.php">Home</a>
				<a id="active" href="about-me.php">About Me</a>
				<a href="projects.php">Projects</a>
				<a href="services.php">Services</a>					
				<a href="github.php">GitHub</a>
				<a href="contact-me.php">Contact Me</a>	
				<a href="contacts.php">Contacts<img src="images/lock.png"></a>						
			</nav>
		</div>
		<div id="main">
			<div id="heading">
				<h2>About Me</h2>
			</div>
			<h3>Current</h3>
			<img id="headshot" src="images/chris.jpg">
			<p>I'm currently a second year Computer Programmer Analyst student at Georgian College in Barrie, Ontario. I enjoy all aspects of programming and web design, but especially love the logic and problem solving challenges of PHP and Java programming. In my spare time I like playing hockey, snowboarding, wakeboarding, fishing, casual gaming and hanging out with friends.</p>
			<h3>History</h3>
			<p>I was born on a farm in Oro-Medonte in 1989. I grew up as an active kid, spending most of my time scampering around the family farm, raising chickens, playing video games and catching as many random animals as I could. Managing to survive my restless childhood, I took a programming course at Easview Secondary School, loved it and decided to pursue it further.</p>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>
	
</html>