<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST DATA BASE</title>
   <link rel="stylesheet" href="css/list1.css">
</head>
<body>
<?php
  include "connect.php";
  $sql ="SELECT * FROM final";
  $dbquery = mysqli_query($link,$sql) or die("cannot query");
  $num_rows = mysqli_num_rows($dbquery) or die("cannot query num rows");    

  echo "<h1>LIST DATA BASE</h1>";
  echo "<h3>จำนวนข้อมูล ".$num_rows."</h3>";
  echo "<table >";
  echo "<thead>
        <tr>
            <th>id_from</th>
            <th>name</th>
            <th>class</th>
            <th>school</th>
            <th>คำตอบ 1 </th>
            <th>คำตอบ 2 </th>
        </tr>
        </thead>";
  echo "<tbody>";
  while ($row = mysqli_fetch_assoc($dbquery))
   {
    $id_from = $row['id_from'];
    $name = $row['name'];
    $class = $row['class'];
    $school = $row['school'];
    $sub1 = $row['sub1'];
    $sub2 = $row['sub2'];

    echo "<tr>";
    echo "<td>" .$id_from."</td>";
    echo "<td>" .$name."</td>";
    echo "<td>" .$class."</td>";
    echo "<td>" .$school."</td>";
    echo "<td>" .$sub1."</td>";
    echo "<td>" .$sub2."</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";  
?>
</body>
</html>
