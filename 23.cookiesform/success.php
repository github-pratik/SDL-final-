<?php
    	session_start();
     
    	// if (!isset($_SESSION['username']) ||(trim ($_SESSION['username']) == '')) {
    	// 	header('index.php');
    	// 	exit();
    	// }
    	include('dbcon.php');
    	$query=mysqli_query($conn,"select * from `user` where username='".$_SESSION['username']."'");
    	$row=mysqli_fetch_assoc($query);
		// echo $row["email"];
		echo $_COOKIE["email"]
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Setting Up Cookie on User Login</title>
    </head>
    <body>
    	<h2>Login Success</h2>
    	<?php echo $row['username']; ?>
    	<br>
    	<a  href="logout.php">Logout</a>
    </body>
    </html>