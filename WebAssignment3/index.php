<!DOCTYPE html>
<!--
	File Name: index.html 
	Author: Chris Hickling Image Slider credit to http://www.menucool.com 
	Site Name: WebAssignment3
	File Description: HTML script for home page with image slider.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Home | CNH Designs and Development</title>
	    <link href="stylesheets/js-image-slider.css" rel="stylesheet" type="text/css" />
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	    <script src="javascript/js-image-slider.js" type="text/javascript"></script>
	</head>

	<body>
		
		<?php include('header.php')?>
		
		<!--Navigation controls-->
		<div id="navbar">
			<nav>
				<a id="active" href="index.php">Home</a>
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
				<h2>I Speak <i>Your</i> Language</h2>
			</div>
			<!--Menucool JavaScript Image Slider v2013.8.27. Copyright www.menucool.com-->
 			<div id="slider"> 
		 		<img src="images/logo-black.jpg" alt="CNH Designs and Development" /> 
		 		<img src="images/app-dev.png" alt="Wireframes to Functional" /> 
		 		<a href="http://www.menucool.com"><img src="images/menucool.jpg" alt="Slider Courtesy of Menucool" /></a> 
			 	<img src="images/card.PNG" alt="Simple Design" /> 
			 	<img src="images/arduino.jpg" alt="Working With Arduino" /> 
		 	</div>
		 	
			<p>CNH Designs and Development is committed to delivering quality, user-friendly, functional applications that fulfill all of our clients' needs. <br/><br/>I, Chris Hickling, personally assures that CNH
				<ul>
					<li>- Takes care, takes pride, and revels in developing applications designed for functionality and ease of use</li>
					<li>- Allows for ample flexibility and customization - from elegant simplicity to ornate complexity</li>
					<li>- Provides the tools for open editing, if desired</li>
				</ul>			
			</p>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>

</html>
