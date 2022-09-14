<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php
		$name = $phonenumber = $dateofbirth = $createpassword = $confirmpassword = "";
		$passwordErr = ""; 
		if(isset($_POST['submit']))
    	{
    		$name = $_POST['name'];
    		$phonenumber = $_POST['pnumber'];
    		$dateofbirth = $_POST['dofb'];
    		$createpassword = $_POST['crpassword'];
    		$confirmpassword = $_POST['conpassword'];
    		if($createpassword != $confirmpassword)
    		{
    			$passwordErr = "* Please check the password";
    			$confirmpassword = "";
    		}
    		else
    		{
    			$password = $confirmpassword;
    			$_SESSION['name'] = $name;
    			$_SESSION['phonenumber'] = $phonenumber;
    			$_SESSION['dateofbirth'] = $dateofbirth;
    			$_SESSION['password'] = $password;
    			header("Location:verification.php");
    		}
    	}
	?>
	<div class="container">
		<h4 class="text-success">Step 1</h4>
		<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<div class="m-3">
				<label class="form-control">Name</label>
				<input value="<?php echo $name; ?>" class="form-control" type="text" pattern="[a-zA-Z ]{2,}" required name="name">
			</div>
			<div class="m-3">
				<label class="form-control">Phone Number</label>
				<input value="<?php echo $phonenumber; ?>" class="form-control" pattern="[0-9]{10}" type="number" required name="pnumber">
			</div>
			<div class="m-3">
				<label class="form-control">Date Of Birth</label>
				<input class="form-control" value="<?php echo $dateofbirth; ?>" required type="date" name="dofb">
			</div>
			<div class="m-3">
				<label class="form-control">Create Password</label>
				<input class="form-control" value="<?php echo $createpassword; ?>" required type="password" name="crpassword">
			</div>
			<div class="m-3">
				<label class="form-control">Confirm Password</label>
				<input value="<?php echo $confirmpassword; ?>" class="form-control" required type="password" name="conpassword">
				<span class="text-danger"><?php echo $passwordErr; ?></span>
			</div>
			<div class="m-3">
				<input class="form-control bg-success text-white" type="submit" name="submit">
			</div>
		</form>
    </div>
</body>
</html>