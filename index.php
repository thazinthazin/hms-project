<!doctype html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport"
	          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>HMS</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			#ab1:hover {
				cursor: pointer;
			}
		</style>
	</head>
	<body style="background: url('images/1.jpg') no-repeat; background-size: cover;">
		<div class="container" style="width:400px; margin-top:100px;">
			<div class="card">
				<img src="images/3.jpg" class="card-img-top">
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label>Username : </label><br>
						<input type="text" name="username" class="form-control" placeholder="Enter Username"><br>
					
						<label>Password : </label><br>
						<input type="text" name="password" class="form-control" placeholder="Enter Password"><br>

						<input type="submit" name="login_submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	</body>
</html>