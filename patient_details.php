<!doctype html>
<?php include ("func.php"); ?>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Patient Details</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="jumbotron" style="background:url('images/2.jpg') no-repeat; background-size:cover; height:400px;"></div>

		<div class="container">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB; color:#fff; border-color:#3498DB;">
					<div class="row">
						<div class="col-md-1">
							<a href="admin-panel.php" class="btn btn-light">Go Back</a>
						</div>
						<div class="col-md-3"><h3>Patient Details</h3></div>
						<div class="col-md-8">
							<form class="form-group" action="patient_search.php" method="post">
								<div class="row">
									<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter Contact"></div>
									<div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="card-body" style="background-color:#3498DB; color:#fff; border-color:#3498DB;">
				<table class="table table-hover">
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
						<?php get_patient_details(); ?>
					</tbody>
				</table>
			</div>
		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	</body>
</html>