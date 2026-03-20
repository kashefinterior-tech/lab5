<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>upload result</title>
    </head>
    <body>

    <h1>upload result</h1>

    <?php
    if(isset($_POST['submit'])){
        if(isset($_FILES['profileImage']) && $_FILES['profileImage']['error']===0){

            $fileName=$_FILES['profileImage']['name'];
            $tempName=$_FILES['profileImage']['tmp_name'];
            $fileSize=$_FILES['profileImage']['size'];


            
        }

    }
    ?>

    </body>
</html>