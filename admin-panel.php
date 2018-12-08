<!doctype html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Admin Panel</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="jumbotron" style="background:url('images/1.jpg') no-repeat; background-size:cover; height:400px;"></div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="list-group" style="background-color:#3498DB; color:#fff; border-color:#3498DB;">
						<a href="#" class="list-group-item active">Patients</a>
						<a href="patient_details.php" class="list-group-item">Patient Details</a>
						<a href="#" class="list-group-item">Payment/Checkout</a>
					</div>
					<hr>
					<div class="list-group" style="background-color:#3498DB; color:#fff; border-color:#3498DB;">
						<a href="#" class="list-group-item active">Staff</a>
						<a href="#" class="list-group-item">Staff Details</a>
						<a href="#" class="list-group-item">Add New Staff</a>
						<a href="#" class="list-group-item">Remove Staff Member</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-body" style="background-color:#3498DB; color:#fff; border-color:#3498DB;">Book an Appointment</div>
						<div class="card-body">
							<form class="form-group" action="func.php" method="post">
								<label>First Name : </label>
								<input type="text" name="fname" class="form-control"><br>

								<label>Last Name : </label>
								<input type="text" name="lname" class="form-control"><br>

								<label>Email : </label>
								<input type="text" name="email" class="form-control"><br>

								<label>Contact : </label>
								<input type="text" name="contact" class="form-control"><br>

								<label>Doctor Appointment : </label>
								<select class="form-group" name="docapp">
									<option value="Testing A">Testing A</option>
									<option value="Testing B">Testing B</option>
								</select><br>

								<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<!-- Sweet alert js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			swal({
				title: 'Sweet!',
				text: 'Modal with a custom image.',
				imageUrl: 'images/1.jpg',
				imageWidth: 400,
				imageHeight: 200,
				imageAlt: 'custom image',
				animation: false
			})
		});
	</script>
	</body>
</html>