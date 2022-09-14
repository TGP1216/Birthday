<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php 
		if(isset($_POST['submit']))
		{
			$phonenumber = $_POST['phonenumber'];
			$password = $_POST['password'];
			//get the password of the given phone number and validate to go further
		}
	?>
	<div class="container">
		<h4 class="text-center">Login</h4>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
			<div class="m-3">
				<label class="form-control">Phone number</label>
				<input type="text" class="form-control" name="phonenumber" required>
			</div>
			<div class="m-3">
				<label class="form-control">Password</label>
				<input class="form-control" type="password" name="password" required>
			</div>
			<div class="m-3">
				<input class="form-control bg-success text-white" type="submit" name="submit">
			</div>
		</form>
	</div>
</body>
</html>