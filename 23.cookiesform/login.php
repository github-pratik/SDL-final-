<?php
    	if(isset($_POST['login'])){
     
    		session_start();
    		include('dbcon.php');
     
    		$username=$_POST['username'];
            $email=$_POST['email'];
    		$password=$_POST['password'];
     
    		$query=mysqli_query($conn,"select * from `user` where username='$username' && password='$password'");
            // user is table name 
    		if (mysqli_num_rows($query) == 0){
    			$_SESSION['message']="Login Failed. User not Found!";
    			header('location:index.php');
    		}
    		else{
    			$row=mysqli_fetch_array($query);
     
    			if (isset($_POST['remember'])){
    				//set up cookie
    				setcookie("username", $row['username'], time() + (86400 )); 
    				setcookie("password", $row['password'], time() + (86400 ));
					setcookie("email", $row['email'], time() + (86400)); 
    			}
     
    			// $_SESSION['id']=$row['userid'];
    			$_SESSION['username']=$row['username'];
    			header('location:success.php');
    		}
    	}
    	else{
    		header('location:index.php');
    		$_SESSION['message']="Please Login!";
    	}
    ?>