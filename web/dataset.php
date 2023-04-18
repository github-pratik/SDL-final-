<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','Enquiry');

// get the post records
$txtusername = $_POST['username'];
$txtlastname = $_POST['lastname'];
$txtemail = $_POST['email'];
$txtphone = $_POST['phone'];
$txtmessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `Enquiry1` (`Id`, `username`, `lastname`, `email`, `phone`, `message`) VALUES ('0', '$txtusername', '$txtlastname', '$txtemail', '$txtphone', '$txtmessage')";
// echo $sql;
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted <br> <br>";
	
}
$sql = 'SELECT * FROM Enquiry';
   
   $retval = mysqli_query($con, $sql);
   
   
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "EMP ID :{$row['id']}  <br> ".
           "First Name : {$row['username']} <br> ".
           "last  Name : {$row['lastname']} <br> ".
		    "Email : {$row['email']} <br> ".
          "Mobile Number : {$row['phone']} <br> ".
		   "Message : {$row['message']} <br> ".

         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
  