<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "pharmacy_management_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert the new medicine into the database
$tmedicine_id = $_POST["medicine_id"];
$tprice = $_POST["price"];
$tquantity = $_POST["quantity"];

$sql = "INSERT INTO `medicines` (`medicine_id`, `price`, `quantity`)
        VALUES ('$tmedicine_id', '$tprice', '$tquantity')";

if (mysqli_query($conn, $sql)) {
  echo "Medicine added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
