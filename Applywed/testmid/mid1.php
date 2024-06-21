<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบ"กลางภาค"ข้อ 1 </title>
</head>
<body>
    <form method="post" >
    <label for="lab" >Welcome to LAB PHP</label><br>
    <input type="text" id="lab" name="lab" min="1" required>
    <button type="submit">OK</button>
    </form>

    <a>***********************</a>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lab = $_POST['lab'];
        for ($i = 0; $i < $lab; $i++) {
            echo "Welcome to LAB PHP <br>";
        }
    }
    ?>
    <a>***********************</a>
</body>
</html>