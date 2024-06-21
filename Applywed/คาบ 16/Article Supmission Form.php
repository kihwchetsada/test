<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Supmission Form</title>
    <link rel="stylesheet" href="color/ASF.css">
    <h1>Article Supmission Form </h1>
</head>
<body>
    <form action="insertdb.php" method="post">
    <label for="articletitle">Article Title :</label>
    <br>
    <input type="text" name="articletitle" required >
    <br>
    <br>
    <label for="articledetails">Article Details :</label>
    <br>
    <textarea type="textarea" name="articledetails" required></textarea>
    <br><br>
    <input type="submit" value="submit">
</form>
</body>
</html>