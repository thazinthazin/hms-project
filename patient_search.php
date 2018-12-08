<!doctype html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Patient Search</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
<?php 
include("func.php");

if(isset($_POST['patient_search_submit'])) {
	$contact = $_POST['search'];

	$query = "SELECT * FROM doctorapp WHERE contact='$contact'";
	$result = mysqli_query($con,$query);

	echo "<div class='container-fluid' style='margin-top:50px;'>
		<div class'card'>
		<div class='card-body'><a href='patient_details.php' class='btn btn-light'>Go Back</a></div>
		<img src='images/1.jpg' class='card-img-top'>
		<div class='card-body' style='background-color:#3498DB; color:#fff; border-color:#3498DB;'>
			<table class='table table-hover'>
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Contact</th>
						<th>Doctor Appointment</th>
					</tr>
				</thead>
				<tbody>
				";

	while ($row=mysqli_fetch_array($result)) {
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$contact = $row['contact'];
		$docapp = $row['docapp'];

		echo "<tr>
			<td>$fname</td>
			<td>$lname</td>
			<td>$email</td>
			<td>$contact</td>
			<td>$docapp</td>
		</tr>";
	}

	echo "</tbody></table></div></div></div>";
}

?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	</body>
</html>