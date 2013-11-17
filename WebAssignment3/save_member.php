<!DOCTYPE html>
<!--
	File Name: contacts.php 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: HTML script for a page showing a chart of contacts from a database.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Verify | CNH Designs and Development</title>
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		<?php
		
			//connect to the db
			$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200169949', '28653', 'db200169949') or die('Error connecting to MySQL server');
			
			//capture the login entered; hash the password so we can compare to the database*/
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			$flag = false;
		
			//Set up the SQL and query the database
			$sql = "SELECT * FROM admins";
			$result = mysqli_query($conn, $sql) or die('Error querying database');
			
			while($row = mysqli_fetch_array($result))
			{
				if($username == $row['username'])
				{
					$flag = true;
				}
			}
			
			if ($flag == false)	
			{
				$sql = ("INSERT INTO admins(username, password) VALUES ('$username', '$password')");
				mysqli_query($conn, $sql) or die('Error querying database');
				header('Location: login.php');	
			}
			
			if (flag == true)
			{
				echo("Username already registered.");
			}
			mysqli_close($conn);	
		?>
	</body>

</html>