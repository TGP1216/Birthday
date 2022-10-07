<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisher's page</title>
    <link rel="stylesheet" href="../resources/bootstrap.css">
	<script src="../resources/bootstrap.js"></script>
    <script src="../resources/jquery.js"></script>
</head>
<body>
    
    <div style="height:80vh" id="editor" class="editor">
        
    </div>
    <div class="container text-center">
        <button class="btn-primary add-img">Add image</button>
        <button class="btn-primary add-msg">Add message</button>
        <button class="btn-primary add-vid">Add video</button>
        <form action="wisherpage.php" method="post">
            <input type="submit" class="btn-success mt-4" value="send">
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $(".add-img").click(function(){
                //creating div element and attributes
                var div = document.createElement("div");
                div.setAttribute('class','container bg-primary text-white');
                //creating form in div
                var form = document.createElement('form');
                form.setAttribute('method','post');
                form.setAttribute('action','<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>');
                div.appendChild(form);
                var forminput = document.createElement('input');
                forminput.setAttribute('type','file');
                forminput.setAttribute('name','filetoupload');
                forminput.setAttribute('id','filetoupload');
                const editor = document.getElementById('editor');
                editor.appendChild(div);
            });
        });
    </script>
</body>
</html>