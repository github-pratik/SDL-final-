<?php
    $hName='localhost';
    $uName='root';
    $password='';
    $dbName = "cookie"; //database name
    $conn = mysqli_connect($hName,$uName,$password,"$dbName");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

