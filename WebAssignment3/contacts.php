<!DOCTYPE html>
<!--
	File Name: contacts.php 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script for a page showing a chart of contacts from a database.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Home | CNH Designs and Development</title>
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
				<a href="contacts.php" id="active" >Contacts</a>					
			</nav>
		</div>
		<div id="main">
			<div id="heading">
				<h2>Contacts</h2>
			</div>
			<?php
			     //connect to DB
				$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200169949', '28653', 'db200169949')
						or die('Could not connect.');
				
				//evaluate the user_id in the session that was set on validate.php
				if(empty($_SESSION['user_id']))
				{
					//send user back to login if session is not valid
					header('Location: login.php');
				}
				
				//retrieve row info from database					
				$result = mysqli_query($conn,"SELECT * FROM contacts ORDER BY name ASC");
				
				//set up a table for info
				echo "<table border='1'>
				<tr>
				<th>Name</th>
				<th>Company</th>
				<th>Phone Number</th>
				<th>Address</th>
				</tr>";
				
				//show info row by row
				while($row = mysqli_fetch_array($result))
				  {
				  echo "<tr>";
				  echo "<td>" . $row['name'] . "</td>";
				  echo "<td>" . $row['company'] . "</td>";
				  echo "<td>" . $row['phone'] . "</td>";
				  echo "<td>" . $row['address'] . "</td>";
				  echo "</tr>";
				  }
				echo "</table>";
				
				//close connection
				mysqli_close($conn);
			?>
		</div>
		<footer>
			<div id="copyright">
				Copyright 2013 by CNH Designs and Development
			</div>
		</footer>
	</body>

</html>