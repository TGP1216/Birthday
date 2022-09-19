<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up page</title>
	<link rel="stylesheet" href="../resources/bootstrap.css">
	<script src="../resources/bootstrap.js"></script>
</head>
<body>
	<?php
		$name = $email = $dateofbirth = $createpassword = $confirmpassword = "";
		$passwordErr = $emailErr = "";
		if(isset($_POST['submit']))
    	{
    		$name = $_POST['name'];
    		$email = $_POST['email'];
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
				date_default_timezone_set("");
    			$password = $confirmpassword;
				session_start();
    			$_SESSION['name'] = $name;
    			$_SESSION['email'] = $email;
    			$_SESSION['dateofbirth'] = $dateofbirth;
    			$_SESSION['password'] = $password;
				$_SESSION['otp'] = rand(100000,999999);
				require "db.php";
				$query = "SELECT COUNT(*) AS count FROM users WHERE email = '$email'";
				$result = mysqli_query($conn,$query);
				$row = mysqli_fetch_array($result);
				if ($row ['count']){
    				$emailErr = "* This email is already registered";
					$email = "";
				}
				else
				{
					header("Location:verification.php");
				}
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
				<label class="form-control">Date Of Birth</label>
				<input class="form-control" value="<?php echo $dateofbirth; ?>" required type="date" name="dofb">
			</div>
			<div class="m-3">
				<label class="form-control">Email</label>
				<input value="<?php echo $email; ?>" class="form-control" type="email" required name="email">
				<span class="text-danger"><?php echo $emailErr; ?></span>
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