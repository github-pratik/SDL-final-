
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

// Retrieve form data
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$course = $_POST["course"];
$semester = $_POST["semester"];

// Insert data into database
$sql = "INSERT INTO admissions (name, email, phone, course, semester) VALUES ('$name', '$email', '$phone', '$course', '$semester')";

if ($conn->query($sql) === TRUE) {
	echo "Admission application submitted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql) === TRUE) {
	// Redirect to view page
	// echo "Admission application submitted successfully";
	header("Location: view.php");
	exit();
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}



// Close database connection
$conn->close();
?>
