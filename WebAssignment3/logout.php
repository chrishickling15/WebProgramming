<!DOCTYPE html>
<!--
	File Name: logout.php 
	Author: Chris Hickling 
	Site Name: WebAssignment3
	File Description: Script to log the member out.
-->
<html>
	
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Logout | CNH Designs and Development</title>
		<link href="stylesheets/styles.css" rel="stylesheet" type="text/css" >
	</head>

	<body>
		<?php
	
		//access the existing session object
		session_start();
		
		//remove all the variables from the existing session
		session_unset();
		
		//get rid of the current session
		session_destroy();
		
		//redirect to login page
		header('Location: index.php');
	
		?>
	</body>
	
</html>