<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
      	<h4 class="text-center">Registration form</h4>
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
			<div class="m-3">
				<label class="form-control">Name</label>
				<input class="form-control" type="text" name="username">
			</div>
			<div class="m-3">
				<label class="form-control">Phone</label>
				<input class="form-control" type="number" name="phonenumber">
			</div>
			<div class="m-3">
				<label class="form-control">Date Of Birth</label>
				<input class="form-control" type="date" name="dateofbirth">
			</div>
			<div class="m-3">
				<label class="form-control">Create Password</label>
				<input class="form-control" type="password" name="crtpassword">
			</div>
			<div class="m-3">
				<label class="form-control">Confirm Password</label>
				<input class="form-control" type="password" name="conpassword">
			</div>
			<div class="m-3">
				<label class="form-control"><input type="checkbox" name="conditions"> Accept our <a href="#">terms and conditions</a></label>
			</div>
			<div class="m-3">
				<input class="btn form-control bg-success text-white" type="submit" name="Registerform" value="Register">
			</div>
		</form>
    </div>
</body>
</html>