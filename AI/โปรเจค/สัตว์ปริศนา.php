<?php
$attributes = [
    "ออกลูกเป็นตัว",
    "ออกลูกเป็นไข่",
    "เลี้ยงลูกด้วยนม",
    "มีขนตามร่างกาย",
    "ผิวหยาบหรือผิวมีเกล็ด",
    "สัตว์เลือดอุ่น",
    "สัตว์เลือดเย็น",
    "อยู่ทั้งบนบกและในน้ำ",
    "หายใจด้วยเหงือก"
];
$animals = [
    ["กบ", "", 1, "", "", "", "", 1, 1, "", "สัตว์ครึ่งบกครึ่งน้ำ"],
    ["เป็ด", "", 1, "", 1, "", 1, "", 1, "", "สัตว์จำพวกนก"],
    ["ค้างคาว", 1, "", 1, 1, "", "", "", "", "", "สัตว์เลี้ยงลูกด้วยนม"],
    ["งู", "", 1, "", "", 1, "", 1, "", 1, "สัตว์เลื้อยคลาน"],
    ["แซลมอล", "", 1, "", "", 1, "", 1, "", 1, "สัตว์จำพวกปลา"],
    ["จระเข้", "", 1, "", "", 1, "", 1, "", "", "สัตว์เลื้อยคลาน"],
    ["แมว", 1, "", 1, 1, "", 1, "", "", "", "สัตว์เลี้ยงลูกด้วยนม"],
    ["นกกระจอกเทศ", "", 1, "", 1, "", 1, "", "", "", "สัตว์จำพวกนก"],
];

echo "<h1>ข้อมูลสัตว์</h1>";
echo "<table border='1'>";
echo "<tr><th>ชื่อ</th>" . implode ("", array_map(fn($attr) => "<th>$attr</th>", $attributes)) . "<th></th></tr>";

foreach ($animals as $row)
 {
    echo "<tr>";
    foreach ($row as $data) 
    {
        echo "<td>$data</td>";
    }
    echo "</tr>";
}

echo "</table>";
function euclideanDistance($a, $b)
 {
    // Calculate the Euclidean distance between two arrays $a and $b
    return sqrt(array_sum(array_map(fn($x, $y) => is_numeric($x) && is_numeric($y) ? pow($x - $y, 2) : 0, array_slice($a, 2, -1), array_slice($b, 2, -1))));
}

function findNeighbors($animals, $new_animal) 
{
    // Calculate the Euclidean distances between the new animal and all animals in the array
    $distances = array_map(fn($animal) => euclideanDistance($new_animal, $animal), $animals);

    // Sort the distances in ascending order
    asort($distances);
    
    // 1-NN: Find the nearest neighbor
    $result1nn = [
        "animal" => $animals[array_key_first($distances)][0],
        "distance" => number_format(reset($distances), 2), // Format to 2 decimal places
    ];

    // 3-NN: Find the second-nearest neighbor
    $result3nn = array_map(function ($key, $distance) use ($animals) {
        return [
            "animal" => $animals[$key][0],
            "distance" => number_format($distance, 2), // Format to 2 decimal places
        ];
    },
     array_keys(array_slice($distances, 0, 3, true)), array_slice($distances, 0, 3, true));

    // Return the nearest neighbors
    return ["1nn" => $result1nn, "3nn" => $result3nn];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Retrieve the attributes of the new animal from the form
    $new_animal = array_map(fn($attr) => $_POST[$attr] ?? '', range(1, 9));
    // Find the nearest neighbors
    $results = findNeighbors($animals, $new_animal);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การทำนายสัตว์ปริศนา</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>
<form method="post" action="">
    <table style="width:100%" border="1">
        <tr>
            <th>ชื่อ</th>
            <?php foreach (range(1, 9) as $attr): ?>
                <th>
                    <label><?= " " . substr($attributes[$attr - 1], -1) . ": 1 " ?>
                        <input type='hidden' name="<?= $attr ?>" value="0">
                        <input type='checkbox' name="<?= $attr ?>" value="1">
                    </label><br>
                </th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>สัตว์ปริศนา</td>
            <?php if(isset($new_animal)): ?>
                <?php foreach ($new_animal as $attr_value): ?>
                    <td><?= $attr_value ?></td>
                <?php endforeach; ?>
            <?php else: ?>
                <?php foreach (range(1, 9) as $attr): ?>
                    <td></td>
                <?php endforeach; ?>
            <?php endif; ?>
        </tr>
    </table>
    <input type="submit" value="คำนวณ">
</form>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($new_animal)): ?>  <!--ตรวจสอบว่าวิธีการร้องขอ (HTTP request method) เป็น POST หรือไม่ -->
    <p>ข้อมูลที่ใส่เพื่อทำนาย: <?= implode(" ", $new_animal) ?></p>
    <p>ผลลัพธ์ 1-nearest neighbor (1nn): <?= $results['1nn']['animal'] ?> (<?= $results['1nn']['distance'] ?>)</p>
    <p>ผลลัพธ์ 3-nearest neighbors (3nn): <?= $results['3nn']['0']['animal'] ?> (<?= $results['3nn']['0']['distance'] ?>),
        <?= $results['3nn'][1]['animal'] ?> (<?= $results['3nn'][1]['distance'] ?>),
        <?= $results['3nn'][2]['animal'] ?> (<?= $results['3nn'][2]['distance'] ?>)</p>
        <!-- Display the image only when the predicted animal is "ค้างคาว" -->
    <?php if ($results['1nn']['animal'] === 'ค้างคาว'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/bat.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>

    <?php if ($results['1nn']['animal'] === 'กบ'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/frog.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>

    <?php if ($results['1nn']['animal'] === 'เป็ด'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/duck.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>

    <?php if ($results['1nn']['animal'] === 'งู'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/snake.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>

    <?php if ($results['1nn']['animal'] === 'แซลมอล'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/salmon.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>
  
    <?php if ($results['1nn']['animal'] === 'จระเข้'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/crocodile.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>
 
    <?php if ($results['1nn']['animal'] === 'แมว'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/cat.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>

    <?php if ($results['1nn']['animal'] === 'นกกระจอกเทศ'): ?>
        <h2>รูปสัตว์ที่คาดการณ์: <?= $results['1nn']['animal'] ?></h2>
        <img src="img/Ostrich.jpg" alt="<?= $results['1nn']['animal'] ?>" style="max-width: 30%; height: auto; margin-top: 20px;">
    <?php endif; ?>

<?php endif; ?>
</body>
</html>