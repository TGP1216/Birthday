<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Launch your birthday</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		*
		{
			padding: 0;
			margin: 0;
			font-family: cursive;
		}
		.header
		{
			height: 15vh;
		}
		.section
		{
			height: 40vh;
		}
		.footer
		{
			height: 40vh;
		}
	</style>
</head>
<body>
	<div class="container-fluid text-center header">
		<h3><i class="fa-solid fa-cake-candles"></i>&nbsp;
		Celebrate Your Birthday With Us&nbsp;
		<i class="fa-solid fa-cake-candles"></i></h3>
		<p>Avoid unnecessary status on whatsapp</p>
	</div>
	<div class="container-fluid text-center section justify-content-center">
		<hr>
		<p>Click the button below to register for your birthday and get wishes from your friends</p>
		<button type="button" id="register" class="btn btn-primary">Register</button>
		<p>If you already have the account please login here.</p>
		<button type="button" id="wish" class="btn btn-primary">Login</button>
	</div>
	<div class="footer text-center">
		<hr>
		<p>This website in on the trial</p>
		<p>Support us for the advance level of this website</p>
		<p>For more details contact.</p>
		<p>Phone:+917092151562</p>
		<p>Email:gnanamoorthy1216@gmail.com</p>
	</div>

  	
    <script type="text/javascript">
    	$(document).ready(function() {
    		$("#wish").click(function(){
    			window.location.replace("login.php");
    		});
    		$("#register").click(function(){
    			window.location.replace("signup.php");
    		});
    	});
    </script>

</body>
</html>