<!DOCTYPE html>
<!--
	File Name: services.html 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script for a page showing services that I have to offer.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Services | CNH Designs and Development</title>
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		
		<?php include('header.php')?>
		
		<!--Navigation Section-->
		<div id="navbar">
			<nav>
				<a href="index.php">Home</a>
				<a href="about-me.php">About Me</a>
				<a href="projects.php">Projects</a>
				<a id="active" href="services.php">Services</a>					
				<a href="github.php">GitHub</a>
				<a href="contact-me.php">Contact Me</a>	
				<a href="contacts.php">Contacts<img src="images/lock.png"></a>						
			</nav>
		</div>
		<div id="main">
			<div id="heading">
				<h2>Services</h2>
			</div>
			<p>I offer a wide range of services based on my experience in design and development. While I excel in certain areas, I offer my experience in all aspects.</p>
			<dl>
				<dt><strong>Web Design</strong></dt>
				<dd>I am versed in HTML and CSS, and am able to construct highly functional web pages to any custom need. However, I especially enjoy integrating PHP into existing sites, or including it in my own constructions.</dd>
				<dt><strong>Development</strong></dt>
				<dd>Experience in Java, C++, C# and C has granted me the ability to develop versatile, user-friendly applications suitable for any client. Designing Java programs from scratch is when I am truly in my element.</dd>			
			</dl>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>
	
</html>