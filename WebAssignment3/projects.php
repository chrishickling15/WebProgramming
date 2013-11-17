<!DOCTYPE html>
<!--
	File Name: projects.php 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script for a page displaying some of my recent projects.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Projects | CNH Designs and Development</title>
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		
		<?php include('header.php')?>
		
		<div id="navbar">
			<nav>
				<a href="index.php">Home</a>
				<a href="about-me.php">About Me</a>
				<a id="active" href="projects.php">Projects</a>
				<a href="services.php">Services</a>					
				<a href="github.php">GitHub</a>
				<a href="contact-me.php">Contact Me</a>	
				<a href="contacts.php">Contacts<img src="images/lock.png"></a>						
			</nav>
		</div>
		<div id="main">
			<div id="heading">
				<h2>Projects</h2>
			</div>
			<h3>Personal Portfolio Site</h3>
			<p>This site is the most recent, and ongoing project. Using HTML and CSS, I built this baby almost entirely from scratch. Due to my lack of JavaScript experience I used code for my image slider courtesy of <a href="http://www.menucool.com/javascript-image-slider">Menucool</a>. I hope to be able to construct my own slider from the ground up soon. This site will be under construction as I continue to learn the ways of HTML, CSS and JavaScript.</p>
			<h3>Mail Order Bonus Calculator App</h3>
			<p>An app to calculate the sales bonus for an employee based on several user entry fields, programmed in C# with Microsoft Visual Studio. This was my first real project implementing a proper, albeit simple, user interface. </p>
			<img id="rapid-app" src="images/app-dev.png">
			<h3>LED Matrix Arduino Game</h3>
			<p>The first major programming project of my college career was an Arduino based LED matrix game system, programmed in C. The player used the joystick on a Wii Nunchuk controller to move his or her dot around the screen.<br/><br/>Game Options:
				<ul>
					<li><strong>Dot Avoid</strong> - the player must maneuvre their dot to avoid the enemy dots hurtling towards them at ever-increasing speed</li>
					<li><strong>Return Challenge</strong> - the player must move their dot in the way of the oncoming dots, hitting them back. The player loses when an oncoming dot gets passed the user's dot.</li>
					<li><strong>Free Roam</strong> - the user can just move the dot all over the place. Surprisingly fun!</li>
				</ul>
				Check it out:
				<iframe width="560" height="315" src="//www.youtube.com/embed/K-h3z4fYSQc" frameborder="0" allowfullscreen></iframe>				
			</p>
			<h3>Game of World Domination</h3>
			<p>My second ever high school programming project was an updated Risk-style game in C++. It featured several of the world's super powers as playable countries. Each country had stats such as population, military size, number of ICBMs, among others. All stats were correct based on the CIA's World Factbook. Unfortunately, I worked on this game solely at the school and no longer have any record of it.</p>
			<h3>Yahtzee</h3>
			<p>My first project in high school was a C++ text-based Yahtzee game. Although I only knew the basics of programming at the time, I managed to create a fully functional Yahtzee-style game.<br/><br/>The game featured:
				<ul>
					<li>- Up to 4 player multiplayer</li>
					<li>- Single player highscore mode</li>
					<li>- Basic die animation for each roll</li>
					<li>- Extensive error control</li>
				</ul>
				The only thing it was missing was the satisfaction of rolling all those dice.
			</p>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>
	
</html>