<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '', 'complaints');

// get the post records
$complaint_title = $_POST['complaint_title'];
$complaint_description = $_POST['complaint_description'];

// database insert SQL code
$sql = "INSERT INTO `complaints` (`complaint_id`, `complaint_title`, `complaint_description`) 
		VALUES ('0', '$complaint_title', '$complaint_description')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs) {
	$success_msg = "Your complaint has been submitted successfully.";
}

// retrieve complaints from database
$sql = 'SELECT * FROM complaints';
$retval = mysqli_query($con, $sql);

// create an array to hold the complaints
$complaints = array();

// iterate through the results and add them to the array
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
	$complaints[] = $row;
}

// close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Complaint Management System - Submitted Complaints</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Submitted Complaints</h1>
		<?php if(isset($success_msg)) { ?>
			<p class="success"><?php echo $success_msg; ?></p>
		<?php } ?>
		<?php if(count($complaints) > 0) { ?>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($complaints as $complaint) { ?>
						<tr>
							<td><?php echo $complaint['complaint_id']; ?></td>
							<td><?php echo $complaint['complaint_title']; ?></td>
							<td><?php echo $complaint['complaint_description']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		<?php } else { ?>
			<p>No complaints have been submitted yet.</p>
		<?php } ?>
	</div>
</body>
</html>
