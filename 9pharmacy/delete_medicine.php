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
s
// Delete the medicine from the database
$medicine_id = $_POST["medicine_id"];

$sql = "DELETE FROM medicines WHERE medicine_id='$medicine_id'";

if (mysqli_query($conn, $sql)) {
  echo "Medicine deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
