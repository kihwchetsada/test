<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST DATA BASE</title>
    <link rel="stylesheet" href="color/list.css">
</head>
<body>
<?php
  include "connect-db.php";
  $sql ="SELECT * FROM news";
  $dbquery = mysqli_query($link,$sql) or die("cannot query");
  $num_rows = mysqli_num_rows($dbquery) or die("cannot query num rows");    

  echo "<h1>LIST DATA BASE</h1>";
  echo "<h3>จำนวนข้อมูล ".$num_rows."</h3>";
  echo "<table >";
  echo "<thead>
        <tr>
            <th>id_news</th>
            <th>title</th>
            <th>details</th>
        </tr>
        </thead>";
  echo "<tbody>";

  // Fetch and display each row
  while ($row = mysqli_fetch_assoc($dbquery)) {
    $id_news = $row['id_news'];
    $articletitle = $row['title'];
    $articledetails = $row['details'];

    echo "<tr>";
    echo "<td>" .$id_news."</td>";
    echo "<td>" .$articletitle."</td>";
    echo "<td>" .$articledetails."</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";  
?>
</body>
</html>
