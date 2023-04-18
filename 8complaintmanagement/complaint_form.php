<fieldset>
	<legend>Submit a Complaint</legend>
	<form name="frmComplaint" method="post" action="submit_complaint.php">
		<p>
			<label for="complaint_title">Complaint Title:</label>
			<input type="text" name="complaint_title" id="complaint_title" required>
		</p>
		<p>
			<label for="complaint_description">Complaint Description:</label>
			<textarea name="complaint_description" id="complaint_description" required></textarea>
		</p>
		<p>
			<input type="submit" name="Submit" id="Submit" value="Submit Complaint">
		</p>
	</form>
</fieldset>
