<?php
    require_once "db.php";
    $otpErr = "";
    //code to send mail
    session_start();
    $receiver = $_SESSION['email'];
    $subject = "Verification";
    $body = "The OTP for the registration in birthday wishing site .OTP:".$_SESSION['otp'];
    $sender = "From:wish.tomybirthday2@gmail.com";
    $mailstatus = mail($receiver, $subject, $body, $sender);
    if(!$mailstatus)
    {
        echo "message has not send";
    }
    if(isset($_POST['verify']))
    {
        if($_SESSION['otp']==$_POST['otp_entered'])
        {
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            $dateofbirth = $_SESSION['dateofbirth'];
            $password = $_SESSION['password'];
            $created_at = date('Y-m-d H:i:s');
            $last_login = date('Y-m-d H:i:s');
            do
            {
                $bytes = random_bytes(3);
		        $unique_user_id = bin2hex($bytes);
            }while(gettype($unique_user_id)=="integer");
            $sql = "INSERT INTO users (name,email,date_of_birth,password,user_id,created_at,last_login) VALUES ('$name','$email','$dateofbirth','$password','$unique_user_id,'$created_at','$last_login')";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                header("Location:../pages/default.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification page</title>
    <link rel="stylesheet" href="../resources/bootstrap.css">
	<script src="../resources/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <h4 class="text-success">Step 2</h4>
        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="m-3">
                <label class="form-control">Please Enter the OTP</label>
                <input type="number" name="otp_entered" class="form-control" pattern="[0-9]{6}" required>
                <span><?php echo $otpErr; ?></span>
            </div>
            <div class="m-3">
                <input class="form-control bg-success text-white" type="submit" value="Verify" name="verify">
            </div>
        </form>
    </div>
</body>
</html>