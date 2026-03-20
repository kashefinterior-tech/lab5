<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Lab-five-upload profile picture</title>
    </head>
    <body>

    <h1>upload profile picture</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="profileImage">Pick an Image:</label>
            <input type="file" name="profileImage" id="profileImage" accept="image/*" required>

            <br><br>

            <button type="submit" name="submit">upload Image</button>
        </form>


    </body>
</html>