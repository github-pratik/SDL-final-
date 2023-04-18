<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy_management_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Update the medicine details in the database
$medicine_id = $_POST["medicine_id"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$sql = "UPDATE medicines SET price='$price', quantity='$quantity'
        WHERE medicine_id='$medicine_id'";

if (mysqli_query($conn, $sql)) {
  echo "Medicine details updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
