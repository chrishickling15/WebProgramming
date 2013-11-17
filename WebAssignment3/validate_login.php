<!DOCTYPE html>
<html>

	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Validate | CNH Designs and Development</title>
	</head>
	
	<body>
	
		<?php
			//connect to database
			$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200169949', '28653', 'db200169949') or die('Error connecting to MySQL server');
			
			//create variables
			$username = $_POST['username'];
			$password = sha1($_POST['password']);
			
			
			$sql = "SELECT admin_id FROM admins WHERE username = '$username' AND password = '$password'";
			
			$result = mysqli_query($conn, $sql) or die('Error querying database.');
			
			$count = mysqli_num_rows($result);
			
			if ($count == 1) 
			{
				while ($row = mysqli_fetch_array($result)) 
				{				
					//access the existing session created by the web server
					session_start();
					
					//store the user id in the session object
					$_SESSION['user_id'] = $row['admin_id'];
										
					//redirect the user
					header('Location: contacts.php');
				}
			
			}
			else 
			{
				echo '<script>window.alert("Access Denied\nIncorrect Username and/or Password");
				window.location.href="login.php"; </script>';
			}
			
			//close connection	to database
			mysqli_close($conn);
			
		?>
	
	</body>
</html>