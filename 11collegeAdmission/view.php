
<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from database
$sql = "SELECT name, email, phone, course, semester FROM admissions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// Output data of each row
	while($row = $result->fetch_assoc()) {

		echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["course"] . "</td><td>" . $row["semester"] . "</td></tr>";
		// echo "\n";
	}
} else {
	echo "No applications found";
}

// Close database connection
$conn->close();
?>




