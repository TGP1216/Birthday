<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host your birthday</title>
    <script src="../resources/bootstrap.js"></script>
    <link rel="stylesheet" href="../resources/bootstrap.css">
</head>
<body>
    <button id="button">Host my birthday</button>
    <script>
        $(document).ready(function(){
            $('#button').click(function() => {
                <?php
                    require_once('../security/db.php');
                    $sql = "CREATE TABLE ";
                ?>
            });
        });       
    </script>
</body>
</html>