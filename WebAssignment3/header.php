		<header>
			<div id="logo">
				<img src="images/logo.png">
			</div>
			<h1>Chris N. Hickling | Designs and Development</h1>
			<div id="social">
				<a href="mailto:hicklestyx@hotmail.com" target="_top"><img src="images/email-icon.png"></a>
				<a href="http://www.twitter.com/hickling_chris"><img src="images/twitter-icon.png"></a>
				<a href="https://plus.google.com/u/0/110552890086559306725/posts"><img src="images/gplus-icon.png"></a>
				<a href="https://www.facebook.com/chris.hickling.503"><img src="images/facebook-icon.png"></a>
			</div>
			<div id="members">
				<?php
					//access the current session
					session_start();
				
					if(empty($_SESSION['user_id']))
					{
						echo'<a href="login.php">Login</a>';
						echo'<a href="register.php">Register</a>';
					}
					else 
					{
						echo'<a href="logout.php">Logout</a>';
					}
				?>
			</div>
		</header>