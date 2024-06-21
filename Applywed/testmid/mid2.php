<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบ"กลางภาค"ข้อ 2 </title>
</head>
<body>
    <form method="POST">
         <label for="">ใส่ค่ารัศมี</label>
         <input type="text" id="mit2" name="mit2"><br>
         <input type="radio" id="cal1" name="calculation_type" value="circumference">
          <a> ต้องการหาความหมายเส้นรอบวง</a><br>
          <input type="radio" id="cal2" name="calculation_type" value="area">
          <a> ต้องการหาพื้นที่วงกลม</a><br>
         <button type="submit">OK</button>
    </form>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['mit2'];
        $calculation_type = $_POST['calculation_type'];

        if ($calculation_type == "circumference") {
            $circumference = 2 * M_PI * $radius;
            echo "ความยาวเส้นรอบวง: " . number_format($circumference, 2) . "<br>";
        } elseif ($calculation_type == "area") {
            $area = M_PI * $radius * $radius;
            echo "พื้นที่วงกลม: " . number_format($area, 2) . "<br>";
        }
    }
    ?>
</body>
</html>