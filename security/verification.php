<?php
    //code to send mail
    $receiver = "mr.gp1216@gmail.com";
    $subject = "Text send form localhost in php";
    $body = "Hi, there... this is a test email send from localhost";
    $sender = "From:wish.tomybirthday2@gmail.com";
    if(mail($receiver, $subject, $body, $sender))
    {
        echo "Email send successfully to $receiver";
    }
    else
    {
        echo "sorry failed to sending mail";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h4 class="text-success">Step 2</h4>
        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="m-3">
                <label class="form-control">OTP has been send to your mail<br>Please Enter the OTP</label>
                <input type="number" class="form-control" pattern="[0-9]{6}" required>
                <span><?php echo $otpErr; ?></span>
            </div>
            <div class="m-3">
                <input class="form-control bg-success text-white" type="submit" value="Verify" name="verify">
            </div>
        </form>
    </div>
</body>
</html>