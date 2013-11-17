<!DOCTYPE html>
<!--
	File Name: contact-me.php 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script for a page showing ways in which to contact me.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Contact Me | CNH Designs and Development</title>
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		
		<?php include('header.php')?>
		
		<div id="navbar">
			<nav>
				<a href="index.php">Home</a>
				<a href="about-me.php">About Me</a>
				<a href="projects.php">Projects</a>
				<a href="services.php">Services</a>					
				<a href="github.php">GitHub</a>
				<a id="active" href="contact-me.php">Contact Me</a>
				<a href="contacts.php">Contacts<img src="images/lock.png"></a>							
			</nav>
		</div>
		<div id="main">
			<div id="heading">
				<h2>Contact Me</h2>
			</div>
			<h3>Keep Connected</h3>
			<ul>
				<li><a href="http://www.twitter.com/hickling_chris"><img src="images/twitter-icon.png"></a>Follow me on Twitter</li>
				<li><a href="https://plus.google.com/u/0/110552890086559306725/posts"><img src="images/gplus-icon.png"></a>Be in my Google+ Circle</li>
				<li><a href="https://www.facebook.com/chris.hickling.503"><img src="images/facebook-icon.png"></a>Check me out on Facebook</li>		
			</ul>
			<h3>Contact Info</h3>
			<dl>
				<dt><strong>Email</strong></dt>
				<dd>hicklestyx@hotmail.com</dd>
				<dt><strong>Work Address</strong></dt>
				<dd>1 Georgian Dr., Barrie, Ontario</dd>
				<dt><strong>Phone</strong></dt>
				<dd>Cell: 705-241-8092</dd>
				<dd>Home: 705-722-3128</dd>
			</dl>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>
	
</html>