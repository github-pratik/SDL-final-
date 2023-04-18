<!-- <?php
    	session_start();
    	session_destroy();
     
    	if (isset($_COOKIE["username"]) AND isset($_COOKIE["password"]) AND isset($_COOKIE["email"])){
    		setcookie("username", '', time() - (3600));
    		setcookie("password", '', time() - (3600));
            setcookie("email", '', time() - (3600));
    	}
     
    	header('location:index.php');
     
    ?> -->

<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
	<style>
		/* CSS styles go here */
		body {
			background-color: #f0f0f0;
		}
		
		h1 {
			color: #0099ff;
			text-align: center;
		}
		
		/* etc. */
	</style>
</head>
<body>
	<!-- Page content goes here -->
	<?php
		// PHP code goes here
		session_start();
    	session_destroy();
     
    	if (isset($_COOKIE["username"]) AND isset($_COOKIE["password"]) AND isset($_COOKIE["email"])){
    		setcookie("username", '', time() - (3600));
    		setcookie("password", '', time() - (3600));
            setcookie("email", '', time() - (3600));
    	}
     
    	header('location:index.php');
     
	?>
</body>
</html>
